<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\Exceptions\DatabaseException;

class FeedbackModel extends Model
{
    protected $table = 'feedback';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'order_id', 'user_id', 'rider_id', 'rating', 'comment', 'feedback_type',
        'is_flagged', 'flag_reason', 'created_at'
    ];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getFeedbackWithFilters($filters = [])
    {
        $builder = $this->builder();

        if (isset($filters['rating'])) {
            $builder->where('rating', $filters['rating']);
        }

        if (isset($filters['feedback_type'])) {
            $builder->where('feedback_type', $filters['feedback_type']);
        }

        if (isset($filters['is_flagged'])) {
            $builder->where('is_flagged', $filters['is_flagged']);
        }

        if (isset($filters['date_from'])) {
            $builder->where('created_at >=', $filters['date_from']);
        }

        if (isset($filters['date_to'])) {
            $builder->where('created_at <=', $filters['date_to']);
        }

        return $builder->orderBy('created_at', 'DESC')->get()->getResultArray();
    }

    public function getAverageRating()
    {
        try {
            $result = $this->builder()
                        ->select('AVG(rating) as avg_rating')
                        ->get()
                        ->getRowArray();

            return $result ? round($result['avg_rating'], 1) : 0;
        } catch (DatabaseException $e) {
            return 0;
        } 
    }

    public function getNegativeFeedbackCount()
    {
        return $this->builder()
                   ->where('rating <=', 3)
                   ->countAllResults();
    }

    public function getFlaggedUsersCount()
    {
        return $this->builder()
                   ->where('is_flagged', 1)
                   ->where('feedback_type', 'user')
                   ->countAllResults();
    }

    public function getFlaggedRidersCount()
    {
        return $this->builder()
                   ->where('is_flagged', 1)
                   ->where('feedback_type', 'rider')
                   ->countAllResults();
    }

    public function getFeedbackByUser($userId)
    {
        return $this->builder()
                   ->where('user_id', $userId)
                   ->orderBy('created_at', 'DESC')
                   ->get()
                   ->getResultArray();
    }

    public function getFeedbackByRider($riderId)
    {
        return $this->builder()
                   ->where('rider_id', $riderId)
                   ->orderBy('created_at', 'DESC')
                   ->get()
                   ->getResultArray();
    }

    public function flagFeedback($feedbackId, $reason)
    {
        return $this->update($feedbackId, [
            'is_flagged' => 1,
            'flag_reason' => $reason
        ]);
    }

    public function unflagFeedback($feedbackId)
    {
        return $this->update($feedbackId, [
            'is_flagged' => 0,
            'flag_reason' => null
        ]);
    }
} 