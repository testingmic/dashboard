<?php

namespace App\Models;

use CodeIgniter\Model;

class OrdersModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'order_id', 'user_id', 'rider_id', 'pickup_location', 'delivery_location',
        'pickup_lat', 'pickup_lng', 'delivery_lat', 'delivery_lng', 'amount',
        'status', 'payment_status', 'created_at', 'picked_at', 'delivered_at',
        'canceled_at', 'cancel_reason'
    ];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getOrdersCount($startDate = null, $endDate = null)
    {
        $builder = $this->builder();
        
        if ($startDate && $endDate) {
            $builder->where('created_at >=', $startDate)
                   ->where('created_at <=', $endDate);
        } elseif ($startDate) {
            $builder->where('DATE(created_at)', $startDate);
        }

        return $builder->countAllResults();
    }

    public function getOrdersByStatus($status, $limit = null)
    {
        $builder = $this->builder();
        $builder->where('status', $status);
        
        if ($limit) {
            $builder->limit($limit);
        }

        return $builder->get()->getResultArray();
    }

    public function getRecentOrders($limit = 10)
    {
        return $this->builder()
                   ->orderBy('created_at', 'DESC')
                   ->limit($limit)
                   ->get()
                   ->getResultArray();
    }

    public function getActiveOrders()
    {
        return $this->builder()
                   ->whereIn('status', ['pending', 'accepted', 'picked_up'])
                   ->get()
                   ->getResultArray();
    }

    public function getAverageDeliveryTime()
    {
        $result = $this->builder()
                      ->select('AVG(TIMESTAMPDIFF(MINUTE, created_at, delivered_at)) as avg_time')
                      ->where('status', 'delivered')
                      ->where('delivered_at IS NOT NULL')
                      ->get()
                      ->getRowArray();

        return $result ? round($result['avg_time']) : 0;
    }

    public function getOrderStatistics()
    {
        $stats = [];
        
        // Get counts by status
        $statuses = ['pending', 'accepted', 'picked_up', 'delivered', 'canceled'];
        foreach ($statuses as $status) {
            $stats[$status] = $this->getOrdersByStatus($status);
        }

        // Get payment statistics
        $paymentStats = $this->builder()
                            ->select('payment_status, COUNT(*) as count')
                            ->groupBy('payment_status')
                            ->get()
                            ->getResultArray();

        $stats['payment_stats'] = $paymentStats;

        return $stats;
    }

    public function getOrdersWithFilters($filters = [])
    {
        $builder = $this->builder();

        if (isset($filters['date_from'])) {
            $builder->where('created_at >=', $filters['date_from']);
        }

        if (isset($filters['date_to'])) {
            $builder->where('created_at <=', $filters['date_to']);
        }

        if (isset($filters['status'])) {
            $builder->where('status', $filters['status']);
        }

        if (isset($filters['rider_id'])) {
            $builder->where('rider_id', $filters['rider_id']);
        }

        if (isset($filters['user_id'])) {
            $builder->where('user_id', $filters['user_id']);
        }

        if (isset($filters['payment_status'])) {
            $builder->where('payment_status', $filters['payment_status']);
        }

        return $builder->orderBy('created_at', 'DESC')->get()->getResultArray();
    }
} 