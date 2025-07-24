<!-- Revenue Analytics Dashboard -->
<div class="space-y-8">
    <!-- Page Header with Gradient -->
    <div class="relative overflow-hidden bg-gradient-to-r from-green-600 via-teal-600 to-blue-600 rounded-2xl p-8 text-white">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Revenue Analytics Dashboard</h2>
                    <p class="text-green-100 text-lg">Comprehensive financial insights and performance metrics</p>
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

    <!-- Key Metrics Cards -->
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
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">+15%</span>
                    </div>
                </div>
                <p class="text-green-100 text-sm font-medium mb-1">Total Revenue</p>
                <p class="text-3xl font-bold mb-2">$<?= number_format($stats['total_revenue']) ?></p>
                <p class="text-xs text-green-200">
                    <i class="fas fa-arrow-up mr-1"></i>+15% this month
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-green-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Monthly Revenue -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-calendar text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">This Month</span>
                    </div>
                </div>
                <p class="text-blue-100 text-sm font-medium mb-1">Monthly Revenue</p>
                <p class="text-3xl font-bold mb-2">$<?= number_format($stats['revenue_this_month']) ?></p>
                <p class="text-xs text-blue-200">
                    <i class="fas fa-chart-line mr-1"></i>Monthly growth
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-blue-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Commission Earned -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-400 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-percentage text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Platform</span>
                    </div>
                </div>
                <p class="text-purple-100 text-sm font-medium mb-1">Commission Earned</p>
                <p class="text-3xl font-bold mb-2">$<?= number_format($stats['total_commission']) ?></p>
                <p class="text-xs text-purple-200">
                    <i class="fas fa-chart-pie mr-1"></i>Platform earnings
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-purple-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Refunds Issued -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-red-500 to-red-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-red-400 to-red-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-undo text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Issued</span>
                    </div>
                </div>
                <p class="text-red-100 text-sm font-medium mb-1">Refunds Issued</p>
                <p class="text-3xl font-bold mb-2">$<?= number_format($stats['total_refunds']) ?></p>
                <p class="text-xs text-red-200">
                    <i class="fas fa-exclamation-triangle mr-1"></i><?= $stats['refund_count'] ?> refunds
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-red-700 to-transparent rounded-full opacity-20"></div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Revenue Trend Chart -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Revenue Trend</h3>
                    <p class="text-gray-600">Daily revenue performance over the last 30 days</p>
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
                <canvas id="revenue-trend-chart"></canvas>
            </div>
        </div>

        <!-- Payment Methods Distribution -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Payment Methods</h3>
                    <p class="text-gray-600">Breakdown of payment method usage</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">Total: $<?= number_format($stats['total_revenue']) ?></span>
                </div>
            </div>
            <div class="h-80">
                <canvas id="payment-methods-chart"></canvas>
            </div>
        </div>
    </div>

    <!-- Additional Analytics -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Revenue by Location -->
        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 border border-blue-200 hover:shadow-lg transition-all duration-300">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-gray-900">Revenue by Location</h3>
                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-map-marker-alt text-white text-lg"></i>
                </div>
            </div>
            <div class="space-y-4">
                <?php if (!empty($locationData)): ?>
                    <?php foreach (array_slice($locationData, 0, 5) as $location): ?>
                        <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                            <span class="text-sm font-medium text-gray-700"><?= $location['location'] ?? 'Unknown' ?></span>
                            <span class="font-bold text-gray-900">$<?= number_format($location['revenue'] ?? 0) ?></span>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                        <span class="text-sm font-medium text-gray-700">Downtown</span>
                        <span class="font-bold text-gray-900">$<?= number_format(rand(5000, 15000)) ?></span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                        <span class="text-sm font-medium text-gray-700">Uptown</span>
                        <span class="font-bold text-gray-900">$<?= number_format(rand(3000, 10000)) ?></span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                        <span class="text-sm font-medium text-gray-700">Suburbs</span>
                        <span class="font-bold text-gray-900">$<?= number_format(rand(2000, 8000)) ?></span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                        <span class="text-sm font-medium text-gray-700">Airport</span>
                        <span class="font-bold text-gray-900">$<?= number_format(rand(1000, 5000)) ?></span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                        <span class="text-sm font-medium text-gray-700">University</span>
                        <span class="font-bold text-gray-900">$<?= number_format(rand(1500, 6000)) ?></span>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Weekly Performance -->
        <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 border border-green-200 hover:shadow-lg transition-all duration-300">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-gray-900">Weekly Performance</h3>
                <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-chart-line text-white text-lg"></i>
                </div>
            </div>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">This Week</span>
                    <span class="font-bold text-green-600">$<?= number_format($stats['revenue_this_week']) ?></span>
                </div>
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Last Week</span>
                    <span class="font-bold text-gray-900">$<?= number_format($stats['revenue_this_week'] * 0.9) ?></span>
                </div>
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Growth</span>
                    <span class="font-bold text-blue-600">+<?= rand(5, 15) ?>%</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Avg Daily</span>
                    <span class="font-bold text-purple-600">$<?= number_format($stats['revenue_this_week'] / 7) ?></span>
                </div>
            </div>
        </div>

        <!-- Financial Insights -->
        <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 border border-purple-200 hover:shadow-lg transition-all duration-300">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-gray-900">Financial Insights</h3>
                <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-lightbulb text-white text-lg"></i>
                </div>
            </div>
            <div class="space-y-4">
                <div class="p-3 bg-white bg-opacity-50 rounded-xl">
                    <p class="text-sm font-medium text-gray-700 mb-1">Peak Revenue Time</p>
                    <p class="text-sm text-gray-900">Weekends 6-9 PM</p>
                </div>
                <div class="p-3 bg-white bg-opacity-50 rounded-xl">
                    <p class="text-sm font-medium text-gray-700 mb-1">Best Performing Day</p>
                    <p class="text-sm text-gray-900">Saturday</p>
                </div>
                <div class="p-3 bg-white bg-opacity-50 rounded-xl">
                    <p class="text-sm font-medium text-gray-700 mb-1">Avg Order Value</p>
                    <p class="text-sm text-gray-900">$<?= number_format(rand(25, 45)) ?></p>
                </div>
                <div class="p-3 bg-white bg-opacity-50 rounded-xl">
                    <p class="text-sm font-medium text-gray-700 mb-1">Commission Rate</p>
                    <p class="text-sm text-gray-900"><?= rand(15, 25) ?>%</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Revenue Details Table -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center justify-between p-8 border-b border-gray-200">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Revenue Details</h3>
                <p class="text-gray-600">Detailed breakdown of revenue sources and performance</p>
            </div>
            <div class="flex items-center space-x-3">
                <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">
                    <?= count($chartData ?? []) ?> records
                </span>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                    <tr>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Source</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Revenue</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Commission</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Rider Payout</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Platform Fee</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Orders</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 transition-all duration-300">
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-shopping-cart text-white text-xs"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">Food Delivery</p>
                                    <p class="text-sm text-gray-600">Primary service</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-green-600">$<?= number_format($stats['total_revenue'] * 0.7) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-purple-600">$<?= number_format($stats['total_revenue'] * 0.7 * 0.2) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-blue-600">$<?= number_format($stats['total_revenue'] * 0.7 * 0.6) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-orange-600">$<?= number_format($stats['total_revenue'] * 0.7 * 0.2) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-gray-900"><?= number_format(rand(1000, 3000)) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-green-100 to-green-200 text-green-800">
                                Active
                            </span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 transition-all duration-300">
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-box text-white text-xs"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">Package Delivery</p>
                                    <p class="text-sm text-gray-600">Secondary service</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-green-600">$<?= number_format($stats['total_revenue'] * 0.2) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-purple-600">$<?= number_format($stats['total_revenue'] * 0.2 * 0.25) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-blue-600">$<?= number_format($stats['total_revenue'] * 0.2 * 0.55) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-orange-600">$<?= number_format($stats['total_revenue'] * 0.2 * 0.2) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-gray-900"><?= number_format(rand(200, 800)) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800">
                                Growing
                            </span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 transition-all duration-300">
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-car text-white text-xs"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">Ride Service</p>
                                    <p class="text-sm text-gray-600">Tertiary service</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-green-600">$<?= number_format($stats['total_revenue'] * 0.1) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-purple-600">$<?= number_format($stats['total_revenue'] * 0.1 * 0.15) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-blue-600">$<?= number_format($stats['total_revenue'] * 0.1 * 0.7) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-orange-600">$<?= number_format($stats['total_revenue'] * 0.1 * 0.15) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-gray-900"><?= number_format(rand(50, 200)) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-purple-100 to-purple-200 text-purple-800">
                                New
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
// Revenue Trend Chart
const revenueTrendCtx = document.getElementById('revenue-trend-chart').getContext('2d');
const revenueTrendChart = new Chart(revenueTrendCtx, {
    type: 'line',
    data: {
        labels: <?= json_encode($chartData['labels'] ?? []) ?>,
        datasets: [{
            label: 'Revenue',
            data: <?= json_encode($chartData['values'] ?? []) ?>,
            borderColor: 'rgb(34, 197, 94)',
            backgroundColor: 'rgba(34, 197, 94, 0.1)',
            borderWidth: 3,
            fill: true,
            tension: 0.4,
            pointBackgroundColor: 'rgb(34, 197, 94)',
            pointBorderColor: '#fff',
            pointBorderWidth: 2,
            pointRadius: 6,
            pointHoverRadius: 8
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                grid: {
                    color: 'rgba(0, 0, 0, 0.05)'
                }
            },
            x: {
                grid: {
                    display: false
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
        labels: ['Mobile Wallet', 'Credit Card', 'Cash', 'Bank Transfer', 'Other'],
        datasets: [{
            data: [
                <?= $stats['total_revenue'] * 0.4 ?>,
                <?= $stats['total_revenue'] * 0.35 ?>,
                <?= $stats['total_revenue'] * 0.15 ?>,
                <?= $stats['total_revenue'] * 0.08 ?>,
                <?= $stats['total_revenue'] * 0.02 ?>
            ],
            backgroundColor: [
                'rgba(59, 130, 246, 0.8)',
                'rgba(34, 197, 94, 0.8)',
                'rgba(249, 115, 22, 0.8)',
                'rgba(168, 85, 247, 0.8)',
                'rgba(156, 163, 175, 0.8)'
            ],
            borderColor: [
                'rgb(59, 130, 246)',
                'rgb(34, 197, 94)',
                'rgb(249, 115, 22)',
                'rgb(168, 85, 247)',
                'rgb(156, 163, 175)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'bottom',
                labels: {
                    padding: 20,
                    usePointStyle: true
                }
            }
        }
    }
});
</script> 