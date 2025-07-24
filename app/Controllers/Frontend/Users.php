<?php

namespace App\Controllers\Frontend;

use App\Controllers\LoadController;
use App\Models\UsersModel;
use App\Models\OrdersModel;

class Users extends LoadController
{
    protected $usersModel;
    protected $ordersModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
        $this->ordersModel = new OrdersModel();
    }

    public function index()
    {
        $filters = $this->request->getGet();
        $data = [
            'title' => 'User Analytics',
            'page' => 'users',
            'users' => $this->usersModel->getUsersWithFilters($filters),
            'stats' => $this->getUserStatistics(),
            'filters' => $filters
        ];

        return view('templates/header', $data)
             . view('users/index', $data)
             . view('templates/footer');
    }

    public function view($id)
    {
        $user = $this->usersModel->find($id);
        
        if (!$user) {
            return redirect()->to('users')->with('error', 'User not found');
        }

        $data = [
            'title' => 'User Details - ' . $user['name'],
            'page' => 'users',
            'user' => $user,
            'orders' => $this->ordersModel->getOrdersByUser($id),
            'stats' => $this->getUserStats($id)
        ];

        return view('templates/header', $data)
             . view('users/view', $data)
             . view('templates/footer');
    }

    public function analytics()
    {
        $data = [
            'title' => 'User Analytics',
            'page' => 'users',
            'stats' => $this->getUserStatistics(),
            'chartData' => $this->getUserChartData()
        ];

        return view('templates/header', $data)
             . view('users/analytics', $data)
             . view('templates/footer');
    }

    private function getUserStatistics()
    {
        $stats = [];
        
        // Total users
        $stats['total_users'] = $this->usersModel->countAll();
        
        // Active users (users with orders in last 30 days)
        $thirtyDaysAgo = date('Y-m-d', strtotime('-30 days'));
        $stats['active_users'] = $this->usersModel->getActiveUsersCount($thirtyDaysAgo);
        
        // New users this month
        $thisMonth = date('Y-m-01');
        $stats['new_users_month'] = $this->usersModel->getNewUsersCount($thisMonth);
        
        // New users this week
        $thisWeek = date('Y-m-d', strtotime('-7 days'));
        $stats['new_users_week'] = $this->usersModel->getNewUsersCount($thisWeek);
        
        // Average orders per user
        $stats['avg_orders_per_user'] = $this->usersModel->getAverageOrdersPerUser();
        
        // Retention rate
        $stats['retention_rate'] = $this->usersModel->getRetentionRate();

        return $stats;
    }

    private function getUserStats($userId)
    {
        $stats = [];
        
        // Total orders
        $stats['total_orders'] = $this->ordersModel->getOrdersCountByUser($userId);
        
        // Total spent
        $stats['total_spent'] = $this->ordersModel->getTotalSpentByUser($userId);
        
        // Average order value
        $stats['avg_order_value'] = $stats['total_orders'] > 0 ? $stats['total_spent'] / $stats['total_orders'] : 0;
        
        // Last order date
        $stats['last_order'] = $this->ordersModel->getLastOrderByUser($userId);

        return $stats;
    }

    private function getUserChartData()
    {
        // Get user registration data for the last 12 months
        $data = [];
        for ($i = 11; $i >= 0; $i--) {
            $month = date('Y-m', strtotime("-$i months"));
            $data['labels'][] = date('M Y', strtotime("-$i months"));
            $data['values'][] = $this->usersModel->getNewUsersCount($month . '-01', $month . '-31');
        }

        return $data;
    }
} 