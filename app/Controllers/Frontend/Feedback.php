<?php

namespace App\Controllers\Frontend;

use App\Controllers\LoadController;
use App\Models\FeedbackModel;
use App\Models\OrdersModel;
use App\Models\UsersModel;
use App\Models\RidersModel;

class Feedback extends LoadController
{
    protected $feedbackModel;
    protected $ordersModel;
    protected $usersModel;
    protected $ridersModel;

    public function __construct()
    {
        $this->feedbackModel = new FeedbackModel();
        $this->ordersModel = new OrdersModel();
        $this->usersModel = new UsersModel();
        $this->ridersModel = new RidersModel();
    }

    public function index()
    {
        $filters = $this->request->getGet();
        $data = [
            'title' => 'Feedback & Ratings',
            'page' => 'feedback',
            'feedback' => $this->feedbackModel->getFeedbackWithFilters($filters),
            'stats' => $this->getFeedbackStatistics(),
            'filters' => $filters
        ];

        return view('templates/header', $data)
             . view('feedback/index', $data)
             . view('templates/footer');
    }

    public function view($id)
    {
        $feedback = $this->feedbackModel->find($id);
        
        if (!$feedback) {
            return redirect()->to('feedback')->with('error', 'Feedback not found');
        }

        $data = [
            'title' => 'Feedback Details',
            'page' => 'feedback',
            'feedback' => $feedback,
            'order' => $this->ordersModel->find($feedback['order_id']),
            'user' => $this->usersModel->find($feedback['user_id']),
            'rider' => $this->ridersModel->find($feedback['rider_id'])
        ];

        return view('templates/header', $data)
             . view('feedback/view', $data)
             . view('templates/footer');
    }

    public function analytics()
    {
        $data = [
            'title' => 'Feedback Analytics',
            'page' => 'feedback',
            'stats' => $this->getFeedbackStatistics(),
            'chartData' => $this->getFeedbackChartData(),
            'ratingDistribution' => $this->getRatingDistribution()
        ];

        return view('templates/header', $data)
             . view('feedback/analytics', $data)
             . view('templates/footer');
    }

    private function getFeedbackStatistics()
    {
        $stats = [];
        
        // Total feedback
        $stats['total_feedback'] = $this->feedbackModel->countAll();
        
        // Average rating
        $stats['avg_rating'] = $this->feedbackModel->getAverageRating();
        
        // Rating distribution
        $stats['rating_distribution'] = $this->getRatingDistribution();
        
        // Negative feedback count
        $stats['negative_feedback'] = $this->feedbackModel->getNegativeFeedbackCount();
        
        // Flagged users/riders
        $stats['flagged_users'] = $this->feedbackModel->getFlaggedUsersCount();
        $stats['flagged_riders'] = $this->feedbackModel->getFlaggedRidersCount();

        return $stats;
    }

    private function getFeedbackChartData()
    {
        // Get feedback data for the last 12 months
        $data = [];
        for ($i = 11; $i >= 0; $i--) {
            $month = date('Y-m', strtotime("-$i months"));
            $data['labels'][] = date('M Y', strtotime("-$i months"));
            $data['values'][] = $this->feedbackModel->builder()
                                                   ->where('created_at >=', $month . '-01')
                                                   ->where('created_at <=', $month . '-31')
                                                   ->countAllResults();
        }

        return $data;
    }

    private function getRatingDistribution()
    {
        return $this->feedbackModel->builder()
                                  ->select('rating, COUNT(*) as count')
                                  ->groupBy('rating')
                                  ->orderBy('rating', 'DESC')
                                  ->get()
                                  ->getResultArray();
    }
} 