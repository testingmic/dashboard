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
                    <a href="<?= base_url('revenue/analytics') ?>" class="px-6 py-3 bg-white bg-opacity-20 backdrop-blur-sm text-white rounded-xl hover:bg-opacity-30 transition-all duration-300 border border-white border-opacity-30">
                        <i class="fas fa-chart-line mr-2"></i>Analytics
                    </a>
                </div>
            </div>
        </div>
        <!-- Decorative elements -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-5 rounded-full -translate-y-16 translate-x-16"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 bg-white opacity-5 rounded-full translate-y-12 -translate-x-12"></div>
    </div>

    <!-- Revenue Statistics Cards -->
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
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Total</span>
                    </div>
                </div>
                <p class="text-green-100 text-sm font-medium mb-1">Total Revenue</p>
                <p class="text-3xl font-bold mb-2">$<?= number_format($stats['total_revenue'] ?? 0, 2) ?></p>
                <p class="text-xs text-green-200">
                    <i class="fas fa-arrow-up mr-1"></i>All time earnings
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
                    <i class="fas fa-chart-line mr-1"></i>Current month
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
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Commission</span>
                    </div>
                </div>
                <p class="text-pink-100 text-sm font-medium mb-1">Commission Earned</p>
                <p class="text-3xl font-bold mb-2">$<?= number_format($stats['total_commission'] ?? 0, 2) ?></p>
                <p class="text-xs text-pink-200">
                    <i class="fas fa-hand-holding-usd mr-1"></i>Platform earnings
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-purple-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Refunds -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-orange-400 to-red-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-undo text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Refunds</span>
                    </div>
                </div>
                <p class="text-orange-100 text-sm font-medium mb-1">Total Refunds</p>
                <p class="text-3xl font-bold mb-2">$<?= number_format($stats['total_refunds'] ?? 0, 2) ?></p>
                <p class="text-xs text-orange-200">
                    <i class="fas fa-exclamation-triangle mr-1"></i><?= $stats['refund_count'] ?? 0 ?> refunds
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-red-700 to-transparent rounded-full opacity-20"></div>
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

    <!-- Quick Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- This Week Revenue -->
        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 border border-blue-200 hover:shadow-lg transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <h4 class="text-lg font-bold text-gray-900">This Week</h4>
                <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-calendar-week text-white"></i>
                </div>
            </div>
            <p class="text-2xl font-bold text-gray-900 mb-2">$<?= number_format($stats['revenue_this_week'] ?? 0, 2) ?></p>
            <p class="text-sm text-gray-600">Weekly revenue</p>
        </div>

        <!-- Commission This Month -->
        <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-6 border border-purple-200 hover:shadow-lg transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <h4 class="text-lg font-bold text-gray-900">Commission</h4>
                <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-percentage text-white"></i>
                </div>
            </div>
            <p class="text-2xl font-bold text-gray-900 mb-2">$<?= number_format($stats['commission_this_month'] ?? 0, 2) ?></p>
            <p class="text-sm text-gray-600">This month's commission</p>
        </div>

        <!-- Average Order Value -->
        <div class="bg-gradient-to-br from-pink-50 to-pink-100 rounded-2xl p-6 border border-pink-200 hover:shadow-lg transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <h4 class="text-lg font-bold text-gray-900">Avg Order</h4>
                <div class="w-10 h-10 bg-gradient-to-br from-pink-500 to-pink-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-chart-bar text-white"></i>
                </div>
            </div>
            <p class="text-2xl font-bold text-gray-900 mb-2">$<?= number_format(($stats['total_revenue'] ?? 0) / max(1, count($revenue)), 2) ?></p>
            <p class="text-sm text-gray-600">Average order value</p>
        </div>
    </div>
</div>

<script>
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
</script> 