<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\Exceptions\DatabaseException;

class RevenueModel extends Model
{
    protected $table = 'revenue';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'order_id', 'amount', 'commission', 'rider_payout', 'platform_fee',
        'payment_method', 'status', 'created_at', 'processed_at'
    ];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getTotalRevenue($startDate = null, $endDate = null)
    {
        $builder = $this->builder();
        
        if ($startDate && $endDate) {
            $builder->where('created_at >=', $startDate)
                   ->where('created_at <=', $endDate);
        }

        $result = $builder->select('SUM(amount) as total_revenue')
                         ->where('status', 'completed')
                         ->get()
                         ->getRowArray();

        return $result ? $result['total_revenue'] : 0;
    }

    public function getRevenueWithFilters($filters = []) {
        return [];
    }

    public function getRevenueChartData($days = 30)
    {
        $startDate = date('Y-m-d', strtotime("-{$days} days"));
        
        $result = $this->builder()
                      ->select('DATE(created_at) as date, SUM(amount) as daily_revenue')
                      ->where('created_at >=', $startDate)
                      ->where('status', 'completed')
                      ->groupBy('DATE(created_at)')
                      ->orderBy('date', 'ASC')
                      ->get()
                      ->getResultArray();

        return $result;
    }

    public function getRevenueByLocation($startDate = null, $endDate = null)
    {
        $builder = $this->builder();
        
        if ($startDate && $endDate) {
            $builder->where('revenue.created_at >=', $startDate)
                   ->where('revenue.created_at <=', $endDate);
        }

        return $builder->select('
                orders.pickup_location,
                SUM(revenue.amount) as total_revenue,
                COUNT(revenue.id) as order_count
            ')
            ->join('orders', 'orders.id = revenue.order_id')
            ->where('revenue.status', 'completed')
            ->groupBy('orders.pickup_location')
            ->orderBy('total_revenue', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function getCommissionEarnings($startDate = null, $endDate = null)
    {
        $builder = $this->builder();
        
        if ($startDate && $endDate) {
            $builder->where('created_at >=', $startDate)
                   ->where('created_at <=', $endDate);
        }

        $result = $builder->select('SUM(commission) as total_commission')
                         ->where('status', 'completed')
                         ->get()
                         ->getRowArray();

        return $result ? $result['total_commission'] : 0;
    }

    public function getPaymentMethodsBreakdown($startDate = null, $endDate = null)
    {
        $builder = $this->builder();
        
        if ($startDate && $endDate) {
            $builder->where('created_at >=', $startDate)
                   ->where('created_at <=', $endDate);
        }

        return $builder->select('
                payment_method,
                COUNT(*) as count,
                SUM(amount) as total_amount
            ')
            ->where('status', 'completed')
            ->groupBy('payment_method')
            ->orderBy('total_amount', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function getRiderPayouts($startDate = null, $endDate = null)
    {
        $builder = $this->builder();
        
        if ($startDate && $endDate) {
            $builder->where('revenue.created_at >=', $startDate)
                   ->where('revenue.created_at <=', $endDate);
        }

        return $builder->select('
                riders.name as rider_name,
                SUM(revenue.rider_payout) as total_payout,
                COUNT(revenue.id) as order_count
            ')
            ->join('orders', 'orders.id = revenue.order_id')
            ->join('riders', 'riders.id = orders.rider_id')
            ->where('revenue.status', 'completed')
            ->groupBy('riders.id')
            ->orderBy('total_payout', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function getRefundsIssued($startDate = null, $endDate = null)
    {
        $builder = $this->builder();
        
        if ($startDate && $endDate) {
            $builder->where('created_at >=', $startDate)
                   ->where('created_at <=', $endDate);
        }

        $result = $builder->select('SUM(amount) as total_refunds, COUNT(*) as refund_count')
                         ->where('status', 'refunded')
                         ->get()
                         ->getRowArray();

        return $result ? $result : ['total_refunds' => 0, 'refund_count' => 0];
    }

    public function getRevenueStatistics($startDate = null, $endDate = null)
    {
        $stats = [];
        
        $stats['total_revenue'] = $this->getTotalRevenue($startDate, $endDate);
        $stats['total_commission'] = $this->getCommissionEarnings($startDate, $endDate);
        $stats['payment_methods'] = $this->getPaymentMethodsBreakdown($startDate, $endDate);
        $stats['rider_payouts'] = $this->getRiderPayouts($startDate, $endDate);
        $stats['refunds'] = $this->getRefundsIssued($startDate, $endDate);

        return $stats;
    }
} 