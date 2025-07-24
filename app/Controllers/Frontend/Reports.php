<?php

namespace App\Controllers\Frontend;

use App\Controllers\LoadController;
use App\Models\OrdersModel;
use App\Models\UsersModel;
use App\Models\RidersModel;
use App\Models\RevenueModel;

class Reports extends LoadController
{
    protected $ordersModel;
    protected $usersModel;
    protected $ridersModel;
    protected $revenueModel;

    public function __construct()
    {
        $this->ordersModel = new OrdersModel();
        $this->usersModel = new UsersModel();
        $this->ridersModel = new RidersModel();
        $this->revenueModel = new RevenueModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Custom Reports',
            'page' => 'reports',
            'reportTypes' => $this->getReportTypes()
        ];

        return view('templates/header', $data)
             . view('reports/index', $data)
             . view('templates/footer');
    }

    public function generate()
    {
        $reportType = $this->request->getPost('report_type');
        $startDate = $this->request->getPost('start_date');
        $endDate = $this->request->getPost('end_date');
        $format = $this->request->getPost('format', 'csv');

        switch ($reportType) {
            case 'orders':
                $data = $this->generateOrderReport($startDate, $endDate);
                break;
            case 'riders':
                $data = $this->generateRiderReport($startDate, $endDate);
                break;
            case 'revenue':
                $data = $this->generateRevenueReport($startDate, $endDate);
                break;
            case 'users':
                $data = $this->generateUserReport($startDate, $endDate);
                break;
            default:
                return $this->response->setJSON(['success' => false, 'message' => 'Invalid report type']);
        }

        if ($format === 'csv') {
            return $this->exportToCSV($data, $reportType . '_' . date('Y-m-d_H-i-s') . '.csv');
        } else {
            return $this->response->setJSON($data);
        }
    }

    private function generateOrderReport($startDate, $endDate)
    {
        $orders = $this->ordersModel->getOrdersWithFilters([
            'date_from' => $startDate,
            'date_to' => $endDate
        ]);

        $report = [];
        foreach ($orders as $order) {
            $report[] = [
                'Order ID' => $order['order_id'],
                'User ID' => $order['user_id'],
                'Rider ID' => $order['rider_id'],
                'Pickup Location' => $order['pickup_location'],
                'Delivery Location' => $order['delivery_location'],
                'Amount' => $order['amount'],
                'Status' => $order['status'],
                'Payment Status' => $order['payment_status'],
                'Created At' => $order['created_at'],
                'Delivered At' => $order['delivered_at']
            ];
        }

        return $report;
    }

    private function generateRiderReport($startDate, $endDate)
    {
        $riders = $this->ridersModel->getRidersWithFilters();
        $report = [];

        foreach ($riders as $rider) {
            $performance = $this->ridersModel->getRiderPerformance($rider['id']);
            $report[] = [
                'Rider ID' => $rider['rider_id'],
                'Name' => $rider['name'],
                'Email' => $rider['email'],
                'Phone' => $rider['phone'],
                'Vehicle Type' => $rider['vehicle_type'],
                'Total Orders' => $performance['total_orders'] ?? 0,
                'Completed Orders' => $performance['completed_orders'] ?? 0,
                'Completion Rate' => $performance['completion_rate'] ?? 0,
                'Total Earnings' => $performance['total_earnings'] ?? 0,
                'Average Order Value' => $performance['avg_order_value'] ?? 0,
                'Rating' => $rider['rating'],
                'Status' => $rider['status'],
                'Created At' => $rider['created_at']
            ];
        }

        return $report;
    }

    private function generateRevenueReport($startDate, $endDate)
    {
        $revenue = $this->revenueModel->getRevenueStatistics($startDate, $endDate);
        $report = [];

        // Summary data
        $report[] = [
            'Metric' => 'Total Revenue',
            'Value' => $revenue['total_revenue']
        ];
        $report[] = [
            'Metric' => 'Total Commission',
            'Value' => $revenue['total_commission']
        ];
        $report[] = [
            'Metric' => 'Total Refunds',
            'Value' => $revenue['refunds']['total_refunds']
        ];

        // Payment methods breakdown
        foreach ($revenue['payment_methods'] as $method) {
            $report[] = [
                'Metric' => 'Payment Method - ' . $method['payment_method'],
                'Value' => $method['total_amount'],
                'Count' => $method['count']
            ];
        }

        return $report;
    }

    private function generateUserReport($startDate, $endDate)
    {
        $users = $this->usersModel->getUsersWithFilters();
        $report = [];

        foreach ($users as $user) {
            $stats = $this->getUserStats($user['id']);
            $report[] = [
                'User ID' => $user['id'],
                'Name' => $user['name'],
                'Email' => $user['email'],
                'Phone' => $user['phone'],
                'Total Orders' => $stats['total_orders'],
                'Total Spent' => $stats['total_spent'],
                'Average Order Value' => $stats['avg_order_value'],
                'Last Order' => $stats['last_order'],
                'Created At' => $user['created_at']
            ];
        }

        return $report;
    }

    private function getUserStats($userId)
    {
        $stats = [];
        $stats['total_orders'] = $this->ordersModel->getOrdersCountByUser($userId);
        $stats['total_spent'] = $this->ordersModel->getTotalSpentByUser($userId);
        $stats['avg_order_value'] = $stats['total_orders'] > 0 ? $stats['total_spent'] / $stats['total_orders'] : 0;
        $stats['last_order'] = $this->ordersModel->getLastOrderByUser($userId);
        return $stats;
    }

    private function exportToCSV($data, $filename)
    {
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');

        $output = fopen('php://output', 'w');

        if (!empty($data)) {
            // Write headers
            fputcsv($output, array_keys($data[0]));

            // Write data
            foreach ($data as $row) {
                fputcsv($output, $row);
            }
        }

        fclose($output);
        exit;
    }

    private function getReportTypes()
    {
        return [
            'orders' => 'Order Reports',
            'riders' => 'Rider Activity Reports',
            'revenue' => 'Revenue Reports',
            'users' => 'User Reports'
        ];
    }
} 