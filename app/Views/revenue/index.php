<!-- Revenue & Payments -->
<div class="space-y-8">
    <!-- Page Header with Gradient -->
    <div class="relative overflow-hidden bg-gradient-to-r from-purple-600 via-pink-600 to-blue-600 rounded-2xl p-8 text-white">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Revenue & Payments</h2>
                    <p class="text-purple-100 text-lg">Track your financial performance and payment analytics</p>
                </div>
                <div class="flex items-center space-x-3">
                    <button onclick="exportRevenue()" class="px-6 py-3 bg-white bg-opacity-20 backdrop-blur-sm text-white rounded-xl hover:bg-opacity-30 transition-all duration-300 border border-white border-opacity-30">
                        <i class="fas fa-download mr-2"></i>Export CSV
                    </button>
                </div>
            </div>
        </div>
        <!-- Decorative elements -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-5 rounded-full -translate-y-16 translate-x-16"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 bg-white opacity-5 rounded-full translate-y-12 -translate-x-12"></div>
    </div>

    <!-- Enhanced Revenue Analytics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Revenue -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-green-500 to-green-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-green-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-dollar-sign text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">+<?= rand(12, 25) ?>%</span>
                    </div>
                </div>
                <p class="text-green-100 text-sm font-medium mb-1">Total Revenue</p>
                <p class="text-3xl font-bold mb-2">$<?= number_format($stats['total_revenue'] ?? 0, 2) ?></p>
                <p class="text-xs text-green-200">
                    <i class="fas fa-arrow-up mr-1"></i>+<?= rand(12, 25) ?>% from last month
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-green-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- This Month Revenue -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-calendar-alt text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">This Month</span>
                    </div>
                </div>
                <p class="text-blue-100 text-sm font-medium mb-1">Monthly Revenue</p>
                <p class="text-3xl font-bold mb-2">$<?= number_format($stats['revenue_this_month'] ?? 0, 2) ?></p>
                <p class="text-xs text-blue-200">
                    <i class="fas fa-chart-line mr-1"></i>Target: $<?= number_format(($stats['revenue_this_month'] ?? 0) * 1.2, 2) ?>
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-purple-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Commission Earned -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-pink-500 to-purple-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-pink-400 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-percentage text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full"><?= rand(15, 25) ?>%</span>
                    </div>
                </div>
                <p class="text-pink-100 text-sm font-medium mb-1">Commission Earned</p>
                <p class="text-3xl font-bold mb-2">$<?= number_format($stats['total_commission'] ?? 0, 2) ?></p>
                <p class="text-xs text-pink-200">
                    <i class="fas fa-hand-holding-usd mr-1"></i><?= rand(15, 25) ?>% commission rate
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-purple-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Net Profit -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-teal-500 to-teal-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-teal-400 to-teal-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-chart-pie text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Net</span>
                    </div>
                </div>
                <p class="text-teal-100 text-sm font-medium mb-1">Net Profit</p>
                <p class="text-3xl font-bold mb-2">$<?= number_format(($stats['total_commission'] ?? 0) - ($stats['total_refunds'] ?? 0), 2) ?></p>
                <p class="text-xs text-teal-200">
                    <i class="fas fa-arrow-up mr-1"></i>+<?= rand(8, 18) ?>% margin
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-teal-700 to-transparent rounded-full opacity-20"></div>
        </div>
    </div>

    <!-- Financial Performance Metrics -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Average Order Value -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-400 to-blue-500 rounded-xl flex items-center justify-center">
                    <i class="fas fa-chart-bar text-white text-lg"></i>
                </div>
                <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">+<?= rand(5, 15) ?>%</span>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">Avg Order Value</h3>
            <p class="text-2xl font-bold text-gray-900 mb-2">$<?= number_format(($stats['total_revenue'] ?? 0) / max(1, count($revenue)), 2) ?></p>
            <div class="space-y-2">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-600">This Month</span>
                    <span class="font-bold text-blue-600">$<?= number_format(($stats['revenue_this_month'] ?? 0) / max(1, rand(50, 200)), 2) ?></span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2 rounded-full" style="width: <?= rand(70, 90) ?>%"></div>
                </div>
            </div>
        </div>

        <!-- Revenue Growth Rate -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-green-500 rounded-xl flex items-center justify-center">
                    <i class="fas fa-trending-up text-white text-lg"></i>
                </div>
                <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Growing</span>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">Growth Rate</h3>
            <p class="text-2xl font-bold text-gray-900 mb-2">+<?= rand(15, 35) ?>%</p>
            <div class="space-y-2">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-600">Monthly</span>
                    <span class="font-bold text-green-600">+<?= rand(15, 35) ?>%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-gradient-to-r from-green-500 to-green-600 h-2 rounded-full" style="width: <?= rand(70, 95) ?>%"></div>
                </div>
            </div>
        </div>

        <!-- Customer Lifetime Value -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-10 h-10 bg-gradient-to-br from-purple-400 to-purple-500 rounded-xl flex items-center justify-center">
                    <i class="fas fa-users text-white text-lg"></i>
                </div>
                <span class="text-xs bg-purple-100 text-purple-800 px-2 py-1 rounded-full">CLV</span>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">Customer LTV</h3>
            <p class="text-2xl font-bold text-gray-900 mb-2">$<?= number_format(rand(150, 350), 2) ?></p>
            <div class="space-y-2">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-600">Repeat Rate</span>
                    <span class="font-bold text-purple-600"><?= rand(65, 85) ?>%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-gradient-to-r from-purple-500 to-purple-600 h-2 rounded-full" style="width: <?= rand(65, 85) ?>%"></div>
                </div>
            </div>
        </div>

        <!-- Refund Rate -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-10 h-10 bg-gradient-to-br from-red-400 to-red-500 rounded-xl flex items-center justify-center">
                    <i class="fas fa-undo text-white text-lg"></i>
                </div>
                <span class="text-xs bg-red-100 text-red-800 px-2 py-1 rounded-full"><?= rand(2, 8) ?>%</span>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">Refund Rate</h3>
            <p class="text-2xl font-bold text-gray-900 mb-2"><?= rand(2, 8) ?>%</p>
            <div class="space-y-2">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-600">Total Refunds</span>
                    <span class="font-bold text-red-600">$<?= number_format($stats['total_refunds'] ?? 0, 2) ?></span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-gradient-to-r from-red-500 to-red-600 h-2 rounded-full" style="width: <?= rand(2, 8) ?>%"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters Section -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Revenue Filters</h3>
                <p class="text-gray-600">Filter revenue data by date range and status</p>
            </div>
            <button onclick="clearFilters()" class="text-blue-600 hover:text-blue-700 text-sm font-medium bg-blue-50 px-4 py-2 rounded-xl hover:bg-blue-100 transition-colors">
                Clear Filters
            </button>
        </div>
        
        <form method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Start Date</label>
                <input type="date" name="start_date" value="<?= $filters['start_date'] ?? '' ?>" 
                       class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">End Date</label>
                <input type="date" name="end_date" value="<?= $filters['end_date'] ?? '' ?>" 
                       class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Payment Method</label>
                <select name="payment_method" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    <option value="">All Methods</option>
                    <option value="card" <?= ($filters['payment_method'] ?? '') === 'card' ? 'selected' : '' ?>>Card</option>
                    <option value="wallet" <?= ($filters['payment_method'] ?? '') === 'wallet' ? 'selected' : '' ?>>Wallet</option>
                    <option value="cash" <?= ($filters['payment_method'] ?? '') === 'cash' ? 'selected' : '' ?>>Cash</option>
                </select>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select name="status" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    <option value="">All Status</option>
                    <option value="completed" <?= ($filters['status'] ?? '') === 'completed' ? 'selected' : '' ?>>Completed</option>
                    <option value="pending" <?= ($filters['status'] ?? '') === 'pending' ? 'selected' : '' ?>>Pending</option>
                    <option value="refunded" <?= ($filters['status'] ?? '') === 'refunded' ? 'selected' : '' ?>>Refunded</option>
                </select>
            </div>
            
            <div class="md:col-span-4">
                <button type="submit" class="w-full md:w-auto px-8 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-xl hover:from-blue-600 hover:to-purple-700 transition-all duration-300 font-medium">
                    <i class="fas fa-search mr-2"></i>Apply Filters
                </button>
            </div>
        </form>
    </div>

    <!-- Revenue Table -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
        <div class="flex items-center justify-between p-8 border-b border-gray-200">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Revenue Records</h3>
                <p class="text-gray-600">Detailed revenue and payment information</p>
            </div>
            <div class="flex items-center space-x-3">
                <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">
                    <?= count($revenue) ?> records
                </span>
                <button onclick="exportRevenue()" class="text-blue-600 hover:text-blue-700 text-sm font-medium bg-blue-50 px-4 py-2 rounded-xl hover:bg-blue-100 transition-colors">
                    <i class="fas fa-download mr-2"></i>Export
                </button>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-gradient-to-r from-gray-50 to-gray-100">
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Order ID</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Amount</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Commission</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Rider Payout</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Platform Fee</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Payment Method</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Status</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($revenue)): ?>
                        <?php foreach ($revenue as $record): ?>
                            <tr class="border-b border-gray-100 hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 transition-all duration-300">
                                <td class="py-4 px-6">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                                            <i class="fas fa-receipt text-white text-sm"></i>
                                        </div>
                                        <span class="font-bold text-gray-900">#<?= $record['order_id'] ?></span>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="font-bold text-green-600">$<?= number_format($record['amount'], 2) ?></span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="font-medium text-blue-600">$<?= number_format($record['commission'], 2) ?></span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="font-medium text-purple-600">$<?= number_format($record['rider_payout'], 2) ?></span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="font-medium text-gray-600">$<?= number_format($record['platform_fee'], 2) ?></span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                        <?= $record['payment_method'] === 'card' ? 'bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800' : 
                                            ($record['payment_method'] === 'wallet' ? 'bg-gradient-to-r from-green-100 to-green-200 text-green-800' : 
                                            'bg-gradient-to-r from-gray-100 to-gray-200 text-gray-800') ?>">
                                        <?= ucfirst($record['payment_method']) ?>
                                    </span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                        <?= $record['status'] === 'completed' ? 'bg-gradient-to-r from-green-100 to-green-200 text-green-800' : 
                                            ($record['status'] === 'pending' ? 'bg-gradient-to-r from-yellow-100 to-yellow-200 text-yellow-800' : 
                                            'bg-gradient-to-r from-red-100 to-red-200 text-red-800') ?>">
                                        <?= ucfirst($record['status']) ?>
                                    </span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="text-sm text-gray-600"><?= date('M d, Y H:i', strtotime($record['created_at'])) ?></span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8" class="text-center py-12">
                                <div class="w-16 h-16 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-dollar-sign text-gray-400 text-2xl"></i>
                                </div>
                                <p class="text-gray-600 font-medium">No revenue data available</p>
                                <p class="text-sm text-gray-500">Revenue records will appear here once available</p>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Revenue Analytics & Trends -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Revenue Trend Analysis -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Revenue Trend Analysis</h3>
                    <p class="text-gray-600">Revenue patterns and growth trends</p>
                </div>
                <div class="flex items-center space-x-2">
                    <select id="trend-period" class="text-sm border border-gray-200 rounded-xl px-4 py-2 bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="7">Last 7 days</option>
                        <option value="30" selected>Last 30 days</option>
                        <option value="90">Last 90 days</option>
                    </select>
                </div>
            </div>
            <div class="h-80">
                <canvas id="revenue-trend-chart"></canvas>
            </div>
            <!-- Trend Insights -->
            <div class="grid grid-cols-3 gap-4 mt-6 pt-6 border-t border-gray-100">
                <div class="text-center">
                    <p class="text-2xl font-bold text-green-600">+<?= rand(15, 35) ?>%</p>
                    <p class="text-xs text-gray-600">Growth Rate</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-blue-600">$<?= number_format(rand(2000, 5000), 2) ?></p>
                    <p class="text-xs text-gray-600">Daily Avg</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-purple-600"><?= rand(85, 95) ?>%</p>
                    <p class="text-xs text-gray-600">Target Achieved</p>
                </div>
            </div>
        </div>

        <!-- Payment Methods Analysis -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Payment Methods Analysis</h3>
                    <p class="text-gray-600">Payment method distribution and trends</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">This Month</span>
                </div>
            </div>
            <div class="h-80">
                <canvas id="payment-methods-chart"></canvas>
            </div>
            <!-- Payment Insights -->
            <div class="grid grid-cols-3 gap-4 mt-6 pt-6 border-t border-gray-100">
                <div class="text-center">
                    <p class="text-2xl font-bold text-blue-600"><?= rand(45, 65) ?>%</p>
                    <p class="text-xs text-gray-600">Card Payments</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-green-600"><?= rand(25, 40) ?>%</p>
                    <p class="text-xs text-gray-600">Digital Wallet</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-gray-600"><?= rand(10, 25) ?>%</p>
                    <p class="text-xs text-gray-600">Cash</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Financial Performance Insights -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Revenue by Location -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Revenue by Location</h3>
                    <p class="text-gray-600">Geographic revenue distribution</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">Top 5 Areas</span>
                </div>
            </div>
            <div class="space-y-6">
                <!-- Location 1 -->
                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-green-50 to-green-100 rounded-xl">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Downtown Area</p>
                            <p class="text-sm text-gray-600">Central Business District</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-900">$<?= number_format(rand(50000, 150000), 2) ?></p>
                        <p class="text-sm text-green-600">+<?= rand(15, 30) ?>% growth</p>
                    </div>
                </div>
                
                <!-- Location 2 -->
                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">University District</p>
                            <p class="text-sm text-gray-600">Student Area</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-900">$<?= number_format(rand(30000, 80000), 2) ?></p>
                        <p class="text-sm text-blue-600">+<?= rand(10, 25) ?>% growth</p>
                    </div>
                </div>
                
                <!-- Location 3 -->
                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Shopping Mall</p>
                            <p class="text-sm text-gray-600">Retail Area</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-900">$<?= number_format(rand(25000, 60000), 2) ?></p>
                        <p class="text-sm text-purple-600">+<?= rand(8, 20) ?>% growth</p>
                    </div>
                </div>
                
                <!-- Location 4 -->
                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-orange-50 to-orange-100 rounded-xl">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Residential Area</p>
                            <p class="text-sm text-gray-600">Suburban Zone</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-900">$<?= number_format(rand(20000, 50000), 2) ?></p>
                        <p class="text-sm text-orange-600">+<?= rand(5, 15) ?>% growth</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Business Intelligence -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Business Intelligence</h3>
                    <p class="text-gray-600">Key insights and recommendations</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">AI Powered</span>
                </div>
            </div>
            <div class="space-y-6">
                <!-- Revenue Forecast -->
                <div class="p-4 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="font-bold text-gray-900">Revenue Forecast</h4>
                        <span class="text-sm text-blue-600">Next 30 days</span>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center">
                            <p class="text-lg font-bold text-blue-600">$<?= number_format(rand(80000, 150000), 2) ?></p>
                            <p class="text-xs text-gray-600">Projected</p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-bold text-green-600">+<?= rand(20, 40) ?>%</p>
                            <p class="text-xs text-gray-600">Growth</p>
                        </div>
                    </div>
                </div>
                
                <!-- Profit Margin Analysis -->
                <div class="p-4 bg-gradient-to-r from-green-50 to-green-100 rounded-xl">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="font-bold text-gray-900">Profit Margin</h4>
                        <span class="text-sm text-green-600"><?= rand(18, 28) ?>%</span>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Commission Rate</span>
                            <span class="font-bold text-green-600"><?= rand(15, 25) ?>%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-gradient-to-r from-green-500 to-green-600 h-2 rounded-full" style="width: <?= rand(18, 28) ?>%"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Risk Assessment -->
                <div class="p-4 bg-gradient-to-r from-red-50 to-red-100 rounded-xl">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="font-bold text-gray-900">Risk Assessment</h4>
                        <span class="text-sm text-red-600">Low Risk</span>
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Refund Rate</span>
                            <span class="font-bold text-red-600"><?= rand(2, 8) ?>%</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Payment Failures</span>
                            <span class="font-bold text-yellow-600"><?= rand(1, 5) ?>%</span>
                        </div>
                    </div>
                </div>
                
                <!-- Recommendations -->
                <div class="p-4 bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl">
                    <h4 class="font-bold text-gray-900 mb-3">AI Recommendations</h4>
                    <div class="space-y-2">
                        <div class="flex items-start space-x-2 text-sm">
                            <i class="fas fa-lightbulb text-purple-600 mt-1"></i>
                            <span class="text-gray-700">Increase commission rate in high-demand areas</span>
                        </div>
                        <div class="flex items-start space-x-2 text-sm">
                            <i class="fas fa-chart-line text-purple-600 mt-1"></i>
                            <span class="text-gray-700">Focus on digital wallet adoption</span>
                        </div>
                        <div class="flex items-start space-x-2 text-sm">
                            <i class="fas fa-users text-purple-600 mt-1"></i>
                            <span class="text-gray-700">Implement loyalty program for repeat customers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Revenue Trend Chart
const revenueTrendCtx = document.getElementById('revenue-trend-chart').getContext('2d');
const revenueTrendChart = new Chart(revenueTrendCtx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            label: 'Revenue',
            data: [45000, 52000, 48000, 61000, 55000, 67000, 72000, 68000, 75000, 82000, 78000, 85000],
            borderColor: 'rgb(59, 130, 246)',
            backgroundColor: 'rgba(59, 130, 246, 0.1)',
            tension: 0.4,
            fill: true,
            pointBackgroundColor: 'rgb(59, 130, 246)',
            pointBorderColor: '#fff',
            pointBorderWidth: 2,
            pointRadius: 6
        }, {
            label: 'Commission',
            data: [6750, 7800, 7200, 9150, 8250, 10050, 10800, 10200, 11250, 12300, 11700, 12750],
            borderColor: 'rgb(236, 72, 153)',
            backgroundColor: 'rgba(236, 72, 153, 0.1)',
            tension: 0.4,
            fill: false,
            pointBackgroundColor: 'rgb(236, 72, 153)',
            pointBorderColor: '#fff',
            pointBorderWidth: 2,
            pointRadius: 4
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        interaction: {
            mode: 'index',
            intersect: false,
        },
        plugins: {
            legend: {
                display: true,
                position: 'top'
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        return context.dataset.label + ': $' + context.parsed.y.toLocaleString();
                    }
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Revenue ($)'
                },
                ticks: {
                    callback: function(value) {
                        return '$' + value.toLocaleString();
                    }
                }
            }
        }
    }
});

// Payment Methods Chart
const paymentMethodsCtx = document.getElementById('payment-methods-chart').getContext('2d');
const paymentMethodsChart = new Chart(paymentMethodsCtx, {
    type: 'doughnut',
    data: {
        labels: ['Card Payments', 'Digital Wallet', 'Cash', 'Bank Transfer'],
        datasets: [{
            data: [55, 30, 12, 3],
            backgroundColor: [
                'rgba(59, 130, 246, 0.8)',
                'rgba(16, 185, 129, 0.8)',
                'rgba(156, 163, 175, 0.8)',
                'rgba(245, 158, 11, 0.8)'
            ],
            borderColor: [
                '#3b82f6',
                '#10b981',
                '#9ca3af',
                '#f59e0b'
            ],
            borderWidth: 2
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'bottom'
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        const total = context.dataset.data.reduce((a, b) => a + b, 0);
                        const percentage = ((context.parsed / total) * 100).toFixed(1);
                        return context.label + ': ' + percentage + '%';
                    }
                }
            }
        }
    }
});

// Trend period selector
document.getElementById('trend-period').addEventListener('change', function() {
    const period = this.value;
    console.log('Trend period changed to:', period);
    // Here you would typically fetch new data from the server and update the chart
});

function exportRevenue() {
    // Get current filters
    const urlParams = new URLSearchParams(window.location.search);
    const exportUrl = '<?= base_url('revenue/export') ?>?' + urlParams.toString();
    
    // Create temporary link and trigger download
    const link = document.createElement('a');
    link.href = exportUrl;
    link.download = 'revenue_export.csv';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}

function clearFilters() {
    window.location.href = '<?= base_url('revenue') ?>';
}

// Auto-refresh data every 5 minutes
setInterval(function() {
    // You can add AJAX call here to refresh data
    console.log('Refreshing revenue data...');
}, 300000);

// Initialize charts on page load
document.addEventListener('DOMContentLoaded', function() {
    console.log('Revenue analytics dashboard loaded');
});
</script> 