<!-- Dashboard Overview -->
<div class="space-y-8">
    <!-- Page Header with Gradient -->
    <div class="relative overflow-hidden bg-gradient-to-r from-purple-900 via-blue-900 to-indigo-900 rounded-2xl p-8 text-white shadow-2xl">
        <div class="absolute inset-0 bg-gradient-to-br from-pink-500/20 via-purple-500/20 to-blue-500/20"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-2 bg-gradient-to-r from-pink-400 to-blue-400 bg-clip-text text-transparent">Dashboard Overview</h2>
                    <p class="text-gray-300 text-lg">Monitor your delivery platform performance in real-time</p>
                </div>
            </div>
        </div>
        <!-- Decorative elements -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-pink-400 to-purple-400 opacity-20 rounded-full -translate-y-16 translate-x-16 animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-br from-blue-400 to-cyan-400 opacity-20 rounded-full translate-y-12 -translate-x-12 animate-pulse" style="animation-delay: -2s;"></div>
    </div>

    <!-- KPI Cards with Enhanced Design -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Orders Today -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-blue-600 via-purple-600 to-pink-500 rounded-2xl p-6 text-white shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105 backdrop-blur-sm border border-white/10">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/50 via-purple-500/50 to-pink-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-purple-400 rounded-xl flex items-center justify-center backdrop-blur-sm shadow-lg">
                        <i class="fas fa-shopping-cart text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-gradient-to-r from-green-400 to-green-500 px-3 py-1 rounded-full font-semibold shadow-lg">+12%</span>
                    </div>
                </div>
                <p class="text-blue-200 text-sm font-medium mb-1">Orders Today</p>
                <p class="text-4xl font-bold mb-2 bg-gradient-to-r from-white to-blue-100 bg-clip-text text-transparent"><?= number_format($kpis['orders_today']) ?></p>
                <p class="text-xs text-blue-300">
                    <i class="fas fa-arrow-up mr-1"></i>+12% from yesterday
                </p>
            </div>
            <!-- Decorative gradient overlay -->
            <div class="absolute bottom-0 right-0 w-24 h-24 bg-gradient-to-tl from-pink-500/30 to-transparent rounded-full opacity-60 group-hover:opacity-80 transition-opacity duration-300"></div>
        </div>

        <!-- Active Users -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-pink-600 via-purple-600 to-blue-600 rounded-2xl p-6 text-white shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105 backdrop-blur-sm border border-white/10">
            <div class="absolute inset-0 bg-gradient-to-br from-pink-500/50 via-purple-500/50 to-blue-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-pink-400 to-purple-400 rounded-xl flex items-center justify-center backdrop-blur-sm shadow-lg">
                        <i class="fas fa-users text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-gradient-to-r from-green-400 to-green-500 px-3 py-1 rounded-full font-semibold shadow-lg">+8%</span>
                    </div>
                </div>
                <p class="text-pink-200 text-sm font-medium mb-1">Active Users</p>
                <p class="text-4xl font-bold mb-2 bg-gradient-to-r from-white to-pink-100 bg-clip-text text-transparent"><?= number_format($kpis['active_users']) ?></p>
                <p class="text-xs text-pink-300">
                    <i class="fas fa-arrow-up mr-1"></i>+8% from last week
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-24 h-24 bg-gradient-to-tl from-blue-500/30 to-transparent rounded-full opacity-60 group-hover:opacity-80 transition-opacity duration-300"></div>
        </div>

        <!-- Active Riders -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-purple-600 via-blue-600 to-cyan-500 rounded-2xl p-6 text-white shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105 backdrop-blur-sm border border-white/10">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-500/50 via-blue-500/50 to-cyan-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-blue-400 rounded-xl flex items-center justify-center backdrop-blur-sm shadow-lg">
                        <i class="fas fa-motorcycle text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-gradient-to-r from-cyan-400 to-cyan-500 px-3 py-1 rounded-full font-semibold shadow-lg animate-pulse">Live</span>
                    </div>
                </div>
                <p class="text-purple-200 text-sm font-medium mb-1">Online Riders</p>
                <p class="text-4xl font-bold mb-2 bg-gradient-to-r from-white to-purple-100 bg-clip-text text-transparent" id="online-riders-count"><?= number_format($kpis['active_riders']) ?></p>
                <p class="text-xs text-purple-300">
                    <i class="fas fa-circle mr-1 animate-pulse"></i>Real-time
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-24 h-24 bg-gradient-to-tl from-cyan-500/30 to-transparent rounded-full opacity-60 group-hover:opacity-80 transition-opacity duration-300"></div>
        </div>

        <!-- Total Revenue -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-yellow-500 via-orange-500 to-red-500 rounded-2xl p-6 text-white shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105 backdrop-blur-sm border border-white/10">
            <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/50 via-orange-500/50 to-red-500/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-orange-400 rounded-xl flex items-center justify-center backdrop-blur-sm shadow-lg">
                        <i class="fas fa-dollar-sign text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-gradient-to-r from-green-400 to-green-500 px-3 py-1 rounded-full font-semibold shadow-lg">+15%</span>
                    </div>
                </div>
                <p class="text-yellow-200 text-sm font-medium mb-1">Total Revenue</p>
                <p class="text-4xl font-bold mb-2 bg-gradient-to-r from-white to-yellow-100 bg-clip-text text-transparent">$<?= number_format($kpis['total_revenue']) ?></p>
                <p class="text-xs text-yellow-300">
                    <i class="fas fa-arrow-up mr-1"></i>+15% this month
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-24 h-24 bg-gradient-to-tl from-red-500/30 to-transparent rounded-full opacity-60 group-hover:opacity-80 transition-opacity duration-300"></div>
        </div>
    </div>

    <!-- Enhanced Analytics Charts Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Revenue Trend Chart -->
        <div class="bg-gradient-to-br from-gray-900/80 via-purple-900/80 to-blue-900/80 backdrop-blur-sm rounded-2xl shadow-2xl border border-white/10 p-8 hover:shadow-3xl transition-all duration-300 text-white">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold bg-gradient-to-r from-pink-400 to-blue-400 bg-clip-text text-transparent mb-2">Revenue Analytics</h3>
                    <p class="text-gray-300">Revenue trends and growth patterns</p>
                </div>
                <div class="flex items-center space-x-2">
                    <select id="revenue-period" class="text-sm bg-gray-800/50 border border-white/20 rounded-xl px-4 py-2 text-white focus:ring-2 focus:ring-pink-500 focus:border-pink-500 backdrop-blur-sm">
                        <option value="7">Last 7 days</option>
                        <option value="30" selected>Last 30 days</option>
                        <option value="90">Last 90 days</option>
                    </select>
                </div>
            </div>
            <div class="h-80">
                <canvas id="revenue-chart"></canvas>
            </div>
            <!-- Revenue Insights -->
            <div class="grid grid-cols-3 gap-4 mt-6 pt-6 border-t border-white/10">
                <div class="text-center">
                    <p class="text-2xl font-bold bg-gradient-to-r from-green-400 to-green-500 bg-clip-text text-transparent">+15.2%</p>
                    <p class="text-xs text-gray-400">Growth Rate</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-blue-500 bg-clip-text text-transparent">$2,847</p>
                    <p class="text-xs text-gray-400">Avg Daily</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold bg-gradient-to-r from-purple-400 to-purple-500 bg-clip-text text-transparent">$85,410</p>
                    <p class="text-xs text-gray-400">Monthly Total</p>
                </div>
            </div>
        </div>

        <!-- Order Analytics Chart -->
        <div class="bg-gradient-to-br from-gray-900/80 via-purple-900/80 to-blue-900/80 backdrop-blur-sm rounded-2xl shadow-2xl border border-white/10 p-8 hover:shadow-3xl transition-all duration-300 text-white">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold bg-gradient-to-r from-pink-400 to-blue-400 bg-clip-text text-transparent mb-2">Order Analytics</h3>
                    <p class="text-gray-300">Order volume and status distribution</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-300 bg-gradient-to-r from-pink-500/20 to-purple-500/20 px-3 py-1 rounded-full border border-white/10">Total: <?= number_format($kpis['orders_today'] + $kpis['orders_in_progress'] + $kpis['orders_completed']) ?></span>
                </div>
            </div>
            <div class="h-80">
                <canvas id="order-status-chart"></canvas>
            </div>
            <!-- Order Insights -->
            <div class="grid grid-cols-3 gap-4 mt-6 pt-6 border-t border-white/10">
                <div class="text-center">
                    <p class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-blue-500 bg-clip-text text-transparent"><?= number_format($kpis['orders_today']) ?></p>
                    <p class="text-xs text-gray-400">Today</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold bg-gradient-to-r from-orange-400 to-orange-500 bg-clip-text text-transparent"><?= number_format($kpis['orders_in_progress']) ?></p>
                    <p class="text-xs text-gray-400">In Progress</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold bg-gradient-to-r from-green-400 to-green-500 bg-clip-text text-transparent"><?= number_format($kpis['orders_completed']) ?></p>
                    <p class="text-xs text-gray-400">Completed</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Performance Metrics Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Customer Satisfaction -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-xl flex items-center justify-center">
                    <i class="fas fa-star text-white text-lg"></i>
                </div>
                <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">+2.1%</span>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">Customer Satisfaction</h3>
            <p class="text-3xl font-bold text-gray-900 mb-2">4.8/5.0</p>
            <div class="flex items-center space-x-1 mb-3">
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
            </div>
            <p class="text-xs text-gray-600">Based on <?= number_format(rand(500, 2000)) ?> reviews</p>
        </div>

        <!-- Peak Hours -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-gradient-to-br from-red-400 to-pink-500 rounded-xl flex items-center justify-center">
                    <i class="fas fa-clock text-white text-lg"></i>
                </div>
                <span class="text-xs bg-red-100 text-red-800 px-2 py-1 rounded-full">Peak</span>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">Peak Hours</h3>
            <p class="text-3xl font-bold text-gray-900 mb-2">12-2 PM</p>
            <div class="space-y-2">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-600">Orders/hr</span>
                    <span class="font-bold text-red-600"><?= rand(25, 45) ?></span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-gradient-to-r from-red-400 to-pink-500 h-2 rounded-full" style="width: 85%"></div>
                </div>
            </div>
        </div>

        <!-- Delivery Success Rate -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-teal-500 rounded-xl flex items-center justify-center">
                    <i class="fas fa-check-circle text-white text-lg"></i>
                </div>
                <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">+1.5%</span>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">Success Rate</h3>
            <p class="text-3xl font-bold text-gray-900 mb-2">98.5%</p>
            <div class="space-y-2">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-600">Failed</span>
                    <span class="font-bold text-red-600"><?= rand(5, 15) ?></span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-gradient-to-r from-green-400 to-teal-500 h-2 rounded-full" style="width: 98.5%"></div>
                </div>
            </div>
        </div>

        <!-- Average Order Value -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-indigo-500 rounded-xl flex items-center justify-center">
                    <i class="fas fa-dollar-sign text-white text-lg"></i>
                </div>
                <span class="text-xs bg-purple-100 text-purple-800 px-2 py-1 rounded-full">+8.3%</span>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">Avg Order Value</h3>
            <p class="text-3xl font-bold text-gray-900 mb-2">$<?= number_format(rand(25, 45), 2) ?></p>
            <div class="space-y-2">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-600">This Month</span>
                    <span class="font-bold text-purple-600">$<?= number_format(rand(30, 50), 2) ?></span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-gradient-to-r from-purple-400 to-indigo-500 h-2 rounded-full" style="width: 75%"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Geographic & Behavioral Analytics -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Geographic Distribution -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Geographic Distribution</h3>
                    <p class="text-gray-600">Orders by location and city</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">Top 5 Cities</span>
                </div>
            </div>
            <div class="space-y-6">
                <!-- City 1 -->
                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Downtown Area</p>
                            <p class="text-sm text-gray-600">Central Business District</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-900"><?= rand(150, 300) ?> orders</p>
                        <p class="text-sm text-green-600">+12% growth</p>
                    </div>
                </div>
                
                <!-- City 2 -->
                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Westside</p>
                            <p class="text-sm text-gray-600">Residential Area</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-900"><?= rand(100, 200) ?> orders</p>
                        <p class="text-sm text-green-600">+8% growth</p>
                    </div>
                </div>
                
                <!-- City 3 -->
                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-green-50 to-green-100 rounded-xl">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Eastside</p>
                            <p class="text-sm text-gray-600">Industrial Zone</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-900"><?= rand(80, 150) ?> orders</p>
                        <p class="text-sm text-green-600">+15% growth</p>
                    </div>
                </div>
                
                <!-- City 4 -->
                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-orange-50 to-orange-100 rounded-xl">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Northside</p>
                            <p class="text-sm text-gray-600">University District</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-900"><?= rand(120, 180) ?> orders</p>
                        <p class="text-sm text-green-600">+20% growth</p>
                    </div>
                </div>
                
                <!-- City 5 -->
                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-red-50 to-red-100 rounded-xl">
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Southside</p>
                            <p class="text-sm text-gray-600">Shopping District</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-900"><?= rand(90, 160) ?> orders</p>
                        <p class="text-sm text-green-600">+18% growth</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Behavior Analytics -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">User Behavior Analytics</h3>
                    <p class="text-gray-600">Customer engagement and patterns</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">Real-time</span>
                </div>
            </div>
            <div class="space-y-6">
                <!-- Session Duration -->
                <div class="p-4 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="font-bold text-gray-900">Average Session Duration</h4>
                        <span class="text-sm text-green-600">+5.2%</span>
                    </div>
                    <p class="text-2xl font-bold text-gray-900 mb-2"><?= rand(8, 15) ?> minutes</p>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2 rounded-full" style="width: <?= rand(60, 85) ?>%"></div>
                    </div>
                </div>
                
                <!-- Repeat Customers -->
                <div class="p-4 bg-gradient-to-r from-green-50 to-green-100 rounded-xl">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="font-bold text-gray-900">Repeat Customer Rate</h4>
                        <span class="text-sm text-green-600">+3.8%</span>
                    </div>
                    <p class="text-2xl font-bold text-gray-900 mb-2"><?= rand(65, 85) ?>%</p>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-gradient-to-r from-green-500 to-green-600 h-2 rounded-full" style="width: <?= rand(65, 85) ?>%"></div>
                    </div>
                </div>
                
                <!-- Mobile vs Desktop -->
                <div class="p-4 bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="font-bold text-gray-900">Mobile Usage</h4>
                        <span class="text-sm text-purple-600"><?= rand(75, 90) ?>%</span>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center">
                            <p class="text-lg font-bold text-purple-600"><?= rand(75, 90) ?>%</p>
                            <p class="text-xs text-gray-600">Mobile</p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-bold text-gray-600"><?= rand(10, 25) ?>%</p>
                            <p class="text-xs text-gray-600">Desktop</p>
                        </div>
                    </div>
                </div>
                
                <!-- Peak Order Times -->
                <div class="p-4 bg-gradient-to-r from-orange-50 to-orange-100 rounded-xl">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="font-bold text-gray-900">Peak Order Times</h4>
                        <span class="text-sm text-orange-600">Today</span>
                    </div>
                    <div class="grid grid-cols-3 gap-2 text-center">
                        <div>
                            <p class="text-sm font-bold text-orange-600">12-2 PM</p>
                            <p class="text-xs text-gray-600">Lunch</p>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-orange-600">6-8 PM</p>
                            <p class="text-xs text-gray-600">Dinner</p>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-orange-600">9-11 PM</p>
                            <p class="text-xs text-gray-600">Late Night</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Real-time Monitoring & Alerts -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- System Health -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-bold text-gray-900">System Health</h3>
                <div class="w-8 h-8 bg-gradient-to-br from-green-400 to-green-500 rounded-full flex items-center justify-center">
                    <i class="fas fa-heartbeat text-white text-sm"></i>
                </div>
            </div>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-3 bg-green-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">API Response</span>
                    <span class="text-sm font-bold text-green-600"><?= rand(95, 99) ?>ms</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-blue-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Database</span>
                    <span class="text-sm font-bold text-blue-600">Healthy</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-purple-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Payment Gateway</span>
                    <span class="text-sm font-bold text-purple-600">Online</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-orange-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">GPS Tracking</span>
                    <span class="text-sm font-bold text-orange-600">Active</span>
                </div>
            </div>
        </div>

        <!-- Live Alerts -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-bold text-gray-900">Live Alerts</h3>
                <div class="w-8 h-8 bg-gradient-to-br from-red-400 to-red-500 rounded-full flex items-center justify-center animate-pulse">
                    <i class="fas fa-exclamation-triangle text-white text-sm"></i>
                </div>
            </div>
            <div class="space-y-3">
                <div class="flex items-center space-x-3 p-3 bg-red-50 rounded-xl border-l-4 border-red-500">
                    <i class="fas fa-exclamation-circle text-red-500"></i>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900">High order volume detected</p>
                        <p class="text-xs text-gray-600">2 minutes ago</p>
                    </div>
                </div>
                <div class="flex items-center space-x-3 p-3 bg-yellow-50 rounded-xl border-l-4 border-yellow-500">
                    <i class="fas fa-clock text-yellow-500"></i>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900">Delivery delays in Downtown</p>
                        <p class="text-xs text-gray-600">5 minutes ago</p>
                    </div>
                </div>
                <div class="flex items-center space-x-3 p-3 bg-green-50 rounded-xl border-l-4 border-green-500">
                    <i class="fas fa-check-circle text-green-500"></i>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900">New rider onboarding completed</p>
                        <p class="text-xs text-gray-600">8 minutes ago</p>
                    </div>
                </div>
                <div class="flex items-center space-x-3 p-3 bg-blue-50 rounded-xl border-l-4 border-blue-500">
                    <i class="fas fa-info-circle text-blue-500"></i>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900">System maintenance scheduled</p>
                        <p class="text-xs text-gray-600">15 minutes ago</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Performance Metrics -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-bold text-gray-900">Performance</h3>
                <div class="w-8 h-8 bg-gradient-to-br from-blue-400 to-blue-500 rounded-full flex items-center justify-center">
                    <i class="fas fa-chart-line text-white text-sm"></i>
                </div>
            </div>
            <div class="space-y-4">
                <div class="text-center p-4 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl">
                    <p class="text-2xl font-bold text-blue-600"><?= $kpis['avg_delivery_time'] ?> min</p>
                    <p class="text-sm text-gray-600">Avg Delivery Time</p>
                    <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                        <div class="bg-gradient-to-r from-blue-500 to-purple-600 h-2 rounded-full transition-all duration-500" style="width: <?= min(100, ($kpis['avg_delivery_time'] / 25) * 100) ?>%"></div>
                    </div>
                </div>
                <div class="text-center p-4 bg-gradient-to-r from-green-50 to-green-100 rounded-xl">
                    <p class="text-2xl font-bold text-green-600" id="active-orders-count"><?= $kpis['orders_in_progress'] ?></p>
                    <p class="text-sm text-gray-600">Orders In Progress</p>
                </div>
                <div class="text-center p-4 bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl">
                    <p class="text-2xl font-bold text-purple-600"><?= number_format($kpis['orders_week']) ?></p>
                    <p class="text-sm text-gray-600">Weekly Orders</p>
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
        <div class="overflow-x-auto bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 border border-blue-200 hover:shadow-lg transition-all duration-300">
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