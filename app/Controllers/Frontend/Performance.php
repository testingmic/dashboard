<?php

namespace App\Controllers\Frontend;

use App\Controllers\LoadController;
use App\Models\OrdersModel;
use App\Models\RidersModel;
use App\Controllers\Frontend\Orders;
use App\Models\UsersModel;

class Performance extends LoadController
{
    protected $ordersModel;
    protected $ridersModel;
    protected $ordersController;
    protected $usersModel;

    public function __construct()
    {
        $this->ordersModel = new OrdersModel();
        $this->ridersModel = new RidersModel();
        $this->ordersController = new Orders();
        $this->usersModel = new UsersModel();
    }

    public function index()
    {
        $filters = $this->request->getGet();
        $data = [
            'title' => 'Service Performance',
            'page' => 'performance',
            'stats' => $this->getPerformanceStatistics(),
            'chartData' => $this->getPerformanceChartData(),
            'rejectionReasons' => $this->getRejectionReasons(),
            'orders' => $this->ordersModel->getOrdersWithFilters($filters),
            'users' => $this->usersModel->findAll(),
            'riders' => $this->ridersModel->findAll(),
            'filters' => $filters,
        ];

        return view('templates/header', $data)
             . view('performance/index', $data)
             . view('templates/footer');
    }

    private function getPerformanceStatistics()
    {
        $stats = [];
        
        // Average pickup time
        $stats['avg_pickup_time'] = $this->ordersModel->getAveragePickupTime();
        
        // Average delivery time
        $stats['avg_delivery_time'] = $this->ordersModel->getAverageDeliveryTime();
        
        // Order completion rate
        $stats['completion_rate'] = $this->ordersModel->getCompletionRate();
        
        // Order rejection rate
        $stats['rejection_rate'] = $this->ordersModel->getRejectionRate();
        
        // Average rider rating
        $stats['avg_rider_rating'] = $this->ridersModel->getAverageRating();

        return $stats;
    }

    private function getPerformanceChartData()
    {
        // Get performance data for the last 30 days
        $data = [];
        for ($i = 29; $i >= 0; $i--) {
            $date = date('Y-m-d', strtotime("-$i days"));
            $data['labels'][] = date('M j', strtotime("-$i days"));
            $data['delivery_times'][] = $this->ordersModel->getAverageDeliveryTimeByDate($date);
            $data['pickup_times'][] = $this->ordersModel->getAveragePickupTimeByDate($date);
        }

        return $data;
    }

    private function getRejectionReasons()
    {
        // Get order rejection/cancellation reasons
        return $this->ordersModel->builder()
                                ->select('cancel_reason, COUNT(*) as count')
                                ->where('status', 'canceled')
                                ->where('cancel_reason IS NOT NULL')
                                ->groupBy('cancel_reason')
                                ->orderBy('count', 'DESC')
                                ->get()
                                ->getResultArray();
    }
} 