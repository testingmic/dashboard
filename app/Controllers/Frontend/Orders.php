<?php

namespace App\Controllers\Frontend;

use App\Controllers\LoadController;
use App\Models\OrdersModel;
use App\Models\UsersModel;
use App\Models\RidersModel;

class Orders extends LoadController
{
    protected $ordersModel;
    protected $usersModel;
    protected $ridersModel;

    public function __construct()
    {
        $this->ordersModel = new OrdersModel();
        $this->usersModel = new UsersModel();
        $this->ridersModel = new RidersModel();
    }

    public function index()
    {
        $filters = $this->request->getGet();
        $data = [
            'title' => 'Orders Management',
            'page' => 'orders',
            'orders' => $this->ordersModel->getOrdersWithFilters($filters),
            'users' => $this->usersModel->findAll(),
            'riders' => $this->ridersModel->findAll(),
            'filters' => $filters
        ];

        return view('templates/header', $data)
             . view('orders/index', $data)
             . view('templates/footer');
    }

    public function view($id)
    {
        $order = $this->ordersModel->find($id);
        
        if (!$order) {
            return redirect()->to('orders')->with('error', 'Order not found');
        }

        $data = [
            'title' => 'Order Details - #' . $order['order_id'],
            'page' => 'orders',
            'order' => $order,
            'user' => $this->usersModel->find($order['user_id']),
            'rider' => $order['rider_id'] ? $this->ridersModel->find($order['rider_id']) : null
        ];

        return view('templates/header', $data)
             . view('orders/view', $data)
             . view('templates/footer');
    }

    public function updateStatus()
    {
        $orderId = $this->request->getPost('order_id');
        $status = $this->request->getPost('status');
        $reason = $this->request->getPost('reason');

        $data = ['status' => $status];
        
        if ($status === 'canceled' && $reason) {
            $data['cancel_reason'] = $reason;
            $data['canceled_at'] = date('Y-m-d H:i:s');
        } elseif ($status === 'picked_up') {
            $data['picked_at'] = date('Y-m-d H:i:s');
        } elseif ($status === 'delivered') {
            $data['delivered_at'] = date('Y-m-d H:i:s');
        }

        $result = $this->ordersModel->update($orderId, $data);

        if ($result) {
            return $this->response->setJSON(['success' => true, 'message' => 'Order status updated successfully']);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Failed to update order status']);
        }
    }

    public function assignRider()
    {
        $orderId = $this->request->getPost('order_id');
        $riderId = $this->request->getPost('rider_id');

        $result = $this->ordersModel->update($orderId, [
            'rider_id' => $riderId,
            'status' => 'accepted'
        ]);

        if ($result) {
            return $this->response->setJSON(['success' => true, 'message' => 'Rider assigned successfully']);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Failed to assign rider']);
        }
    }

    public function export()
    {
        $filters = $this->request->getGet();
        $orders = $this->ordersModel->getOrdersWithFilters($filters);

        $filename = 'orders_' . date('Y-m-d_H-i-s') . '.csv';
        
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');

        $output = fopen('php://output', 'w');
        
        // CSV headers
        fputcsv($output, [
            'Order ID', 'User', 'Rider', 'Pickup Location', 'Delivery Location',
            'Amount', 'Status', 'Payment Status', 'Created At', 'Delivered At'
        ]);

        // CSV data
        foreach ($orders as $order) {
            fputcsv($output, [
                $order['order_id'],
                $order['user_id'],
                $order['rider_id'],
                $order['pickup_location'],
                $order['delivery_location'],
                $order['amount'],
                $order['status'],
                $order['payment_status'],
                $order['created_at'],
                $order['delivered_at']
            ]);
        }

        fclose($output);
        exit;
    }

    public function getOrderStats()
    {
        $stats = $this->ordersModel->getOrderStatistics();
        return $this->response->setJSON($stats);
    }
} 