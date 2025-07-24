<?php

namespace App\Controllers\Resources;

use App\Controllers\LoadController;
use App\Libraries\Routing;
use App\Models\ResourcesModel;
use Exception;

class Resources extends LoadController {

    private $allowedImageTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
    private $allowedVideoTypes = ['video/mp4', 'video/webm', 'video/quicktime'];
    private $maxImageSize = 5;
    private $maxVideoSize = 20;
    private $maxAudioSize = 2;
    private $uploadPath;
    private $thumbnailPath;
    private $audioPath;

    /**
     * List the resources
     * 
     * @return array
     */
    public function list() {

        $resources = $this->resourcesModel->getRecords($this->submittedPayload);

        return Routing::success($resources);

    }

    /**
     * View a resource
     * 
     * @return array
     */
    public function view() {

        $resource = $this->resourcesModel->getRecord($this->payload['resource_id']);

        if(empty($resource)) {
            return Routing::notFound();
        }

        return Routing::success($resource);
    }

    /**
     * Create a resource
     * 
     * @return array
     */
    public function create() {
        
        $payload = [
            'user_id' => $this->currentUser['user_id'],
            'section' => $this->payload['section'],
            'record_id' => $this->payload['record_id'],
        ];

        $uploadedList = $this->uploadMedia($payload['section'], $payload['record_id'], $payload['user_id'], $this->payload['file_uploads']);

        if(empty($uploadedList)) {
            return Routing::error('No files uploaded');
        }

        return Routing::success('Files uploaded successfully');

    }

    /**
     * Delete a resource
     * 
     * @return array
     */
    public function delete() {

        $whereClause = [];

        // check if the user is admin
        if(!is_admin($this->currentUser)) {
            $whereClause['user_id'] = $this->currentUser['user_id'];
        }

        // get the resource
        $resource = $this->resourcesModel->getRecord($this->payload['resource_id'], $whereClause);

        if(empty($resource)) {
            return Routing::notFound();
        }

        // delete the resource
        $this->resourcesModel->deleteRecord($this->payload['resource_id']);
        
        return Routing::success('Resource deleted successfully');
    }

    /**
     * Ensure the directories exist
     */
    private function ensureDirectoriesExist() {
        if (!file_exists($this->uploadPath)) {
            mkdir($this->uploadPath, 0755, true);
        }
        if (!file_exists($this->thumbnailPath)) {
            mkdir($this->thumbnailPath, 0755, true);
        }
        if (!file_exists($this->audioPath)) {
            mkdir($this->audioPath, 0755, true);
        }
    }

    /**
     * Upload media
     * @param string $section
     * @param int $recordId
     * @param int $userId
     * @param array $filesList
     * 
     * @return array
     */
    public function uploadMedia($section, $recordId, $userId, $filesList) {

        try {

            // create the upload path
            $today = date('Ymd');

            $uploadPath = "media/" . $today . "/";

            $this->audioPath = rtrim(PUBLICPATH, "/") . "/assets/uploads/audio/" . $today . "/";

            $this->uploadPath = rtrim(PUBLICPATH, "/") . "/assets/uploads/media/" . $today . "/";
            $this->thumbnailPath = rtrim(PUBLICPATH, "/") . "/assets/uploads/media/" . $today . "/thumbnails/";

            $this->ensureDirectoriesExist();

            $uploadedList = [];

            if(!empty($filesList['audio'])) {
                $filesList['audio'] = [$filesList['audio']];
            }

            // get the video thumbnails
            $videoThumbnail = $filesList['thumbnails'] ?? [];

            foreach(['audio', 'media'] as $itype) {

                $isMedia = (bool)($itype === 'media');

                // loop through the files
                foreach(($filesList[$itype] ?? []) as $key => $file) {

                    // create a new object of the File class
                    $theFile = new \CodeIgniter\Files\File($file);
                    
                    // get the image information
                    $originalName = $file->getName();
                    $extension = $theFile->guessExtension();
                    $megabytes = $theFile->getSizeByUnit('mb');
                    $mimeType = $theFile->getMimeType();

                    // create a new name for the file
                    $newName = $this->createRandomNameUUIDFormat($originalName);

                    // set the file path
                    $filePath = $this->uploadPath;

                    // validate the file uploaded
                    if(!$file->isValid() && !$file->hasMoved()) {
                        continue;
                    }
                    
                    if($isMedia) {
                        $isImage = true;
                        if (strpos($mimeType, 'image') !== false) {
                            if(!in_array($mimeType, $this->allowedImageTypes)) {
                                continue;
                            }
                            if($megabytes > $this->maxImageSize) {
                                continue;
                            }
                        } else {
                            $isImage = false;
                            if(!in_array($mimeType, $this->allowedVideoTypes)) {
                                continue;
                            }
                            if($megabytes > $this->maxVideoSize) {
                                continue;
                            }
                        }

                        // move the file to the upload path
                        $file->move($filePath, $newName);

                        if($isImage) {
                            $uploadedList['images']['files'][] = $uploadPath . $newName;
                            $this->createImageThumbnail($filePath . $newName, $this->thumbnailPath . '300x300_' . $newName);
                            $uploadedList['images']['thumbnails'][] = [
                                $uploadPath . 'thumbnails/300x300_' . $newName
                            ];
                        } else {

                            // get the video thumbnail
                            $vidThumb = $videoThumbnail[$key] ?? null;
                            $uploadedList['video']['files'][] = $uploadPath . $newName;

                            if(!empty($vidThumb)) {
                                // move the thumbnail to the thumbnail path
                                $vidThumb->move($this->thumbnailPath, explode('.', $newName)[0] . '.jpg');
                                // add the thumbnail to the uploaded list
                                if(!empty($videoThumbnail)) {
                                    $uploadedList['video']['thumbnails'][] = [
                                        $uploadPath . 'thumbnails/'. explode('.', $newName)[0] . '.jpg'
                                    ];
                                }
                            }
                        }
                    }
                    
                    if($megabytes > $this->maxAudioSize || (strpos($originalName, '.wav') === false) || !in_array($mimeType, $this->allowedVideoTypes)) {
                        continue;
                    }

                    // move the file to the upload path
                    $file->move($this->audioPath, $newName);

                    $uploadedList['audio']['files'][] = "audio/" . $today . "/" . $newName;

                }

            }

            if(empty($uploadedList)) return [];

            $mediaModel = new ResourcesModel();
            $mediaModel->createMediaRecord($uploadedList, $section, $recordId, $userId);

            // return the uploaded list
            return $uploadedList;

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Create a thumbnail for an image
     * @param string $sourcePath
     * @param string $thumbPath
     * @param int $width
     * @param int $height
     */
    public function createImageThumbnail($sourcePath, $thumbPath, $width = 250, $height = 250)
    {
        $image = \Config\Services::image()
            ->withFile($sourcePath)
            ->resize($width, $height, true, 'width')
            ->save($thumbPath);
    }

    /**
     * Create a random name in UUID format
     * @param string $originalName
     * @return string
     */
    private function createRandomNameUUIDFormat($originalName) {
        $extension = pathinfo($originalName, PATHINFO_EXTENSION);
        $uuid = sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff), mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
    
        return $extension ? $uuid . '.' . ltrim($extension, '.') : $uuid;
    }

} 