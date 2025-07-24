<?php

namespace App\Controllers\Frontend;

use App\Controllers\LoadController;
use App\Models\OrdersModel;
use App\Models\RidersModel;

class Geospatial extends LoadController
{
    protected $ordersModel;
    protected $ridersModel;

    public function __construct()
    {
        $this->ordersModel = new OrdersModel();
        $this->ridersModel = new RidersModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Geospatial Insights',
            'page' => 'geospatial',
            'activeOrders' => $this->ordersModel->getActiveOrders(),
            'onlineRiders' => $this->ridersModel->getOnlineRiders(),
            'orderDensity' => $this->getOrderDensity(),
            'highCancellationAreas' => $this->getHighCancellationAreas()
        ];

        return view('templates/header', $data)
             . view('geospatial/index', $data)
             . view('templates/footer');
    }

    public function getRealTimeData()
    {
        $data = [
            'active_orders' => $this->ordersModel->getActiveOrders(),
            'online_riders' => $this->ridersModel->getOnlineRiders(),
            'order_density' => $this->getOrderDensity()
        ];

        return $this->response->setJSON($data);
    }

    private function getOrderDensity()
    {
        // Get order density by location for heatmap
        return $this->ordersModel->builder()
                                ->select('pickup_lat, pickup_lng, COUNT(*) as density')
                                ->where('pickup_lat IS NOT NULL')
                                ->where('pickup_lng IS NOT NULL')
                                ->groupBy('pickup_lat, pickup_lng')
                                ->get()
                                ->getResultArray();
    }

    private function getHighCancellationAreas()
    {
        // Get areas with high cancellation rates
        return $this->ordersModel->builder()
                                ->select('pickup_location, COUNT(*) as total_orders, 
                                        SUM(CASE WHEN status = "canceled" THEN 1 ELSE 0 END) as canceled_orders')
                                ->where('pickup_location IS NOT NULL')
                                ->groupBy('pickup_location')
                                ->having('canceled_orders > 0')
                                ->orderBy('canceled_orders', 'DESC')
                                ->limit(10)
                                ->get()
                                ->getResultArray();
    }
} 