<!-- Service Performance -->
<div class="space-y-8">
    <!-- Page Header with Gradient -->
    <div class="relative overflow-hidden bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 rounded-2xl p-8 text-white">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Service Performance</h2>
                    <p class="text-blue-100 text-lg">Monitor delivery performance and service quality metrics</p>
                </div>
                <div class="flex items-center space-x-3">
                    <button onclick="refreshData()" class="px-6 py-3 bg-white bg-opacity-20 backdrop-blur-sm text-white rounded-xl hover:bg-opacity-30 transition-all duration-300 border border-white border-opacity-30">
                        <i class="fas fa-sync-alt mr-2"></i>Refresh
                    </button>
                </div>
            </div>
        </div>
        <!-- Decorative elements -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-5 rounded-full -translate-y-16 translate-x-16"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 bg-white opacity-5 rounded-full translate-y-12 -translate-x-12"></div>
    </div>

    <!-- Performance Metrics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Average Pickup Time -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-blue-200 to-blue-100 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-clock text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs text-black bg-white bg-opacity-20 px-2 py-1 rounded-full">Target: 5min</span>
                    </div>
                </div>
                <p class="text-black text-sm font-medium mb-1">Avg Pickup Time</p>
                <p class="text-3xl text-black font-bold mb-2"><?= number_format($stats['avg_pickup_time'] ?? 0, 1) ?> min</p>
                <p class="text-xs text-black">
                    <i class="fas fa-<?= ($stats['avg_pickup_time'] ?? 0) <= 5 ? 'check' : 'exclamation' ?> mr-1"></i>
                    <?= ($stats['avg_pickup_time'] ?? 0) <= 5 ? 'On target' : 'Above target' ?>
                </p>
            </div>
            <!-- <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-blue-700 to-transparent rounded-full opacity-20"></div> -->
        </div>

        <!-- Average Delivery Time -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-green-200 to-green-100 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-truck text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs text-black bg-white bg-opacity-20 px-2 py-1 rounded-full">Target: 25min</span>
                    </div>
                </div>
                <p class="text-black text-sm font-medium mb-1">Avg Delivery Time</p>
                <p class="text-3xl text-black font-bold mb-2"><?= number_format($stats['avg_delivery_time'] ?? 0, 1) ?> min</p>
                <p class="text-xs text-black">
                    <i class="fas fa-<?= ($stats['avg_delivery_time'] ?? 0) <= 25 ? 'check' : 'exclamation' ?> mr-1"></i>
                    <?= ($stats['avg_delivery_time'] ?? 0) <= 25 ? 'On target' : 'Above target' ?>
                </p>
            </div>
            <!-- <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-green-700 to-transparent rounded-full opacity-20"></div> -->
        </div>

        <!-- Completion Rate -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-purple-200 to-purple-100 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-check-circle text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs text-black bg-white bg-opacity-20 px-2 py-1 rounded-full">Target: 95%</span>
                    </div>
                </div>
                <p class="text-black text-sm font-medium mb-1">Completion Rate</p>
                <p class="text-3xl text-black font-bold mb-2"><?= number_format($stats['completion_rate'] ?? 0, 1) ?>%</p>
                <p class="text-xs text-black">
                    <i class="fas fa-<?= ($stats['completion_rate'] ?? 0) >= 95 ? 'check' : 'exclamation' ?> mr-1"></i>
                    <?= ($stats['completion_rate'] ?? 0) >= 95 ? 'Excellent' : 'Needs improvement' ?>
                </p>
            </div>
            <!-- <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-purple-700 to-transparent rounded-full opacity-20"></div> -->
        </div>

        <!-- Average Rider Rating -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-yellow-200 to-orange-100 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-orange-600 bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-star text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs text-black bg-white bg-opacity-20 px-2 py-1 rounded-full">Target: 4.5</span>
                    </div>
                </div>
                <p class="text-black text-sm font-medium mb-1">Avg Rider Rating</p>
                <p class="text-3xl text-black font-bold mb-2"><?= number_format($stats['avg_rider_rating'] ?? 0, 1) ?></p>
                <p class="text-xs text-black">
                    <i class="fas fa-<?= ($stats['avg_rider_rating'] ?? 0) >= 4.5 ? 'check' : 'exclamation' ?> mr-1"></i>
                    <?= ($stats['avg_rider_rating'] ?? 0) >= 4.5 ? 'Excellent' : 'Needs improvement' ?>
                </p>
            </div>
            <!-- <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-orange-700 to-transparent rounded-full opacity-20"></div> -->
        </div>
    </div>

    <!-- Performance Charts -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Delivery & Pickup Times Chart -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Delivery & Pickup Times</h3>
                    <p class="text-gray-600">Average times over the last 30 days</p>
                </div>
                <div class="flex items-center space-x-2">
                    <select id="timeRange" class="text-sm border border-gray-200 rounded-xl px-4 py-2 bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="30">Last 30 days</option>
                        <option value="7">Last 7 days</option>
                        <option value="90">Last 90 days</option>
                    </select>
                </div>
            </div>
            <div class="h-80">
                <canvas id="performance-chart"></canvas>
            </div>
        </div>

        <!-- Rejection Rate Chart -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Order Rejection Rate</h3>
                    <p class="text-gray-600">Current rejection rate: <?= number_format($stats['rejection_rate'] ?? 0, 1) ?>%</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">Target: <5%</span>
                </div>
            </div>
            <div class="h-80">
                <canvas id="rejection-chart"></canvas>
            </div>
        </div>
    </div>

    <!-- Rejection Reasons -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Top Rejection Reasons</h3>
                <p class="text-gray-600">Most common reasons for order cancellations</p>
            </div>
            <button onclick="PerformanceHandler.exportRejectionData()" class="text-blue-600 hover:text-blue-700 text-sm font-medium bg-blue-50 px-4 py-2 rounded-xl hover:bg-blue-100 transition-colors">
                <i class="fas fa-download mr-2"></i>Export
            </button>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php if (!empty($rejectionReasons)): ?>
                <?php foreach (array_slice($rejectionReasons, 0, 6) as $index => $reason): ?>
                    <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-6 border border-red-200 hover:shadow-lg transition-all duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center">
                                <span class="text-white font-bold text-sm">#<?= $index + 1 ?></span>
                            </div>
                            <span class="text-sm font-medium text-red-600 bg-red-200 px-2 py-1 rounded-full">
                                <?= $reason['count'] ?> orders
                            </span>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2"><?= ucfirst($reason['cancel_reason']) ?></h4>
                        <p class="text-sm text-gray-600">Frequent cancellation reason</p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-span-full text-center py-12">
                    <div class="w-16 h-16 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-check-circle text-gray-400 text-2xl"></i>
                    </div>
                    <p class="text-gray-600 font-medium">No rejection data available</p>
                    <p class="text-sm text-gray-500">All orders are being completed successfully</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Performance Insights -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Performance Summary -->
        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 border border-blue-200">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-gray-900">Performance Summary</h3>
                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-chart-line text-white"></i>
                </div>
            </div>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Overall Performance</span>
                    <span class="font-bold text-blue-600">
                        <?php 
                        $score = 0;
                        if (($stats['avg_pickup_time'] ?? 0) <= 5) $score += 25;
                        if (($stats['avg_delivery_time'] ?? 0) <= 25) $score += 25;
                        if (($stats['completion_rate'] ?? 0) >= 95) $score += 25;
                        if (($stats['avg_rider_rating'] ?? 0) >= 4.5) $score += 25;
                        echo $score . '%';
                        ?>
                    </span>
                </div>
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Service Quality</span>
                    <span class="font-bold text-green-600"><?= ($stats['avg_rider_rating'] ?? 0) >= 4.5 ? 'Excellent' : 'Good' ?></span>
                </div>
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Efficiency</span>
                    <span class="font-bold text-purple-600"><?= ($stats['completion_rate'] ?? 0) >= 95 ? 'High' : 'Medium' ?></span>
                </div>
            </div>
        </div>

        <!-- Recommendations -->
        <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 border border-purple-200">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-gray-900">Recommendations</h3>
                <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-lightbulb text-white"></i>
                </div>
            </div>
            <div class="space-y-4">
                <?php if (($stats['avg_pickup_time'] ?? 0) > 5): ?>
                    <div class="flex items-start space-x-3 p-3 bg-white bg-opacity-50 rounded-xl">
                        <i class="fas fa-clock text-orange-500 mt-1"></i>
                        <div>
                            <p class="text-sm font-medium text-gray-700">Reduce pickup time</p>
                            <p class="text-xs text-gray-600">Consider adding more riders in busy areas</p>
                        </div>
                    </div>
                <?php endif; ?>
                
                <?php if (($stats['avg_delivery_time'] ?? 0) > 25): ?>
                    <div class="flex items-start space-x-3 p-3 bg-white bg-opacity-50 rounded-xl">
                        <i class="fas fa-truck text-orange-500 mt-1"></i>
                        <div>
                            <p class="text-sm font-medium text-gray-700">Optimize delivery routes</p>
                            <p class="text-xs text-gray-600">Implement better route planning algorithms</p>
                        </div>
                    </div>
                <?php endif; ?>
                
                <?php if (($stats['completion_rate'] ?? 0) < 95): ?>
                    <div class="flex items-start space-x-3 p-3 bg-white bg-opacity-50 rounded-xl">
                        <i class="fas fa-exclamation-triangle text-orange-500 mt-1"></i>
                        <div>
                            <p class="text-sm font-medium text-gray-700">Improve completion rate</p>
                            <p class="text-xs text-gray-600">Address common cancellation reasons</p>
                        </div>
                    </div>
                <?php endif; ?>
                
                <?php if (($stats['avg_rider_rating'] ?? 0) < 4.5): ?>
                    <div class="flex items-start space-x-3 p-3 bg-white bg-opacity-50 rounded-xl">
                        <i class="fas fa-star text-orange-500 mt-1"></i>
                        <div>
                            <p class="text-sm font-medium text-gray-700">Enhance rider training</p>
                            <p class="text-xs text-gray-600">Provide better customer service training</p>
                        </div>
                    </div>
                <?php endif; ?>
                
                <?php if (($stats['avg_pickup_time'] ?? 0) <= 5 && ($stats['avg_delivery_time'] ?? 0) <= 25 && ($stats['completion_rate'] ?? 0) >= 95 && ($stats['avg_rider_rating'] ?? 0) >= 4.5): ?>
                    <div class="flex items-start space-x-3 p-3 bg-white bg-opacity-50 rounded-xl">
                        <i class="fas fa-trophy text-green-500 mt-1"></i>
                        <div>
                            <p class="text-sm font-medium text-gray-700">Excellent Performance!</p>
                            <p class="text-xs text-gray-600">All metrics are meeting targets</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Orders Table -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center justify-between p-8 border-b border-gray-200">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Orders Table</h3>
                <p class="text-gray-600">Manage and track all delivery orders</p>
            </div>
            <div class="flex items-center space-x-3">
                <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">
                    <?= count($orders) ?> orders
                </span>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                    <tr>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Order ID</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Customer</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Rider</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Pickup</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Delivery</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Amount</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Status</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Payment</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Created</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php if (!empty($orders)): ?>
                        <?php foreach ($orders as $order): ?>
                            <tr class="hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 transition-all duration-300">
                                <td class="py-4 px-6">
                                    <span class="font-medium text-gray-900">#<?= $order['order_id'] ?></span>
                                </td>
                                <td class="py-4 px-6">
                                    <div>
                                        <p class="font-medium text-gray-900">User #<?= $order['user_id'] ?></p>
                                        <p class="text-sm text-gray-600"><?= $order['user_id'] ?></p>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <?php if ($order['rider_id']): ?>
                                        <div>
                                            <p class="font-medium text-gray-900">Rider #<?= $order['rider_id'] ?></p>
                                            <p class="text-sm text-gray-600"><?= $order['rider_id'] ?></p>
                                        </div>
                                    <?php else: ?>
                                        <span class="text-gray-400">Unassigned</span>
                                    <?php endif; ?>
                                </td>
                                <td class="py-4 px-6">
                                    <p class="text-sm text-gray-900"><?= $order['pickup_location'] ?></p>
                                </td>
                                <td class="py-4 px-6">
                                    <p class="text-sm text-gray-900"><?= $order['delivery_location'] ?></p>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="font-medium text-gray-900">$<?= number_format($order['amount'], 2) ?></span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                        <?= $order['status'] === 'delivered' ? 'bg-gradient-to-r from-green-100 to-green-200 text-green-800' : 
                                            ($order['status'] === 'picked_up' ? 'bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800' : 
                                            ($order['status'] === 'accepted' ? 'bg-gradient-to-r from-yellow-100 to-yellow-200 text-yellow-800' : 
                                            ($order['status'] === 'canceled' ? 'bg-gradient-to-r from-red-100 to-red-200 text-red-800' : 
                                            'bg-gradient-to-r from-gray-100 to-gray-200 text-gray-800'))) ?>">
                                        <?= ucfirst(str_replace('_', ' ', $order['status'])) ?>
                                    </span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                        <?= $order['payment_status'] === 'paid' ? 'bg-gradient-to-r from-green-100 to-green-200 text-green-800' : 
                                            ($order['payment_status'] === 'unpaid' ? 'bg-gradient-to-r from-red-100 to-red-200 text-red-800' : 
                                            'bg-gradient-to-r from-yellow-100 to-yellow-200 text-yellow-800') ?>">
                                        <?= ucfirst($order['payment_status']) ?>
                                    </span>
                                </td>
                                <td class="py-4 px-6">
                                    <p class="text-sm text-gray-600"><?= date('M j, Y', strtotime($order['created_at'])) ?></p>
                                    <p class="text-xs text-gray-400"><?= date('g:i A', strtotime($order['created_at'])) ?></p>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center space-x-2">
                                        <a href="<?= base_url('orders/view/' . $order['id']) ?>" 
                                           class="text-blue-600 hover:text-blue-700" title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <button onclick="updateOrderStatus(<?= $order['id'] ?>)" 
                                                class="text-green-600 hover:text-green-700" title="Update Status">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <?php if (!$order['rider_id']): ?>
                                            <button onclick="assignRider(<?= $order['id'] ?>)" 
                                                    class="text-orange-600 hover:text-orange-700" title="Assign Rider">
                                                <i class="fas fa-user-plus"></i>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="10" class="text-center py-12">
                                <div class="w-16 h-16 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-inbox text-gray-400 text-2xl"></i>
                                </div>
                                <p class="text-gray-600 font-medium">No orders found</p>
                                <p class="text-sm text-gray-500">Try adjusting your filters or create a new order</p>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Status Update Modal -->
<div id="statusModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden z-50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-2xl shadow-xl max-w-md w-full">
            <div class="p-8">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold text-gray-900">Update Order Status</h3>
                    <button onclick="closeStatusModal()" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <form id="statusForm">
                    <input type="hidden" id="orderId" name="order_id">
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                        <select id="statusSelect" name="status" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                            <option value="pending">Pending</option>
                            <option value="accepted">Accepted</option>
                            <option value="picked_up">Picked Up</option>
                            <option value="delivered">Delivered</option>
                            <option value="canceled">Canceled</option>
                        </select>
                    </div>
                    <div id="reasonField" class="mb-6 hidden">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Cancel Reason</label>
                        <textarea name="reason" rows="3" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"></textarea>
                    </div>
                    <div class="flex items-center justify-end space-x-3">
                        <button type="button" onclick="closeStatusModal()" class="px-6 py-3 text-gray-700 bg-gray-100 rounded-xl hover:bg-gray-200 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" class="px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-xl hover:from-blue-600 hover:to-purple-700 transition-all duration-300">
                            Update Status
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Assign Rider Modal -->
<div id="riderModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden z-50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-2xl shadow-xl max-w-md w-full">
            <div class="p-8">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold text-gray-900">Assign Rider</h3>
                    <button onclick="closeRiderModal()" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <form id="riderForm">
                    <input type="hidden" id="assignOrderId" name="order_id">
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Select Rider</label>
                        <select name="rider_id" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                            <option value="">Choose a rider...</option>
                            <?php foreach ($riders as $rider): ?>
                                <option value="<?= $rider['id'] ?>"><?= $rider['name'] ?> (<?= $rider['vehicle_type'] ?>)</option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="flex items-center justify-end space-x-3">
                        <button type="button" onclick="closeRiderModal()" class="px-6 py-3 text-gray-700 bg-gray-100 rounded-xl hover:bg-gray-200 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" class="px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-xl hover:from-blue-600 hover:to-purple-700 transition-all duration-300">
                            Assign Rider
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('js/orders.js') ?>"></script>