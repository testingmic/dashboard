<!-- Dashboard Overview -->
<div class="space-y-8">
    <!-- Page Header with Gradient -->
    <div class="relative overflow-hidden bg-gradient-to-r from-blue-600 via-purple-600 to-pink-500 rounded-2xl p-8 text-white">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Dashboard Overview</h2>
                    <p class="text-blue-100 text-lg">Monitor your delivery platform performance in real-time</p>
                </div>
                <div class="flex items-center space-x-3">
                    <button class="px-6 py-3 bg-white bg-opacity-20 backdrop-blur-sm text-white rounded-xl hover:bg-opacity-30 transition-all duration-300 border border-white border-opacity-30">
                        <i class="fas fa-download mr-2"></i>Export Report
                    </button>
                    <button class="px-6 py-3 bg-white bg-opacity-20 backdrop-blur-sm text-white rounded-xl hover:bg-opacity-30 transition-all duration-300 border border-white border-opacity-30">
                        <i class="fas fa-cog mr-2"></i>Settings
                    </button>
                </div>
            </div>
        </div>
        <!-- Decorative elements -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-5 rounded-full -translate-y-16 translate-x-16"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 bg-white opacity-5 rounded-full translate-y-12 -translate-x-12"></div>
    </div>

    <!-- KPI Cards with Enhanced Design -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Orders Today -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-shopping-cart text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">+12%</span>
                    </div>
                </div>
                <p class="text-blue-100 text-sm font-medium mb-1">Orders Today</p>
                <p class="text-3xl font-bold mb-2"><?= number_format($kpis['orders_today']) ?></p>
                <p class="text-xs text-blue-200">
                    <i class="fas fa-arrow-up mr-1"></i>+12% from yesterday
                </p>
            </div>
            <!-- Decorative gradient overlay -->
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-blue-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Active Users -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-pink-500 to-purple-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-pink-400 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-users text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">+8%</span>
                    </div>
                </div>
                <p class="text-pink-100 text-sm font-medium mb-1">Active Users</p>
                <p class="text-3xl font-bold mb-2"><?= number_format($kpis['active_users']) ?></p>
                <p class="text-xs text-pink-200">
                    <i class="fas fa-arrow-up mr-1"></i>+8% from last week
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-purple-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Active Riders -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-purple-500 to-blue-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-400 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-motorcycle text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Live</span>
                    </div>
                </div>
                <p class="text-purple-100 text-sm font-medium mb-1">Online Riders</p>
                <p class="text-3xl font-bold mb-2" id="online-riders-count"><?= number_format($kpis['active_riders']) ?></p>
                <p class="text-xs text-purple-200">
                    <i class="fas fa-circle mr-1 animate-pulse"></i>Real-time
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-blue-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Total Revenue -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-pink-600 to-purple-700 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-pink-500 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-dollar-sign text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">+15%</span>
                    </div>
                </div>
                <p class="text-pink-100 text-sm font-medium mb-1">Total Revenue</p>
                <p class="text-3xl font-bold mb-2">$<?= number_format($kpis['total_revenue']) ?></p>
                <p class="text-xs text-pink-200">
                    <i class="fas fa-arrow-up mr-1"></i>+15% this month
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-purple-700 to-transparent rounded-full opacity-20"></div>
        </div>
    </div>

    <!-- Charts Section with Enhanced Design -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Revenue Chart -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Revenue Trend</h3>
                    <p class="text-gray-600">Monthly revenue performance</p>
                </div>
                <div class="flex items-center space-x-2">
                    <select class="text-sm border border-gray-200 rounded-xl px-4 py-2 bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option>Last 30 days</option>
                        <option>Last 7 days</option>
                        <option>Last 90 days</option>
                    </select>
                </div>
            </div>
            <div class="h-80">
                <canvas id="revenue-chart"></canvas>
            </div>
        </div>

        <!-- Order Status Chart -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Order Status</h3>
                    <p class="text-gray-600">Current order distribution</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">Total: 0</span>
                </div>
            </div>
            <div class="h-80">
                <canvas id="order-status-chart"></canvas>
            </div>
        </div>
    </div>

    <!-- Additional Metrics with Enhanced Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Average Delivery Time -->
        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 border border-blue-200 hover:shadow-lg transition-all duration-300">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-gray-900">Avg Delivery Time</h3>
                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-clock text-white text-lg"></i>
                </div>
            </div>
            <p class="text-4xl font-bold text-gray-900 mb-4"><?= $kpis['avg_delivery_time'] ?> min</p>
            <p class="text-sm text-gray-600 mb-6">Target: 25 minutes</p>
            <div class="space-y-3">
                <div class="flex items-center justify-between text-sm">
                    <span class="font-medium text-gray-700">Performance</span>
                    <span class="font-bold text-blue-600"><?= round(($kpis['avg_delivery_time'] / 25) * 100) ?>%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                    <div class="bg-gradient-to-r from-blue-500 to-purple-600 h-3 rounded-full transition-all duration-500" style="width: <?= min(100, ($kpis['avg_delivery_time'] / 25) * 100) ?>%"></div>
                </div>
            </div>
        </div>

        <!-- Orders In Progress -->
        <div class="bg-gradient-to-br from-pink-50 to-purple-100 rounded-2xl p-8 border border-pink-200 hover:shadow-lg transition-all duration-300">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-gray-900">Orders In Progress</h3>
                <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-purple-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-truck text-white text-lg"></i>
                </div>
            </div>
            <p class="text-4xl font-bold text-gray-900 mb-4" id="active-orders-count"><?= $kpis['orders_in_progress'] ?></p>
            <p class="text-sm text-gray-600 mb-6">Currently being delivered</p>
            <div class="space-y-3">
                <div class="flex items-center justify-between text-sm">
                    <span class="font-medium text-gray-700">Completed</span>
                    <span class="font-bold text-green-600"><?= $kpis['orders_completed'] ?></span>
                </div>
                <div class="flex items-center justify-between text-sm">
                    <span class="font-medium text-gray-700">Canceled</span>
                    <span class="font-bold text-red-600"><?= $kpis['orders_canceled'] ?></span>
                </div>
            </div>
        </div>

        <!-- Weekly Stats -->
        <div class="bg-gradient-to-br from-purple-50 to-blue-100 rounded-2xl p-8 border border-purple-200 hover:shadow-lg transition-all duration-300">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-gray-900">This Week</h3>
                <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-blue-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-calendar text-white text-lg"></i>
                </div>
            </div>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Orders</span>
                    <span class="font-bold text-gray-900"><?= number_format($kpis['orders_week']) ?></span>
                </div>
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Revenue</span>
                    <span class="font-bold text-gray-900">$<?= number_format($kpis['orders_week'] * 25) ?></span>
                </div>
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">New Users</span>
                    <span class="font-bold text-green-600">+<?= rand(50, 150) ?></span>
                </div>
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">New Riders</span>
                    <span class="font-bold text-blue-600">+<?= rand(10, 30) ?></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Orders & Activities -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Recent Orders -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Recent Orders</h3>
                    <p class="text-gray-600">Latest order activities</p>
                </div>
                <a href="<?= base_url('orders') ?>" class="text-blue-600 hover:text-blue-700 text-sm font-medium bg-blue-50 px-4 py-2 rounded-xl hover:bg-blue-100 transition-colors">
                    View All
                </a>
            </div>
            <div class="space-y-4">
                <?php if (!empty($recentOrders)): ?>
                    <?php foreach (array_slice($recentOrders, 0, 5) as $order): ?>
                        <div class="flex items-center justify-between p-4 bg-gradient-to-r from-gray-50 to-gray-100 rounded-xl hover:from-gray-100 hover:to-gray-200 transition-all duration-300">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                                    <i class="fas fa-shopping-bag text-white"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">#<?= $order['order_id'] ?></p>
                                    <p class="text-sm text-gray-600"><?= $order['pickup_location'] ?></p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-bold text-gray-900">$<?= number_format($order['amount'], 2) ?></p>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                    <?= $order['status'] === 'delivered' ? 'bg-gradient-to-r from-green-100 to-green-200 text-green-800' : 
                                        ($order['status'] === 'in_progress' ? 'bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800' : 
                                        'bg-gradient-to-r from-yellow-100 to-yellow-200 text-yellow-800') ?>">
                                    <?= ucfirst(str_replace('_', ' ', $order['status'])) ?>
                                </span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="text-center py-12">
                        <div class="w-16 h-16 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-inbox text-gray-400 text-2xl"></i>
                        </div>
                        <p class="text-gray-600 font-medium">No recent orders</p>
                        <p class="text-sm text-gray-500">Orders will appear here once placed</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Recent Activities</h3>
                    <p class="text-gray-600">Live platform activities</p>
                </div>
                <button class="text-blue-600 hover:text-blue-700 text-sm font-medium bg-blue-50 px-4 py-2 rounded-xl hover:bg-blue-100 transition-colors">
                    View All
                </button>
            </div>
            <div class="space-y-4" id="recent-activities">
                <div class="flex items-center space-x-4 p-4 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl">
                    <div class="w-3 h-3 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full animate-pulse"></div>
                    <span class="text-sm font-medium text-gray-700">New order #12345 placed</span>
                    <span class="text-xs text-gray-500 bg-white px-2 py-1 rounded-full">2 min ago</span>
                </div>
                <div class="flex items-center space-x-4 p-4 bg-gradient-to-r from-green-50 to-green-100 rounded-xl">
                    <div class="w-3 h-3 bg-gradient-to-r from-green-500 to-green-600 rounded-full"></div>
                    <span class="text-sm font-medium text-gray-700">Order #12344 delivered</span>
                    <span class="text-xs text-gray-500 bg-white px-2 py-1 rounded-full">5 min ago</span>
                </div>
                <div class="flex items-center space-x-4 p-4 bg-gradient-to-r from-orange-50 to-orange-100 rounded-xl">
                    <div class="w-3 h-3 bg-gradient-to-r from-orange-500 to-orange-600 rounded-full"></div>
                    <span class="text-sm font-medium text-gray-700">New rider registered</span>
                    <span class="text-xs text-gray-500 bg-white px-2 py-1 rounded-full">10 min ago</span>
                </div>
                <div class="flex items-center space-x-4 p-4 bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl">
                    <div class="w-3 h-3 bg-gradient-to-r from-purple-500 to-purple-600 rounded-full"></div>
                    <span class="text-sm font-medium text-gray-700">Payment processed for order #12343</span>
                    <span class="text-xs text-gray-500 bg-white px-2 py-1 rounded-full">15 min ago</span>
                </div>
                <div class="flex items-center space-x-4 p-4 bg-gradient-to-r from-red-50 to-red-100 rounded-xl">
                    <div class="w-3 h-3 bg-gradient-to-r from-red-500 to-red-600 rounded-full"></div>
                    <span class="text-sm font-medium text-gray-700">Order #12342 canceled</span>
                    <span class="text-xs text-gray-500 bg-white px-2 py-1 rounded-full">20 min ago</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Riders with Enhanced Design -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Top Performing Riders</h3>
                <p class="text-gray-600">Best performing delivery partners</p>
            </div>
            <a href="<?= base_url('riders') ?>" class="text-blue-600 hover:text-blue-700 text-sm font-medium bg-blue-50 px-4 py-2 rounded-xl hover:bg-blue-100 transition-colors">
                View All Riders
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-200">
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Rider</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Vehicle</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Orders</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Earnings</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Rating</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($topRiders)): ?>
                        <?php foreach ($topRiders as $rider): ?>
                            <tr class="border-b border-gray-100 hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 transition-all duration-300">
                                <td class="py-4 px-6">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                                            <span class="text-white font-bold text-sm"><?= substr($rider['name'], 0, 1) ?></span>
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900"><?= $rider['name'] ?></p>
                                            <p class="text-sm text-gray-600"><?= $rider['email'] ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="text-sm font-medium text-gray-700 bg-gray-100 px-3 py-1 rounded-full"><?= $rider['vehicle_type'] ?></span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="font-bold text-gray-900"><?= $rider['total_orders'] ?? 0 ?></span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="font-bold text-green-600">$<?= number_format($rider['total_earnings'] ?? 0, 2) ?></span>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center">
                                        <span class="text-yellow-500 mr-1">★</span>
                                        <span class="text-sm font-medium text-gray-700"><?= number_format($rider['rating'] ?? 0, 1) ?></span>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                        <?= $rider['is_online'] ? 'bg-gradient-to-r from-green-100 to-green-200 text-green-800' : 'bg-gradient-to-r from-gray-100 to-gray-200 text-gray-800' ?>">
                                        <?= $rider['is_online'] ? 'Online' : 'Offline' ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-center py-12">
                                <div class="w-16 h-16 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-motorcycle text-gray-400 text-2xl"></i>
                                </div>
                                <p class="text-gray-600 font-medium">No riders data available</p>
                                <p class="text-sm text-gray-500">Rider data will appear here once available</p>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div> 