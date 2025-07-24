<!-- Users Analytics -->
<div class="space-y-8">
    <!-- Page Header with Gradient -->
    <div class="relative overflow-hidden bg-gradient-to-r from-purple-600 via-pink-600 to-blue-600 rounded-2xl p-8 text-white">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-2">User Analytics</h2>
                    <p class="text-purple-100 text-lg">Monitor user behavior and engagement metrics</p>
                </div>
                <div class="flex items-center space-x-3">
                    <a href="<?= base_url('users/analytics') ?>" class="px-6 py-3 bg-white bg-opacity-20 backdrop-blur-sm text-white rounded-xl hover:bg-opacity-30 transition-all duration-300 border border-white border-opacity-30">
                        <i class="fas fa-chart-line mr-2"></i>Analytics
                    </a>
                    <button class="px-6 py-3 bg-white bg-opacity-20 backdrop-blur-sm text-white rounded-xl hover:bg-opacity-30 transition-all duration-300 border border-white border-opacity-30">
                        <i class="fas fa-download mr-2"></i>Export
                    </button>
                </div>
            </div>
        </div>
        <!-- Decorative elements -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-5 rounded-full -translate-y-16 translate-x-16"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 bg-white opacity-5 rounded-full translate-y-12 -translate-x-12"></div>
    </div>

    <!-- User Statistics Cards -->
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

    <!-- Filters -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">User Filters</h3>
                <p class="text-gray-600">Filter users by registration date</p>
            </div>
        </div>
        <form method="GET" class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Registration Date</label>
                <input type="date" name="date_from" value="<?= $filters['date_from'] ?? '' ?>" 
                       class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">To</label>
                <input type="date" name="date_to" value="<?= $filters['date_to'] ?? '' ?>" 
                       class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
            </div>
            <div class="flex items-end">
                <button type="submit" class="w-full px-8 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-xl hover:from-blue-600 hover:to-purple-700 transition-all duration-300 font-medium">
                    <i class="fas fa-search mr-2"></i>Apply Filters
                </button>
            </div>
        </form>
    </div>

    <!-- Users Table -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center justify-between p-8 border-b border-gray-200">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Users Table</h3>
                <p class="text-gray-600">Monitor user behavior and engagement</p>
            </div>
            <div class="flex items-center space-x-3">
                <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">
                    <?= count($users) ?> users
                </span>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                    <tr>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">User</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Email</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Phone</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Orders</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Total Spent</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Last Order</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Status</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php if (!empty($users)): ?>
                        <?php foreach ($users as $user): ?>
                            <tr class="hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 transition-all duration-300">
                                <td class="py-4 px-6">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                                            <span class="text-white font-bold text-sm"><?= substr($user['name'] ?? 'U', 0, 1) ?></span>
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900"><?= $user['name'] ?? 'Unknown' ?></p>
                                            <p class="text-sm text-gray-600">ID: <?= $user['id'] ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <p class="text-sm text-gray-900"><?= $user['email'] ?? 'N/A' ?></p>
                                </td>
                                <td class="py-4 px-6">
                                    <p class="text-sm text-gray-900"><?= $user['phone'] ?? 'N/A' ?></p>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="font-medium text-gray-900"><?= $user['total_orders'] ?? 0 ?></span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="font-medium text-gray-900">$<?= number_format($user['total_spent'] ?? 0, 2) ?></span>
                                </td>
                                <td class="py-4 px-6">
                                    <p class="text-sm text-gray-600"><?= $user['last_order'] ? date('M j, Y', strtotime($user['last_order'])) : 'Never' ?></p>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-green-100 to-green-200 text-green-800">
                                        Active
                                    </span>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center space-x-2">
                                        <a href="<?= base_url('users/view/' . $user['id']) ?>" 
                                           class="text-blue-600 hover:text-blue-700" title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <button class="text-green-600 hover:text-green-700" title="Edit User">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-red-600 hover:text-red-700" title="Deactivate User">
                                            <i class="fas fa-ban"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8" class="text-center py-12">
                                <div class="w-16 h-16 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-users text-gray-400 text-2xl"></i>
                                </div>
                                <p class="text-gray-600 font-medium">No users found</p>
                                <p class="text-sm text-gray-500">Try adjusting your filters</p>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div> 