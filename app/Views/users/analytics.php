<!-- User Analytics Dashboard -->
<div class="space-y-8">
    <!-- Page Header with Gradient -->
    <div class="relative overflow-hidden bg-gradient-to-r from-purple-600 via-pink-600 to-blue-600 rounded-2xl p-8 text-white">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-2">User Analytics Dashboard</h2>
                    <p class="text-purple-100 text-lg">Comprehensive user behavior and engagement insights</p>
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
        <!-- Total Users -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-users text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">+5%</span>
                    </div>
                </div>
                <p class="text-blue-100 text-sm font-medium mb-1">Total Users</p>
                <p class="text-3xl font-bold mb-2"><?= number_format($stats['total_users']) ?></p>
                <p class="text-xs text-blue-200">
                    <i class="fas fa-arrow-up mr-1"></i>+5% this month
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-blue-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Active Users -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-green-500 to-green-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-green-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-user-check text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Live</span>
                    </div>
                </div>
                <p class="text-green-100 text-sm font-medium mb-1">Active Users</p>
                <p class="text-3xl font-bold mb-2"><?= number_format($stats['active_users']) ?></p>
                <p class="text-xs text-green-200">
                    <i class="fas fa-circle mr-1 animate-pulse"></i>Last 30 days
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-green-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- New Users This Month -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-400 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-user-plus text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">New</span>
                    </div>
                </div>
                <p class="text-purple-100 text-sm font-medium mb-1">New Users</p>
                <p class="text-3xl font-bold mb-2"><?= number_format($stats['new_users_month']) ?></p>
                <p class="text-xs text-purple-200">
                    <i class="fas fa-calendar mr-1"></i>This month
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-purple-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Retention Rate -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-orange-400 to-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-chart-pie text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Rate</span>
                    </div>
                </div>
                <p class="text-orange-100 text-sm font-medium mb-1">Retention Rate</p>
                <p class="text-3xl font-bold mb-2"><?= number_format($stats['retention_rate'], 1) ?>%</p>
                <p class="text-xs text-orange-200">
                    <i class="fas fa-chart-line mr-1"></i>Monthly
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-orange-700 to-transparent rounded-full opacity-20"></div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- User Registration Trend -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">User Registration Trend</h3>
                    <p class="text-gray-600">Monthly user registrations over the past year</p>
                </div>
                <div class="flex items-center space-x-2">
                    <select class="text-sm border border-gray-200 rounded-xl px-4 py-2 bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option>Last 12 months</option>
                        <option>Last 6 months</option>
                        <option>Last 3 months</option>
                    </select>
                </div>
            </div>
            <div class="h-80">
                <canvas id="user-registration-chart"></canvas>
            </div>
        </div>

        <!-- User Activity Distribution -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">User Activity Distribution</h3>
                    <p class="text-gray-600">Breakdown of user engagement levels</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">Total: <?= number_format($stats['total_users']) ?></span>
                </div>
            </div>
            <div class="h-80">
                <canvas id="user-activity-chart"></canvas>
            </div>
        </div>
    </div>

    <!-- Additional Analytics -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- User Demographics -->
        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 border border-blue-200 hover:shadow-lg transition-all duration-300">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-gray-900">User Demographics</h3>
                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-users text-white text-lg"></i>
                </div>
            </div>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">New Users</span>
                    <span class="font-bold text-gray-900"><?= number_format($stats['new_users_week']) ?></span>
                </div>
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Active Users</span>
                    <span class="font-bold text-green-600"><?= number_format($stats['active_users']) ?></span>
                </div>
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Inactive Users</span>
                    <span class="font-bold text-gray-900"><?= number_format($stats['total_users'] - $stats['active_users']) ?></span>
                </div>
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Avg Orders/User</span>
                    <span class="font-bold text-blue-600"><?= number_format($stats['avg_orders_per_user'], 1) ?></span>
                </div>
            </div>
        </div>

        <!-- User Engagement Metrics -->
        <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 border border-green-200 hover:shadow-lg transition-all duration-300">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-gray-900">Engagement Metrics</h3>
                <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-chart-line text-white text-lg"></i>
                </div>
            </div>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Retention Rate</span>
                    <span class="font-bold text-green-600"><?= number_format($stats['retention_rate'], 1) ?>%</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Churn Rate</span>
                    <span class="font-bold text-red-600"><?= number_format(100 - $stats['retention_rate'], 1) ?>%</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Growth Rate</span>
                    <span class="font-bold text-blue-600">+5.2%</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">LTV</span>
                    <span class="font-bold text-purple-600">$<?= number_format(rand(50, 200)) ?></span>
                </div>
            </div>
        </div>

        <!-- User Behavior Insights -->
        <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 border border-purple-200 hover:shadow-lg transition-all duration-300">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-gray-900">Behavior Insights</h3>
                <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-lightbulb text-white text-lg"></i>
                </div>
            </div>
            <div class="space-y-4">
                <div class="p-3 bg-white bg-opacity-50 rounded-xl">
                    <p class="text-sm font-medium text-gray-700 mb-1">Peak Registration Time</p>
                    <p class="text-sm text-gray-900">Weekdays 2-4 PM</p>
                </div>
                <div class="p-3 bg-white bg-opacity-50 rounded-xl">
                    <p class="text-sm font-medium text-gray-700 mb-1">Most Active Day</p>
                    <p class="text-sm text-gray-900">Wednesday</p>
                </div>
                <div class="p-3 bg-white bg-opacity-50 rounded-xl">
                    <p class="text-sm font-medium text-gray-700 mb-1">Preferred Payment</p>
                    <p class="text-sm text-gray-900">Mobile Wallet</p>
                </div>
                <div class="p-3 bg-white bg-opacity-50 rounded-xl">
                    <p class="text-sm font-medium text-gray-700 mb-1">Avg Session Time</p>
                    <p class="text-sm text-gray-900"><?= rand(8, 15) ?> minutes</p>
                </div>
            </div>
        </div>
    </div>

    <!-- User Segments Table -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center justify-between p-8 border-b border-gray-200">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">User Segments</h3>
                <p class="text-gray-600">Detailed breakdown of user categories and performance</p>
            </div>
            <div class="flex items-center space-x-3">
                <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">
                    <?= count($stats) ?> segments
                </span>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                    <tr>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Segment</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Users</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Percentage</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Avg Orders</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Avg Spent</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Retention</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 transition-all duration-300">
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-star text-white text-xs"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">Power Users</p>
                                    <p class="text-sm text-gray-600">High engagement</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-gray-900"><?= number_format($stats['total_users'] * 0.15) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-gray-900">15%</span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-gray-900"><?= rand(10, 25) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-green-600">$<?= number_format(rand(200, 500)) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-green-600"><?= rand(85, 95) ?>%</span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-green-100 to-green-200 text-green-800">
                                Excellent
                            </span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 transition-all duration-300">
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-user text-white text-xs"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">Regular Users</p>
                                    <p class="text-sm text-gray-600">Medium engagement</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-gray-900"><?= number_format($stats['total_users'] * 0.45) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-gray-900">45%</span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-gray-900"><?= rand(3, 8) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-blue-600">$<?= number_format(rand(50, 150)) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-blue-600"><?= rand(60, 80) ?>%</span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800">
                                Good
                            </span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 transition-all duration-300">
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-gradient-to-br from-orange-500 to-orange-600 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-user-clock text-white text-xs"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">Occasional Users</p>
                                    <p class="text-sm text-gray-600">Low engagement</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-gray-900"><?= number_format($stats['total_users'] * 0.25) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-gray-900">25%</span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-gray-900"><?= rand(1, 3) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-orange-600">$<?= number_format(rand(20, 60)) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-orange-600"><?= rand(30, 50) ?>%</span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-orange-100 to-orange-200 text-orange-800">
                                Fair
                            </span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 transition-all duration-300">
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-gradient-to-br from-red-500 to-red-600 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-user-times text-white text-xs"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">Inactive Users</p>
                                    <p class="text-sm text-gray-600">No recent activity</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-gray-900"><?= number_format($stats['total_users'] * 0.15) ?></span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-gray-900">15%</span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-gray-900">0</span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-red-600">$0</span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="font-bold text-red-600">0%</span>
                        </td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-red-100 to-red-200 text-red-800">
                                Poor
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
// User Registration Trend Chart
const userRegistrationCtx = document.getElementById('user-registration-chart').getContext('2d');
const userRegistrationChart = new Chart(userRegistrationCtx, {
    type: 'line',
    data: {
        labels: <?= json_encode($chartData['labels'] ?? []) ?>,
        datasets: [{
            label: 'New Users',
            data: <?= json_encode($chartData['values'] ?? []) ?>,
            borderColor: 'rgb(99, 102, 241)',
            backgroundColor: 'rgba(99, 102, 241, 0.1)',
            borderWidth: 3,
            fill: true,
            tension: 0.4,
            pointBackgroundColor: 'rgb(99, 102, 241)',
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

// User Activity Distribution Chart
const userActivityCtx = document.getElementById('user-activity-chart').getContext('2d');
const userActivityChart = new Chart(userActivityCtx, {
    type: 'doughnut',
    data: {
        labels: ['Power Users', 'Regular Users', 'Occasional Users', 'Inactive Users'],
        datasets: [{
            data: [
                <?= $stats['total_users'] * 0.15 ?>,
                <?= $stats['total_users'] * 0.45 ?>,
                <?= $stats['total_users'] * 0.25 ?>,
                <?= $stats['total_users'] * 0.15 ?>
            ],
            backgroundColor: [
                'rgba(34, 197, 94, 0.8)',
                'rgba(59, 130, 246, 0.8)',
                'rgba(249, 115, 22, 0.8)',
                'rgba(239, 68, 68, 0.8)'
            ],
            borderColor: [
                'rgb(34, 197, 94)',
                'rgb(59, 130, 246)',
                'rgb(249, 115, 22)',
                'rgb(239, 68, 68)'
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