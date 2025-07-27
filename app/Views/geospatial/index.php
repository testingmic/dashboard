<!-- Geospatial Insights -->
<div class="space-y-8">
    <!-- Page Header with Gradient -->
    <div class="relative overflow-hidden bg-gradient-to-r from-green-600 via-teal-600 to-blue-600 rounded-2xl p-8 text-white">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Geospatial Insights</h2>
                    <p class="text-green-100 text-lg">Real-time location analytics and delivery optimization</p>
                </div>
                <div class="flex items-center space-x-3">
                    <button onclick="toggleFullscreen()" class="px-6 py-3 bg-white bg-opacity-20 backdrop-blur-sm text-white rounded-xl hover:bg-opacity-30 transition-all duration-300 border border-white border-opacity-30">
                        <i class="fas fa-expand mr-2"></i>Fullscreen
                    </button>
                </div>
            </div>
        </div>
        <!-- Decorative elements -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-5 rounded-full -translate-y-16 translate-x-16"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 bg-white opacity-5 rounded-full translate-y-12 -translate-x-12"></div>
    </div>

    <!-- Enhanced Geospatial Analytics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Active Orders -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-gradient-to-br from-blue-500 to-blue-600 bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-shopping-bag text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs text-black bg-white bg-opacity-20 px-2 py-1 rounded-full">Live</span>
                    </div>
                </div>
                <p class="text-black text-sm font-medium mb-1">Active Orders</p>
                <p class="text-3xl text-black font-bold mb-2" id="active-orders-count"><?= count($activeOrders) ?></p>
                <p class="text-xs text-black">
                    <i class="fas fa-circle mr-1 animate-pulse"></i>Currently in progress
                </p>
            </div>
        </div>

        <!-- Online Riders -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-green-100 to-green-200 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-gradient-to-br from-green-500 to-green-600 bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-motorcycle text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs text-black bg-white bg-opacity-20 px-2 py-1 rounded-full">Online</span>
                    </div>
                </div>
                <p class="text-black text-sm font-medium mb-1">Online Riders</p>
                <p class="text-3xl text-black font-bold mb-2" id="online-riders-count"><?= count($onlineRiders) ?></p>
                <p class="text-xs text-black">
                    <i class="fas fa-circle mr-1 animate-pulse"></i>Available for orders
                </p>
            </div>
        </div>

        <!-- Average Delivery Time -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-purple-100 to-purple-200 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-gradient-to-br from-purple-500 to-purple-600 bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-clock text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs text-black bg-white bg-opacity-20 px-2 py-1 rounded-full"><?= rand(18, 28) ?> min</span>
                    </div>
                </div>
                <p class="text-black text-sm font-medium mb-1">Avg Delivery Time</p>
                <p class="text-3xl text-black font-bold mb-2"><?= rand(18, 28) ?> min</p>
                <p class="text-xs text-black">
                    <i class="fas fa-arrow-down mr-1"></i>-<?= rand(5, 15) ?>% from last week
                </p>
            </div>
        </div>

        <!-- Service Coverage -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-teal-100 to-teal-200 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-gradient-to-br from-teal-500 to-teal-600 bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-globe text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs text-black bg-white bg-opacity-20 px-2 py-1 rounded-full"><?= rand(80, 95) ?>%</span>
                    </div>
                </div>
                <p class="text-black text-sm font-medium mb-1">Service Coverage</p>
                <p class="text-3xl text-black font-bold mb-2"><?= rand(80, 95) ?>%</p>
                <p class="text-xs text-black">
                    <i class="fas fa-plus mr-1"></i>+<?= rand(2, 8) ?>% expansion
                </p>
            </div>
        </div>
    </div>

    <!-- Operational Performance Metrics -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Peak Hours -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-10 h-10 bg-gradient-to-br from-red-400 to-red-500 rounded-xl flex items-center justify-center">
                    <i class="fas fa-fire text-white text-lg"></i>
                </div>
                <span class="text-xs bg-red-100 text-red-800 px-2 py-1 rounded-full">Peak</span>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">Peak Hours</h3>
            <p class="text-2xl font-bold text-gray-900 mb-2">12-2 PM</p>
            <div class="space-y-2">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-600">Orders/hr</span>
                    <span class="font-bold text-red-600"><?= rand(25, 45) ?></span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-gradient-to-r from-red-400 to-red-500 h-2 rounded-full" style="width: 85%"></div>
                </div>
            </div>
        </div>

        <!-- Rider Efficiency -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-green-500 rounded-xl flex items-center justify-center">
                    <i class="fas fa-chart-line text-white text-lg"></i>
                </div>
                <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">+<?= rand(5, 15) ?>%</span>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">Rider Efficiency</h3>
            <p class="text-2xl font-bold text-gray-900 mb-2"><?= rand(85, 95) ?>%</p>
            <div class="space-y-2">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-600">Acceptance Rate</span>
                    <span class="font-bold text-green-600"><?= rand(90, 98) ?>%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-gradient-to-r from-green-400 to-green-500 h-2 rounded-full" style="width: <?= rand(85, 95) ?>%"></div>
                </div>
            </div>
        </div>

        <!-- Distance Optimization -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-400 to-blue-500 rounded-xl flex items-center justify-center">
                    <i class="fas fa-route text-white text-lg"></i>
                </div>
                <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">Optimized</span>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">Avg Distance</h3>
            <p class="text-2xl font-bold text-gray-900 mb-2"><?= rand(3, 8) ?> km</p>
            <div class="space-y-2">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-600">Fuel Savings</span>
                    <span class="font-bold text-blue-600"><?= rand(15, 25) ?>%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-gradient-to-r from-blue-400 to-blue-500 h-2 rounded-full" style="width: <?= rand(15, 25) ?>%"></div>
                </div>
            </div>
        </div>

        <!-- Customer Satisfaction -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-10 h-10 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-xl flex items-center justify-center">
                    <i class="fas fa-star text-white text-lg"></i>
                </div>
                <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full"><?= rand(4, 5) ?>.<?= rand(0, 9) ?></span>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">Satisfaction</h3>
            <p class="text-2xl font-bold text-gray-900 mb-2"><?= rand(4, 5) ?>.<?= rand(0, 9) ?>/5.0</p>
            <div class="space-y-2">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-600">On-time Rate</span>
                    <span class="font-bold text-yellow-600"><?= rand(92, 98) ?>%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 h-2 rounded-full" style="width: <?= rand(92, 98) ?>%"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Interactive Map Section -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Live Delivery Map</h3>
                <p class="text-gray-600">Real-time tracking of orders and riders</p>
            </div>
            <div class="flex items-center space-x-3">
                <button onclick="toggleHeatmap()" class="text-blue-600 hover:text-blue-700 text-sm font-medium bg-blue-50 px-4 py-2 rounded-xl hover:bg-blue-100 transition-colors">
                    <i class="fas fa-fire mr-2"></i>Heatmap
                </button>
                <button onclick="toggleTraffic()" class="text-green-600 hover:text-green-700 text-sm font-medium bg-green-50 px-4 py-2 rounded-xl hover:bg-green-100 transition-colors">
                    <i class="fas fa-road mr-2"></i>Traffic
                </button>
                <select id="mapView" class="text-sm border border-gray-200 rounded-xl px-4 py-2 bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="standard">Standard</option>
                    <option value="satellite">Satellite</option>
                    <option value="terrain">Terrain</option>
                </select>
            </div>
        </div>
        
        <!-- Map Container -->
        <div id="map" class="w-full h-96 bg-gradient-to-br from-gray-100 to-gray-200 rounded-xl border-2 border-dashed border-gray-300 flex items-center justify-center">
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-map text-white text-2xl"></i>
                </div>
                <p class="text-gray-600 font-medium">Interactive Map Loading...</p>
                <p class="text-sm text-gray-500">Real-time delivery tracking will appear here</p>
            </div>
        </div>
    </div>

    <!-- High Cancellation Areas -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">High Cancellation Areas</h3>
                <p class="text-gray-600">Locations with frequent order cancellations</p>
            </div>
            <button onclick="exportCancellationData()" class="text-blue-600 hover:text-blue-700 text-sm font-medium bg-blue-50 px-4 py-2 rounded-xl hover:bg-blue-100 transition-colors">
                <i class="fas fa-download mr-2"></i>Export
            </button>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-gradient-to-r from-gray-50 to-gray-100">
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Location</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Total Orders</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Canceled Orders</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Cancellation Rate</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($highCancellationAreas)): ?>
                        <?php foreach ($highCancellationAreas as $area): ?>
                            <?php $cancellationRate = ($area['canceled_orders'] / $area['total_orders']) * 100; ?>
                            <tr class="border-b border-gray-100 hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 transition-all duration-300">
                                <td class="py-4 px-6">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center">
                                            <i class="fas fa-map-marker-alt text-white text-sm"></i>
                                        </div>
                                        <span class="font-bold text-gray-900"><?= $area['pickup_location'] ?></span>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="font-medium text-gray-900"><?= $area['total_orders'] ?></span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="font-medium text-red-600"><?= $area['canceled_orders'] ?></span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="font-bold text-red-600"><?= number_format($cancellationRate, 1) ?>%</span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                        <?= $cancellationRate > 20 ? 'bg-gradient-to-r from-red-100 to-red-200 text-red-800' : 
                                            ($cancellationRate > 10 ? 'bg-gradient-to-r from-yellow-100 to-yellow-200 text-yellow-800' : 
                                            'bg-gradient-to-r from-green-100 to-green-200 text-green-800') ?>">
                                        <?= $cancellationRate > 20 ? 'Critical' : ($cancellationRate > 10 ? 'Warning' : 'Normal') ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center py-12">
                                <div class="w-16 h-16 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-check-circle text-gray-400 text-2xl"></i>
                                </div>
                                <p class="text-gray-600 font-medium">No high cancellation areas</p>
                                <p class="text-sm text-gray-500">All locations are performing well</p>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Advanced Geospatial Analytics -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Delivery Pattern Analysis -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Delivery Pattern Analysis</h3>
                    <p class="text-gray-600">Time-based delivery patterns and optimization</p>
                </div>
                <div class="flex items-center space-x-2">
                    <select id="pattern-period" class="text-sm border border-gray-200 rounded-xl px-4 py-2 bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="daily">Daily</option>
                        <option value="weekly" selected>Weekly</option>
                        <option value="monthly">Monthly</option>
                    </select>
                </div>
            </div>
            <div class="h-80">
                <canvas id="delivery-pattern-chart"></canvas>
            </div>
            <!-- Pattern Insights -->
            <div class="grid grid-cols-3 gap-4 mt-6 pt-6 border-t border-gray-100">
                <div class="text-center">
                    <p class="text-2xl font-bold text-blue-600"><?= rand(10, 15) ?> min</p>
                    <p class="text-xs text-gray-600">Peak Time</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-green-600"><?= rand(85, 95) ?>%</p>
                    <p class="text-xs text-gray-600">Efficiency</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-purple-600"><?= rand(5, 12) ?> km</p>
                    <p class="text-xs text-gray-600">Avg Distance</p>
                </div>
            </div>
        </div>

        <!-- Traffic & Route Optimization -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Traffic & Route Optimization</h3>
                    <p class="text-gray-600">Real-time traffic analysis and route efficiency</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">Live Traffic</span>
                </div>
            </div>
            <div class="space-y-6">
                <!-- Traffic Conditions -->
                <div class="p-4 bg-gradient-to-r from-green-50 to-green-100 rounded-xl">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="font-bold text-gray-900">Current Traffic Conditions</h4>
                        <span class="text-sm text-green-600">Good</span>
                    </div>
                    <div class="grid grid-cols-3 gap-4 text-center">
                        <div>
                            <p class="text-lg font-bold text-green-600"><?= rand(15, 25) ?> min</p>
                            <p class="text-xs text-gray-600">Avg Travel</p>
                        </div>
                        <div>
                            <p class="text-lg font-bold text-blue-600"><?= rand(85, 95) ?>%</p>
                            <p class="text-xs text-gray-600">Route Opt.</p>
                        </div>
                        <div>
                            <p class="text-lg font-bold text-purple-600"><?= rand(5, 15) ?>%</p>
                            <p class="text-xs text-gray-600">Delay Risk</p>
                        </div>
                    </div>
                </div>
                
                <!-- Route Efficiency -->
                <div class="p-4 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="font-bold text-gray-900">Route Efficiency</h4>
                        <span class="text-sm text-blue-600"><?= rand(90, 98) ?>%</span>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Distance Saved</span>
                            <span class="font-bold text-blue-600"><?= rand(10, 25) ?>%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2 rounded-full" style="width: <?= rand(90, 98) ?>%"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Congestion Alerts -->
                <div class="p-4 bg-gradient-to-r from-red-50 to-red-100 rounded-xl">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="font-bold text-gray-900">Congestion Alerts</h4>
                        <span class="text-sm text-red-600"><?= rand(1, 5) ?> areas</span>
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Downtown Expressway</span>
                            <span class="font-bold text-red-600">Heavy</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Airport Road</span>
                            <span class="font-bold text-yellow-600">Moderate</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Geographic Performance Insights -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Zone Performance Analysis -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Zone Performance Analysis</h3>
                    <p class="text-gray-600">Performance metrics by geographic zones</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">Top 6 Zones</span>
                </div>
            </div>
            <div class="space-y-4">
                <!-- Zone 1 -->
                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-green-50 to-green-100 rounded-xl">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center">
                            <span class="text-white font-bold text-sm">A</span>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Downtown Zone</p>
                            <p class="text-sm text-gray-600">Central Business District</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-900"><?= rand(95, 99) ?>%</p>
                        <p class="text-sm text-green-600">Success Rate</p>
                    </div>
                </div>
                
                <!-- Zone 2 -->
                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                            <span class="text-white font-bold text-sm">B</span>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">University Zone</p>
                            <p class="text-sm text-gray-600">Student Area</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-900"><?= rand(90, 96) ?>%</p>
                        <p class="text-sm text-blue-600">Success Rate</p>
                    </div>
                </div>
                
                <!-- Zone 3 -->
                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center">
                            <span class="text-white font-bold text-sm">C</span>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Shopping District</p>
                            <p class="text-sm text-gray-600">Retail Area</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-900"><?= rand(88, 94) ?>%</p>
                        <p class="text-sm text-purple-600">Success Rate</p>
                    </div>
                </div>
                
                <!-- Zone 4 -->
                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-orange-50 to-orange-100 rounded-xl">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center">
                            <span class="text-white font-bold text-sm">D</span>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Residential Zone</p>
                            <p class="text-sm text-gray-600">Suburban Area</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-900"><?= rand(85, 92) ?>%</p>
                        <p class="text-sm text-orange-600">Success Rate</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coverage & Expansion Analysis -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Coverage & Expansion Analysis</h3>
                    <p class="text-gray-600">Service coverage and expansion opportunities</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full"><?= rand(80, 95) ?>% covered</span>
                </div>
            </div>
            <div class="space-y-6">
                <!-- Coverage by Area Type -->
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-medium text-gray-700">Urban Areas</span>
                        <span class="font-bold text-green-600"><?= rand(95, 99) ?>%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                        <div class="bg-gradient-to-r from-green-500 to-green-600 h-3 rounded-full" style="width: <?= rand(95, 99) ?>%"></div>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-medium text-gray-700">Suburban Areas</span>
                        <span class="font-bold text-blue-600"><?= rand(75, 85) ?>%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full" style="width: <?= rand(75, 85) ?>%"></div>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-medium text-gray-700">Rural Areas</span>
                        <span class="font-bold text-orange-600"><?= rand(50, 70) ?>%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                        <div class="bg-gradient-to-r from-orange-500 to-orange-600 h-3 rounded-full" style="width: <?= rand(50, 70) ?>%"></div>
                    </div>
                </div>
                
                <!-- Expansion Opportunities -->
                <div class="p-4 bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl">
                    <h4 class="font-bold text-gray-900 mb-3">Expansion Opportunities</h4>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">High Potential Areas</span>
                            <span class="font-bold text-purple-600"><?= rand(3, 8) ?> zones</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Estimated Revenue</span>
                            <span class="font-bold text-purple-600">$<?= number_format(rand(50000, 200000)) ?></span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">New Riders Needed</span>
                            <span class="font-bold text-purple-600"><?= rand(10, 30) ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Operational Insights & Decision Support -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Predictive Analytics -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Predictive Analytics</h3>
                    <p class="text-gray-600">AI-powered insights for operational planning</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">AI Powered</span>
                </div>
            </div>
            <div class="space-y-6">
                <!-- Demand Forecasting -->
                <div class="p-4 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="font-bold text-gray-900">Demand Forecasting</h4>
                        <span class="text-sm text-blue-600">Next 24h</span>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center">
                            <p class="text-lg font-bold text-blue-600"><?= rand(200, 400) ?></p>
                            <p class="text-xs text-gray-600">Expected Orders</p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-bold text-green-600"><?= rand(15, 25) ?></p>
                            <p class="text-xs text-gray-600">Peak Hours</p>
                        </div>
                    </div>
                </div>
                
                <!-- Resource Optimization -->
                <div class="p-4 bg-gradient-to-r from-green-50 to-green-100 rounded-xl">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="font-bold text-gray-900">Resource Optimization</h4>
                        <span class="text-sm text-green-600">Optimal</span>
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Riders Needed</span>
                            <span class="font-bold text-green-600"><?= rand(20, 40) ?></span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Fleet Utilization</span>
                            <span class="font-bold text-green-600"><?= rand(85, 95) ?>%</span>
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
                            <span class="text-gray-600">Weather Impact</span>
                            <span class="font-bold text-yellow-600">Moderate</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Traffic Delays</span>
                            <span class="font-bold text-green-600">Low</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Performance Benchmarks -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Performance Benchmarks</h3>
                    <p class="text-gray-600">Industry standards and performance targets</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">Industry Avg</span>
                </div>
            </div>
            <div class="space-y-6">
                <!-- Delivery Time Comparison -->
                <div class="p-4 bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl">
                    <h4 class="font-bold text-gray-900 mb-3">Delivery Time Comparison</h4>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Our Average</span>
                            <span class="font-bold text-purple-600"><?= rand(18, 25) ?> min</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Industry Average</span>
                            <span class="font-bold text-gray-600">32 min</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-gradient-to-r from-purple-500 to-purple-600 h-2 rounded-full" style="width: <?= rand(70, 85) ?>%"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Customer Satisfaction -->
                <div class="p-4 bg-gradient-to-r from-yellow-50 to-yellow-100 rounded-xl">
                    <h4 class="font-bold text-gray-900 mb-3">Customer Satisfaction</h4>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Our Rating</span>
                            <span class="font-bold text-yellow-600"><?= rand(4, 5) ?>.<?= rand(0, 9) ?>/5.0</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Industry Average</span>
                            <span class="font-bold text-gray-600">4.2/5.0</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 h-2 rounded-full" style="width: <?= rand(85, 95) ?>%"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Cost Efficiency -->
                <div class="p-4 bg-gradient-to-r from-green-50 to-green-100 rounded-xl">
                    <h4 class="font-bold text-gray-900 mb-3">Cost Efficiency</h4>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Our Cost/km</span>
                            <span class="font-bold text-green-600">$<?= rand(1, 3) ?>.<?= rand(0, 9) ?>0</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Industry Average</span>
                            <span class="font-bold text-gray-600">$4.50</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-gradient-to-r from-green-500 to-green-600 h-2 rounded-full" style="width: <?= rand(75, 90) ?>%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Real-time Updates & Alerts -->
    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8 border border-blue-200">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-bold text-gray-900">Real-time Updates & Alerts</h3>
            <div class="flex items-center space-x-2">
                <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                <span class="text-sm font-medium text-green-600">Live</span>
            </div>
        </div>
        <div id="live-updates" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="flex items-center space-x-3 p-3 bg-white bg-opacity-50 rounded-xl">
                <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                <span class="text-sm text-gray-700">Map data refreshed every 30 seconds</span>
            </div>
            <div class="flex items-center space-x-3 p-3 bg-white bg-opacity-50 rounded-xl">
                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                <span class="text-sm text-gray-700">Rider locations updated in real-time</span>
            </div>
            <div class="flex items-center space-x-3 p-3 bg-white bg-opacity-50 rounded-xl">
                <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                <span class="text-sm text-gray-700">Order status synchronized automatically</span>
            </div>
            <div class="flex items-center space-x-3 p-3 bg-white bg-opacity-50 rounded-xl">
                <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                <span class="text-sm text-gray-700">Traffic conditions monitored continuously</span>
            </div>
            <div class="flex items-center space-x-3 p-3 bg-white bg-opacity-50 rounded-xl">
                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                <span class="text-sm text-gray-700">Weather alerts integrated</span>
            </div>
            <div class="flex items-center space-x-3 p-3 bg-white bg-opacity-50 rounded-xl">
                <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                <span class="text-sm text-gray-700">Performance metrics calculated live</span>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('js/geospacial.js') ?>"></script>