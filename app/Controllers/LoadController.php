<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\AccessModel;
use App\Models\AuthModel;
use App\Libraries\Caching;
use App\Models\ResourcesModel;
use App\Controllers\Analytics\Analytics;
use App\Models\SupportModel;
use App\Models\MessagesModel;

class LoadController extends BaseController
{
    public $restrictedDomain = ['wekada.com', 'api.wekada.com', 'logs.wekada.com', 'dashboard.wekada.com'];
    
    protected $usersModel;
    protected $accessModel;
    protected $authModel;
    protected $accountStatus;
    protected $categoriesModel;
    protected $tagsModel;
    protected $coursesModel;
    protected $instructorsModel;
    protected $reviewsModel;
    protected $wishlistModel;
    protected $enrollmentsModel;
    protected $analyticsObject;
    protected $notesModel;
    protected $supportModel;
    protected $discussionsModel;
    protected $classesModel;
    protected $testimonialsModel;
    protected $resourcesModel;
    protected $messagesModel;
    
    public function __construct($model = [])
    {
        // initialize the models
        $this->authModel = new AuthModel();
        $this->usersModel = new UsersModel();
        $this->accessModel = new AccessModel();
        $this->analyticsObject = new Analytics();
        
        // initialize the cache object
        if(empty($this->cacheObject)) {
            $this->cacheObject = new Caching();
        }

        // get the last name of the class that has been called and trigger the model
        $childClass = get_called_class();
        $getLastName = explode('\\', $childClass);
        $triggeredModel = $getLastName[count($getLastName) - 1];

        $this->triggerModel(strtolower($triggeredModel));
    }

    /**
     * Trigger model
     * 
     * @param array $model
     * @return void
     */
    public function triggerModel($model) {
        
        $models = stringToArray($model);
        
        // Define a mapping of model names to their corresponding model classes
        $modelMap = [
            'support' => SupportModel::class,
            'resources' => ResourcesModel::class,
            'messages' => MessagesModel::class
        ];
        
        // Loop through the requested models and initialize them
        foreach ($models as $modelName) {
            if (isset($modelMap[$modelName])) {
                $propertyName = $modelName . 'Model';
                $this->{$propertyName} = !empty($this->{$propertyName}) ? $this->{$propertyName} : new $modelMap[$modelName]();
            }
        }
    }

}
