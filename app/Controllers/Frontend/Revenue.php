<?php

namespace App\Controllers\Frontend;

use App\Controllers\LoadController;
use App\Models\RevenueModel;
use App\Models\OrdersModel;

class Revenue extends LoadController
{
    protected $revenueModel;
    protected $ordersModel;

    public function __construct()
    {
        $this->revenueModel = new RevenueModel();
        $this->ordersModel = new OrdersModel();
    }

    public function index()
    {
        $filters = $this->request->getGet();
        $data = [
            'title' => 'Revenue & Payments',
            'page' => 'revenue',
            'revenue' => $this->revenueModel->getRevenueWithFilters($filters),
            'stats' => $this->getRevenueStatistics(),
            'filters' => $filters
        ];

        return view('templates/header', $data)
             . view('revenue/index', $data)
             . view('templates/footer');
    }

    public function analytics()
    {
        $data = [
            'title' => 'Revenue Analytics',
            'page' => 'revenue',
            'stats' => $this->getRevenueStatistics(),
            'chartData' => $this->getRevenueChartData(),
            'locationData' => $this->getRevenueByLocation(),
            'paymentMethods' => $this->getPaymentMethodsBreakdown()
        ];

        return view('templates/header', $data)
             . view('revenue/analytics', $data)
             . view('templates/footer');
    }

    public function export()
    {
        $filters = $this->request->getGet();
        $revenue = $this->revenueModel->getRevenueWithFilters($filters);

        $filename = 'revenue_' . date('Y-m-d_H-i-s') . '.csv';
        
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');

        $output = fopen('php://output', 'w');
        
        // CSV headers
        fputcsv($output, [
            'Order ID', 'Amount', 'Commission', 'Rider Payout', 'Platform Fee',
            'Payment Method', 'Status', 'Created At', 'Processed At'
        ]);

        // CSV data
        foreach ($revenue as $record) {
            fputcsv($output, [
                $record['order_id'],
                $record['amount'],
                $record['commission'],
                $record['rider_payout'],
                $record['platform_fee'],
                $record['payment_method'],
                $record['status'],
                $record['created_at'],
                $record['processed_at']
            ]);
        }

        fclose($output);
        exit;
    }

    private function getRevenueStatistics()
    {
        $stats = [];
        
        // Total revenue
        $stats['total_revenue'] = $this->revenueModel->getTotalRevenue();
        
        // Revenue this month
        $thisMonth = date('Y-m-01');
        $stats['revenue_this_month'] = $this->revenueModel->getTotalRevenue($thisMonth);
        
        // Revenue this week
        $thisWeek = date('Y-m-d', strtotime('-7 days'));
        $stats['revenue_this_week'] = $this->revenueModel->getTotalRevenue($thisWeek);
        
        // Commission earned
        $stats['total_commission'] = $this->revenueModel->getCommissionEarnings();
        
        // Commission this month
        $stats['commission_this_month'] = $this->revenueModel->getCommissionEarnings($thisMonth);
        
        // Refunds issued
        $refunds = $this->revenueModel->getRefundsIssued();
        $stats['total_refunds'] = $refunds['total_refunds'];
        $stats['refund_count'] = $refunds['refund_count'];

        return $stats;
    }

    private function getRevenueChartData()
    {
        return $this->revenueModel->getRevenueChartData(30);
    }

    private function getRevenueByLocation()
    {
        return $this->revenueModel->getRevenueByLocation();
    }

    private function getPaymentMethodsBreakdown()
    {
        return $this->revenueModel->getPaymentMethodsBreakdown();
    }
} 