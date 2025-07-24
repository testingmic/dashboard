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
                    <a href="<?= base_url('performance/analytics') ?>" class="px-6 py-3 bg-white bg-opacity-20 backdrop-blur-sm text-white rounded-xl hover:bg-opacity-30 transition-all duration-300 border border-white border-opacity-30">
                        <i class="fas fa-chart-line mr-2"></i>Analytics
                    </a>
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
        <div class="group relative overflow-hidden bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-clock text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Target: 5min</span>
                    </div>
                </div>
                <p class="text-blue-100 text-sm font-medium mb-1">Avg Pickup Time</p>
                <p class="text-3xl font-bold mb-2"><?= number_format($stats['avg_pickup_time'] ?? 0, 1) ?> min</p>
                <p class="text-xs text-blue-200">
                    <i class="fas fa-<?= ($stats['avg_pickup_time'] ?? 0) <= 5 ? 'check' : 'exclamation' ?> mr-1"></i>
                    <?= ($stats['avg_pickup_time'] ?? 0) <= 5 ? 'On target' : 'Above target' ?>
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-blue-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Average Delivery Time -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-green-500 to-green-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-green-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-truck text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Target: 25min</span>
                    </div>
                </div>
                <p class="text-green-100 text-sm font-medium mb-1">Avg Delivery Time</p>
                <p class="text-3xl font-bold mb-2"><?= number_format($stats['avg_delivery_time'] ?? 0, 1) ?> min</p>
                <p class="text-xs text-green-200">
                    <i class="fas fa-<?= ($stats['avg_delivery_time'] ?? 0) <= 25 ? 'check' : 'exclamation' ?> mr-1"></i>
                    <?= ($stats['avg_delivery_time'] ?? 0) <= 25 ? 'On target' : 'Above target' ?>
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-green-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Completion Rate -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-400 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-check-circle text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Target: 95%</span>
                    </div>
                </div>
                <p class="text-purple-100 text-sm font-medium mb-1">Completion Rate</p>
                <p class="text-3xl font-bold mb-2"><?= number_format($stats['completion_rate'] ?? 0, 1) ?>%</p>
                <p class="text-xs text-purple-200">
                    <i class="fas fa-<?= ($stats['completion_rate'] ?? 0) >= 95 ? 'check' : 'exclamation' ?> mr-1"></i>
                    <?= ($stats['completion_rate'] ?? 0) >= 95 ? 'Excellent' : 'Needs improvement' ?>
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-purple-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Average Rider Rating -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-yellow-400 to-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-star text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Target: 4.5</span>
                    </div>
                </div>
                <p class="text-yellow-100 text-sm font-medium mb-1">Avg Rider Rating</p>
                <p class="text-3xl font-bold mb-2"><?= number_format($stats['avg_rider_rating'] ?? 0, 1) ?></p>
                <p class="text-xs text-yellow-200">
                    <i class="fas fa-<?= ($stats['avg_rider_rating'] ?? 0) >= 4.5 ? 'check' : 'exclamation' ?> mr-1"></i>
                    <?= ($stats['avg_rider_rating'] ?? 0) >= 4.5 ? 'Excellent' : 'Needs improvement' ?>
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-orange-700 to-transparent rounded-full opacity-20"></div>
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
            <button onclick="exportRejectionData()" class="text-blue-600 hover:text-blue-700 text-sm font-medium bg-blue-50 px-4 py-2 rounded-xl hover:bg-blue-100 transition-colors">
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
</div>

<script>
// Performance Chart
const performanceCtx = document.getElementById('performance-chart').getContext('2d');
const performanceChart = new Chart(performanceCtx, {
    type: 'line',
    data: {
        labels: <?= json_encode($chartData['labels'] ?? []) ?>,
        datasets: [{
            label: 'Delivery Time (min)',
            data: <?= json_encode($chartData['delivery_times'] ?? []) ?>,
            borderColor: '#3b82f6',
            backgroundColor: 'rgba(59, 130, 246, 0.1)',
            tension: 0.4,
            fill: true
        }, {
            label: 'Pickup Time (min)',
            data: <?= json_encode($chartData['pickup_times'] ?? []) ?>,
            borderColor: '#10b981',
            backgroundColor: 'rgba(16, 185, 129, 0.1)',
            tension: 0.4,
            fill: true
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'top',
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Time (minutes)'
                }
            }
        }
    }
});

// Rejection Rate Chart
const rejectionCtx = document.getElementById('rejection-chart').getContext('2d');
const rejectionChart = new Chart(rejectionCtx, {
    type: 'doughnut',
    data: {
        labels: ['Completed', 'Rejected'],
        datasets: [{
            data: [<?= (100 - ($stats['rejection_rate'] ?? 0)) ?>, <?= $stats['rejection_rate'] ?? 0 ?>],
            backgroundColor: ['#10b981', '#ef4444'],
            borderWidth: 0
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'bottom',
            }
        }
    }
});

function refreshData() {
    location.reload();
}

function exportRejectionData() {
    const data = <?= json_encode($rejectionReasons ?? []) ?>;
    const csvContent = "data:text/csv;charset=utf-8," 
        + "Reason,Count\n"
        + data.map(row => `${row.cancel_reason},${row.count}`).join("\n");
    
    const encodedUri = encodeURI(csvContent);
    const link = document.createElement("a");
    link.setAttribute("href", encodedUri);
    link.setAttribute("download", "rejection_reasons.csv");
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}

// Auto-refresh data every 10 minutes
setInterval(function() {
    console.log('Refreshing performance data...');
}, 600000);
</script> 