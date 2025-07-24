<?php

namespace App\Controllers\Frontend;

use App\Controllers\LoadController;
use App\Models\DashboardModel;
use App\Models\OrdersModel;
use App\Models\UsersModel;
use App\Models\RidersModel;
use App\Models\RevenueModel;

class Dashboard extends LoadController
{
    protected $dashboardModel;
    protected $ordersModel;
    protected $usersModel;
    protected $ridersModel;
    protected $revenueModel;

    public function __construct()
    {
        $this->dashboardModel = new DashboardModel();
        $this->ordersModel = new OrdersModel();
        $this->usersModel = new UsersModel();
        $this->ridersModel = new RidersModel();
        $this->revenueModel = new RevenueModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard Overview',
            'page' => 'dashboard',
            'kpis' => $this->getKPIs(),
            'recentOrders' => $this->getRecentOrders(),
            'topRiders' => $this->getTopRiders(),
            'revenueChart' => $this->getRevenueChart(),
            'orderStats' => $this->getOrderStats()
        ];

        return view('templates/header', $data)
             . view('dashboard/overview', $data)
             . view('templates/footer');
    }

    private function getKPIs()
    {
        $today = date('Y-m-d');
        $thisWeek = date('Y-m-d', strtotime('-7 days'));
        $thisMonth = date('Y-m-01');

        return [
            'orders_today' => $this->ordersModel->getOrdersCount($today),
            'orders_week' => $this->ordersModel->getOrdersCount($thisWeek, $today),
            'orders_month' => $this->ordersModel->getOrdersCount($thisMonth, $today),
            'active_users' => $this->usersModel->getActiveUsersCount(),
            'active_riders' => $this->ridersModel->getActiveRidersCount(),
            'total_revenue' => $this->revenueModel->getTotalRevenue(),
            'avg_delivery_time' => $this->ordersModel->getAverageDeliveryTime(),
            'orders_in_progress' => $this->ordersModel->getOrdersByStatus('in_progress'),
            'orders_completed' => $this->ordersModel->getOrdersByStatus('completed'),
            'orders_canceled' => $this->ordersModel->getOrdersByStatus('canceled')
        ];
    }

    private function getRecentOrders()
    {
        return $this->ordersModel->getRecentOrders(10);
    }

    private function getTopRiders()
    {
        return $this->ridersModel->getTopRiders(5);
    }

    private function getRevenueChart()
    {
        return $this->revenueModel->getRevenueChartData();
    }

    private function getOrderStats()
    {
        return $this->ordersModel->getOrderStatistics();
    }

    public function getRealTimeData()
    {
        $data = [
            'active_orders' => $this->ordersModel->getActiveOrders(),
            'online_riders' => $this->ridersModel->getOnlineRiders(),
            'recent_activities' => $this->dashboardModel->getRecentActivities()
        ];

        return $this->response->setJSON($data);
    }
} 