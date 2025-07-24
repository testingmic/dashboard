<?php

namespace App\Controllers\Frontend;

use App\Controllers\LoadController;
use App\Models\RidersModel;
use App\Models\OrdersModel;

class Riders extends LoadController
{
    protected $ridersModel;
    protected $ordersModel;

    public function __construct()
    {
        $this->ridersModel = new RidersModel();
        $this->ordersModel = new OrdersModel();
    }

    public function index()
    {
        $filters = $this->request->getGet();
        $data = [
            'title' => 'Rider Analytics',
            'page' => 'riders',
            'riders' => $this->ridersModel->getRidersWithFilters($filters),
            'stats' => $this->getRiderStatistics(),
            'filters' => $filters
        ];

        return view('templates/header', $data)
             . view('riders/index', $data)
             . view('templates/footer');
    }

    public function view($id)
    {
        $rider = $this->ridersModel->find($id);
        
        if (!$rider) {
            return redirect()->to('riders')->with('error', 'Rider not found');
        }

        $data = [
            'title' => 'Rider Details - ' . $rider['name'],
            'page' => 'riders',
            'rider' => $rider,
            'performance' => $this->ridersModel->getRiderPerformance($id),
            'orders' => $this->ordersModel->getOrdersByRider($id)
        ];

        return view('templates/header', $data)
             . view('riders/view', $data)
             . view('templates/footer');
    }

    public function analytics()
    {
        $data = [
            'title' => 'Rider Analytics',
            'page' => 'riders',
            'stats' => $this->getRiderStatistics(),
            'chartData' => $this->getRiderChartData()
        ];

        return view('templates/header', $data)
             . view('riders/analytics', $data)
             . view('templates/footer');
    }

    public function updateStatus()
    {
        $riderId = $this->request->getPost('rider_id');
        $status = $this->request->getPost('status');
        $isOnline = $this->request->getPost('is_online');

        $result = $this->ridersModel->updateRiderStatus($riderId, $status, $isOnline);

        if ($result) {
            return $this->response->setJSON(['success' => true, 'message' => 'Rider status updated successfully']);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Failed to update rider status']);
        }
    }

    private function getRiderStatistics()
    {
        $stats = [];
        
        // Total riders
        $stats['total_riders'] = $this->ridersModel->countAll();
        
        // Active riders
        $stats['active_riders'] = $this->ridersModel->builder()
                                                   ->where('status', 'active')
                                                   ->countAllResults();
        
        // Online riders
        $stats['online_riders'] = $this->ridersModel->builder()
                                                   ->where('is_online', 1)
                                                   ->where('status', 'active')
                                                   ->countAllResults();
        
        // New riders this month
        $thisMonth = date('Y-m-01');
        $stats['new_riders_month'] = $this->ridersModel->builder()
                                                      ->where('created_at >=', $thisMonth)
                                                      ->countAllResults();
        
        // Average deliveries per rider
        $stats['avg_deliveries_per_rider'] = $this->ridersModel->getAverageDeliveriesPerRider();
        
        // Average earnings per rider
        $stats['avg_earnings_per_rider'] = $this->ridersModel->getAverageEarningsPerRider();

        return $stats;
    }

    private function getRiderChartData()
    {
        // Get rider registration data for the last 12 months
        $data = [];
        for ($i = 11; $i >= 0; $i--) {
            $month = date('Y-m', strtotime("-$i months"));
            $data['labels'][] = date('M Y', strtotime("-$i months"));
            $data['values'][] = $this->ridersModel->builder()
                                                 ->where('created_at >=', $month . '-01')
                                                 ->where('created_at <=', $month . '-31')
                                                 ->countAllResults();
        }

        return $data;
    }
} 