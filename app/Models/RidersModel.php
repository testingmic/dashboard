<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\Exceptions\DatabaseException;

class RidersModel extends Model
{
    protected $table = 'riders';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'rider_id', 'name', 'email', 'phone', 'vehicle_type', 'vehicle_number',
        'current_lat', 'current_lng', 'status', 'is_online', 'rating',
        'total_deliveries', 'total_earnings', 'acceptance_rate', 'completion_rate',
        'created_at', 'last_active'
    ];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getActiveRidersCount()
    {
        return $this->builder()
                   ->where('status', 'active')
                   ->where('is_online', 1)
                   ->countAllResults();
    }

    public function getOnlineRiders()
    {
        return $this->builder()
                   ->where('is_online', 1)
                   ->where('status', 'active')
                   ->get()
                   ->getResultArray();
    }

    public function getAverageDeliveriesPerRider() {
        return 0;
    } 

    public function getAverageEarningsPerRider() {
        return 0;
    }

    public function getTopRiders($limit = 5)
    {
        return $this->builder()
                   ->select('riders.*, COUNT(orders.id) as total_orders, SUM(orders.amount) as total_earnings')
                   ->join('orders', 'orders.rider_id = riders.id', 'left')
                   ->where('orders.status', 'delivered')
                   ->groupBy('riders.id')
                   ->orderBy('total_orders', 'DESC')
                   ->limit($limit)
                   ->get()
                   ->getResultArray();
    }

    public function getRiderStatistics()
    {
        $stats = [];
        
        // Total riders
        $stats['total_riders'] = $this->countAll();
        
        // Active riders
        $stats['active_riders'] = $this->builder()
                                      ->where('status', 'active')
                                      ->countAllResults();
        
        // Online riders
        $stats['online_riders'] = $this->builder()
                                      ->where('is_online', 1)
                                      ->where('status', 'active')
                                      ->countAllResults();
        
        // New riders this month
        $thisMonth = date('Y-m-01');
        $stats['new_riders_month'] = $this->builder()
                                         ->where('created_at >=', $thisMonth)
                                         ->countAllResults();

        return $stats;
    }

    public function getRiderPerformance($riderId)
    {
        try {
            $result = $this->builder()
                        ->select('
                            riders.*,
                            COUNT(orders.id) as total_orders,
                            SUM(CASE WHEN orders.status = "delivered" THEN 1 ELSE 0 END) as completed_orders,
                            AVG(orders.amount) as avg_order_value,
                            SUM(orders.amount) as total_earnings
                        ')
                        ->join('orders', 'orders.rider_id = riders.id', 'left')
                        ->where('riders.id', $riderId)
                        ->groupBy('riders.id')
                        ->get()
                        ->getRowArray();

            if ($result) {
                $result['completion_rate'] = $result['total_orders'] > 0 
                    ? round(($result['completed_orders'] / $result['total_orders']) * 100, 2) 
                    : 0;
            }

            return $result;
        } catch (DatabaseException $e) {
            return [];
        }
    }

    public function getRidersWithFilters($filters = [])
    {
        $builder = $this->builder();

        if (isset($filters['status'])) {
            $builder->where('status', $filters['status']);
        }

        if (isset($filters['is_online'])) {
            $builder->where('is_online', $filters['is_online']);
        }

        if (isset($filters['vehicle_type'])) {
            $builder->where('vehicle_type', $filters['vehicle_type']);
        }

        if (isset($filters['min_rating'])) {
            $builder->where('rating >=', $filters['min_rating']);
        }

        return $builder->orderBy('created_at', 'DESC')->get()->getResultArray();
    }

    public function updateRiderLocation($riderId, $lat, $lng)
    {
        return $this->update($riderId, [
            'current_lat' => $lat,
            'current_lng' => $lng,
            'last_active' => date('Y-m-d H:i:s')
        ]);
    }

    public function updateRiderStatus($riderId, $status, $isOnline = null)
    {
        $data = ['status' => $status];
        
        if ($isOnline !== null) {
            $data['is_online'] = $isOnline;
        }

        return $this->update($riderId, $data);
    }

    public function getAverageRating() {
        return 0;
    }
} 