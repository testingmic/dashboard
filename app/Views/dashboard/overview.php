<!-- Dashboard Overview -->
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-gray-900">Dashboard Overview</h2>
            <p class="text-gray-600">Monitor your delivery platform performance in real-time</p>
        </div>
        <div class="flex items-center space-x-3">
            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                <i class="fas fa-download mr-2"></i>Export Report
            </button>
            <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
                <i class="fas fa-cog mr-2"></i>Settings
            </button>
        </div>
    </div>

    <!-- KPI Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Orders Today -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 card-hover">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Orders Today</p>
                    <p class="text-2xl font-bold text-gray-900"><?= number_format($kpis['orders_today']) ?></p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up mr-1"></i>+12% from yesterday
                    </p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-shopping-cart text-blue-600 text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Active Users -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 card-hover">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Active Users</p>
                    <p class="text-2xl font-bold text-gray-900"><?= number_format($kpis['active_users']) ?></p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up mr-1"></i>+8% from last week
                    </p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-users text-green-600 text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Active Riders -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 card-hover">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Online Riders</p>
                    <p class="text-2xl font-bold text-gray-900" id="online-riders-count"><?= number_format($kpis['active_riders']) ?></p>
                    <p class="text-xs text-blue-600 mt-1">
                        <i class="fas fa-circle mr-1"></i>Real-time
                    </p>
                </div>
                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-motorcycle text-orange-600 text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Total Revenue -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 card-hover">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Total Revenue</p>
                    <p class="text-2xl font-bold text-gray-900">$<?= number_format($kpis['total_revenue']) ?></p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up mr-1"></i>+15% this month
                    </p>
                </div>
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-dollar-sign text-purple-600 text-xl"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Revenue Chart -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-900">Revenue Trend</h3>
                <div class="flex items-center space-x-2">
                    <select class="text-sm border border-gray-300 rounded-lg px-3 py-1">
                        <option>Last 30 days</option>
                        <option>Last 7 days</option>
                        <option>Last 90 days</option>
                    </select>
                </div>
            </div>
            <div class="h-64">
                <canvas id="revenue-chart"></canvas>
            </div>
        </div>

        <!-- Order Status Chart -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-900">Order Status</h3>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600">Total: <?= array_sum(array_slice($orderStats, 0, 4)) ?></span>
                </div>
            </div>
            <div class="h-64">
                <canvas id="order-status-chart"></canvas>
            </div>
        </div>
    </div>

    <!-- Additional Metrics -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Average Delivery Time -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-900">Avg Delivery Time</h3>
                <i class="fas fa-clock text-gray-400"></i>
            </div>
            <p class="text-3xl font-bold text-gray-900"><?= $kpis['avg_delivery_time'] ?> min</p>
            <p class="text-sm text-gray-600 mt-2">Target: 25 minutes</p>
            <div class="mt-4">
                <div class="flex items-center justify-between text-sm">
                    <span>Performance</span>
                    <span class="font-medium"><?= round(($kpis['avg_delivery_time'] / 25) * 100) ?>%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                    <div class="bg-blue-600 h-2 rounded-full" style="width: <?= min(100, ($kpis['avg_delivery_time'] / 25) * 100) ?>%"></div>
                </div>
            </div>
        </div>

        <!-- Orders In Progress -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-900">Orders In Progress</h3>
                <i class="fas fa-truck text-gray-400"></i>
            </div>
            <p class="text-3xl font-bold text-gray-900" id="active-orders-count"><?= $kpis['orders_in_progress'] ?></p>
            <p class="text-sm text-gray-600 mt-2">Currently being delivered</p>
            <div class="mt-4 space-y-2">
                <div class="flex items-center justify-between text-sm">
                    <span>Completed</span>
                    <span class="font-medium text-green-600"><?= $kpis['orders_completed'] ?></span>
                </div>
                <div class="flex items-center justify-between text-sm">
                    <span>Canceled</span>
                    <span class="font-medium text-red-600"><?= $kpis['orders_canceled'] ?></span>
                </div>
            </div>
        </div>

        <!-- Weekly Stats -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-900">This Week</h3>
                <i class="fas fa-calendar text-gray-400"></i>
            </div>
            <div class="space-y-3">
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-600">Orders</span>
                    <span class="font-medium"><?= number_format($kpis['orders_week']) ?></span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-600">Revenue</span>
                    <span class="font-medium">$<?= number_format($kpis['orders_week'] * 25) ?></span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-600">New Users</span>
                    <span class="font-medium text-green-600">+<?= rand(50, 150) ?></span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-600">New Riders</span>
                    <span class="font-medium text-blue-600">+<?= rand(10, 30) ?></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Orders & Activities -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Orders -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-900">Recent Orders</h3>
                <a href="<?= base_url('orders') ?>" class="text-blue-600 hover:text-blue-700 text-sm font-medium">View All</a>
            </div>
            <div class="space-y-4">
                <?php if (!empty($recentOrders)): ?>
                    <?php foreach (array_slice($recentOrders, 0, 5) as $order): ?>
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-shopping-bag text-blue-600"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">#<?= $order['order_id'] ?></p>
                                    <p class="text-sm text-gray-600"><?= $order['pickup_location'] ?></p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-medium text-gray-900">$<?= number_format($order['amount'], 2) ?></p>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium
                                    <?= $order['status'] === 'delivered' ? 'bg-green-100 text-green-800' : 
                                        ($order['status'] === 'in_progress' ? 'bg-blue-100 text-blue-800' : 
                                        'bg-yellow-100 text-yellow-800') ?>">
                                    <?= ucfirst(str_replace('_', ' ', $order['status'])) ?>
                                </span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="text-center py-8">
                        <i class="fas fa-inbox text-gray-400 text-3xl mb-3"></i>
                        <p class="text-gray-600">No recent orders</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-900">Recent Activities</h3>
                <button class="text-blue-600 hover:text-blue-700 text-sm font-medium">View All</button>
            </div>
            <div class="space-y-4" id="recent-activities">
                <div class="flex items-center space-x-3 py-2">
                    <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                    <span class="text-sm text-gray-600">New order #12345 placed</span>
                    <span class="text-xs text-gray-400">2 min ago</span>
                </div>
                <div class="flex items-center space-x-3 py-2">
                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                    <span class="text-sm text-gray-600">Order #12344 delivered</span>
                    <span class="text-xs text-gray-400">5 min ago</span>
                </div>
                <div class="flex items-center space-x-3 py-2">
                    <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
                    <span class="text-sm text-gray-600">New rider registered</span>
                    <span class="text-xs text-gray-400">10 min ago</span>
                </div>
                <div class="flex items-center space-x-3 py-2">
                    <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                    <span class="text-sm text-gray-600">Payment processed for order #12343</span>
                    <span class="text-xs text-gray-400">15 min ago</span>
                </div>
                <div class="flex items-center space-x-3 py-2">
                    <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                    <span class="text-sm text-gray-600">Order #12342 canceled</span>
                    <span class="text-xs text-gray-400">20 min ago</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Riders -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-lg font-semibold text-gray-900">Top Performing Riders</h3>
            <a href="<?= base_url('riders') ?>" class="text-blue-600 hover:text-blue-700 text-sm font-medium">View All Riders</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-200">
                        <th class="text-left py-3 px-4 font-medium text-gray-600">Rider</th>
                        <th class="text-left py-3 px-4 font-medium text-gray-600">Vehicle</th>
                        <th class="text-left py-3 px-4 font-medium text-gray-600">Orders</th>
                        <th class="text-left py-3 px-4 font-medium text-gray-600">Earnings</th>
                        <th class="text-left py-3 px-4 font-medium text-gray-600">Rating</th>
                        <th class="text-left py-3 px-4 font-medium text-gray-600">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($topRiders)): ?>
                        <?php foreach ($topRiders as $rider): ?>
                            <tr class="border-b border-gray-100 hover:bg-gray-50">
                                <td class="py-3 px-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                            <span class="text-blue-600 font-medium text-sm"><?= substr($rider['name'], 0, 1) ?></span>
                                        </div>
                                        <div>
                                            <p class="font-medium text-gray-900"><?= $rider['name'] ?></p>
                                            <p class="text-sm text-gray-600"><?= $rider['email'] ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-4">
                                    <span class="text-sm text-gray-600"><?= $rider['vehicle_type'] ?></span>
                                </td>
                                <td class="py-3 px-4">
                                    <span class="font-medium text-gray-900"><?= $rider['total_orders'] ?? 0 ?></span>
                                </td>
                                <td class="py-3 px-4">
                                    <span class="font-medium text-gray-900">$<?= number_format($rider['total_earnings'] ?? 0, 2) ?></span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex items-center">
                                        <span class="text-yellow-500 mr-1">★</span>
                                        <span class="text-sm text-gray-600"><?= number_format($rider['rating'] ?? 0, 1) ?></span>
                                    </div>
                                </td>
                                <td class="py-3 px-4">
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium
                                        <?= $rider['is_online'] ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' ?>">
                                        <?= $rider['is_online'] ? 'Online' : 'Offline' ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-center py-8 text-gray-600">No riders data available</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div> 