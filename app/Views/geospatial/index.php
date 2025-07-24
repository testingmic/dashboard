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
                    <button onclick="refreshMapData()" class="px-6 py-3 bg-white bg-opacity-20 backdrop-blur-sm text-white rounded-xl hover:bg-opacity-30 transition-all duration-300 border border-white border-opacity-30">
                        <i class="fas fa-sync-alt mr-2"></i>Refresh
                    </button>
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

    <!-- Real-time Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Active Orders -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-shopping-bag text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Live</span>
                    </div>
                </div>
                <p class="text-blue-100 text-sm font-medium mb-1">Active Orders</p>
                <p class="text-3xl font-bold mb-2" id="active-orders-count"><?= count($activeOrders) ?></p>
                <p class="text-xs text-blue-200">
                    <i class="fas fa-circle mr-1 animate-pulse"></i>Currently in progress
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-blue-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Online Riders -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-green-500 to-green-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-green-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-motorcycle text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Online</span>
                    </div>
                </div>
                <p class="text-green-100 text-sm font-medium mb-1">Online Riders</p>
                <p class="text-3xl font-bold mb-2" id="online-riders-count"><?= count($onlineRiders) ?></p>
                <p class="text-xs text-green-200">
                    <i class="fas fa-circle mr-1 animate-pulse"></i>Available for orders
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-green-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Order Density -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-400 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-map-marker-alt text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Hotspots</span>
                    </div>
                </div>
                <p class="text-purple-100 text-sm font-medium mb-1">Order Density</p>
                <p class="text-3xl font-bold mb-2"><?= count($orderDensity) ?></p>
                <p class="text-xs text-purple-200">
                    <i class="fas fa-fire mr-1"></i>High activity areas
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-purple-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Coverage Area -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-teal-500 to-teal-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-teal-400 to-teal-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-globe text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Coverage</span>
                    </div>
                </div>
                <p class="text-teal-100 text-sm font-medium mb-1">Coverage Area</p>
                <p class="text-3xl font-bold mb-2">85%</p>
                <p class="text-xs text-teal-200">
                    <i class="fas fa-check mr-1"></i>Service coverage
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-teal-700 to-transparent rounded-full opacity-20"></div>
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

    <!-- Location Analytics -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Order Density Heatmap -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Order Density Heatmap</h3>
                    <p class="text-gray-600">High activity areas and hotspots</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full"><?= count($orderDensity) ?> hotspots</span>
                </div>
            </div>
            <div class="h-80">
                <canvas id="density-chart"></canvas>
            </div>
        </div>

        <!-- Coverage Analysis -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Coverage Analysis</h3>
                    <p class="text-gray-600">Service area coverage and gaps</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">85% covered</span>
                </div>
            </div>
            <div class="space-y-6">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-medium text-gray-700">Urban Areas</span>
                        <span class="font-bold text-green-600">95%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                        <div class="bg-gradient-to-r from-green-500 to-green-600 h-3 rounded-full" style="width: 95%"></div>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-medium text-gray-700">Suburban Areas</span>
                        <span class="font-bold text-blue-600">80%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full" style="width: 80%"></div>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-medium text-gray-700">Rural Areas</span>
                        <span class="font-bold text-orange-600">60%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                        <div class="bg-gradient-to-r from-orange-500 to-orange-600 h-3 rounded-full" style="width: 60%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Real-time Updates -->
    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8 border border-blue-200">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-bold text-gray-900">Real-time Updates</h3>
            <div class="flex items-center space-x-2">
                <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                <span class="text-sm font-medium text-green-600">Live</span>
            </div>
        </div>
        <div id="live-updates" class="space-y-3">
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
        </div>
    </div>
</div>

<script>
// Density Chart
const densityCtx = document.getElementById('density-chart').getContext('2d');
const densityChart = new Chart(densityCtx, {
    type: 'bar',
    data: {
        labels: ['Downtown', 'Midtown', 'Uptown', 'Airport', 'Mall Area', 'University'],
        datasets: [{
            label: 'Order Density',
            data: [150, 120, 90, 80, 110, 95],
            backgroundColor: [
                'rgba(59, 130, 246, 0.8)',
                'rgba(139, 92, 246, 0.8)',
                'rgba(236, 72, 153, 0.8)',
                'rgba(16, 185, 129, 0.8)',
                'rgba(245, 158, 11, 0.8)',
                'rgba(239, 68, 68, 0.8)'
            ],
            borderColor: [
                '#3b82f6',
                '#8b5cf6',
                '#ec4899',
                '#10b981',
                '#f59e0b',
                '#ef4444'
            ],
            borderWidth: 2,
            borderRadius: 8
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
                title: {
                    display: true,
                    text: 'Orders per day'
                }
            }
        }
    }
});

function refreshMapData() {
    // Simulate refreshing map data
    fetch('<?= base_url('geospatial/getRealTimeData') ?>')
        .then(response => response.json())
        .then(data => {
            document.getElementById('active-orders-count').textContent = data.active_orders?.length || 0;
            document.getElementById('online-riders-count').textContent = data.online_riders?.length || 0;
            console.log('Map data refreshed');
        })
        .catch(error => {
            console.error('Error refreshing map data:', error);
        });
}

function toggleFullscreen() {
    const mapContainer = document.getElementById('map');
    if (!document.fullscreenElement) {
        mapContainer.requestFullscreen();
    } else {
        document.exitFullscreen();
    }
}

function toggleHeatmap() {
    console.log('Toggle heatmap view');
    // Implementation for heatmap toggle
}

function toggleTraffic() {
    console.log('Toggle traffic view');
    // Implementation for traffic toggle
}

function exportCancellationData() {
    const data = <?= json_encode($highCancellationAreas ?? []) ?>;
    const csvContent = "data:text/csv;charset=utf-8," 
        + "Location,Total Orders,Canceled Orders,Cancellation Rate\n"
        + data.map(row => {
            const rate = (row.canceled_orders / row.total_orders) * 100;
            return `${row.pickup_location},${row.total_orders},${row.canceled_orders},${rate.toFixed(1)}%`;
        }).join("\n");
    
    const encodedUri = encodeURI(csvContent);
    const link = document.createElement("a");
    link.setAttribute("href", encodedUri);
    link.setAttribute("download", "cancellation_areas.csv");
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}

// Auto-refresh map data every 30 seconds
setInterval(refreshMapData, 30000);

// Initialize map data on page load
document.addEventListener('DOMContentLoaded', function() {
    refreshMapData();
});
</script> 