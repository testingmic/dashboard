<!-- Riders Analytics -->
<div class="space-y-8">
    <!-- Page Header with Gradient -->
    <div class="relative overflow-hidden bg-gradient-to-r from-green-600 via-teal-600 to-blue-600 rounded-2xl p-8 text-white">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Rider Analytics</h2>
                    <p class="text-green-100 text-lg">Monitor rider performance and availability</p>
                </div>
                <div class="flex items-center space-x-3">
                    <button class="px-6 py-3 bg-white bg-opacity-20 backdrop-blur-sm text-white rounded-xl hover:bg-opacity-30 transition-all duration-300 border border-white border-opacity-30">
                        <i class="fas fa-plus mr-2"></i>Add Rider
                    </button>
                </div>
            </div>
        </div>
        <!-- Decorative elements -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-5 rounded-full -translate-y-16 translate-x-16"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 bg-white opacity-5 rounded-full translate-y-12 -translate-x-12"></div>
    </div>

    <!-- Rider Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Riders -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-motorcycle text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">+8%</span>
                    </div>
                </div>
                <p class="text-blue-100 text-sm font-medium mb-1">Total Riders</p>
                <p class="text-3xl font-bold mb-2"><?= number_format($stats['total_riders']) ?></p>
                <p class="text-xs text-blue-200">
                    <i class="fas fa-arrow-up mr-1"></i>+8% this month
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-blue-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Active Riders -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-green-500 to-green-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-green-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-user-check text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Active</span>
                    </div>
                </div>
                <p class="text-green-100 text-sm font-medium mb-1">Active Riders</p>
                <p class="text-3xl font-bold mb-2"><?= number_format($stats['active_riders']) ?></p>
                <p class="text-xs text-green-200">
                    <i class="fas fa-check-circle mr-1"></i>Available
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-green-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Online Riders -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-orange-400 to-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-wifi text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Live</span>
                    </div>
                </div>
                <p class="text-orange-100 text-sm font-medium mb-1">Online Riders</p>
                <p class="text-3xl font-bold mb-2"><?= number_format($stats['online_riders']) ?></p>
                <p class="text-xs text-orange-200">
                    <i class="fas fa-circle mr-1 animate-pulse"></i>Real-time
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-orange-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- New Riders This Month -->
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
                <p class="text-purple-100 text-sm font-medium mb-1">New Riders</p>
                <p class="text-3xl font-bold mb-2"><?= number_format($stats['new_riders_month']) ?></p>
                <p class="text-xs text-purple-200">
                    <i class="fas fa-calendar mr-1"></i>This month
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-purple-700 to-transparent rounded-full opacity-20"></div>
        </div>
    </div>

    <!-- Filters -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Rider Filters</h3>
                <p class="text-gray-600">Filter riders by status, vehicle type, and rating</p>
            </div>
        </div>
        <form method="GET" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select name="status" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    <option value="">All Statuses</option>
                    <option value="active" <?= ($filters['status'] ?? '') === 'active' ? 'selected' : '' ?>>Active</option>
                    <option value="inactive" <?= ($filters['status'] ?? '') === 'inactive' ? 'selected' : '' ?>>Inactive</option>
                    <option value="suspended" <?= ($filters['status'] ?? '') === 'suspended' ? 'selected' : '' ?>>Suspended</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Vehicle Type</label>
                <select name="vehicle_type" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    <option value="">All Vehicles</option>
                    <option value="motorcycle" <?= ($filters['vehicle_type'] ?? '') === 'motorcycle' ? 'selected' : '' ?>>Motorcycle</option>
                    <option value="bicycle" <?= ($filters['vehicle_type'] ?? '') === 'bicycle' ? 'selected' : '' ?>>Bicycle</option>
                    <option value="car" <?= ($filters['vehicle_type'] ?? '') === 'car' ? 'selected' : '' ?>>Car</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Min Rating</label>
                <select name="min_rating" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    <option value="">Any Rating</option>
                    <option value="4.5" <?= ($filters['min_rating'] ?? '') === '4.5' ? 'selected' : '' ?>>4.5+ Stars</option>
                    <option value="4.0" <?= ($filters['min_rating'] ?? '') === '4.0' ? 'selected' : '' ?>>4.0+ Stars</option>
                    <option value="3.5" <?= ($filters['min_rating'] ?? '') === '3.5' ? 'selected' : '' ?>>3.5+ Stars</option>
                </select>
            </div>
            <div class="flex items-end">
                <button type="submit" class="w-full px-8 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-xl hover:from-blue-600 hover:to-purple-700 transition-all duration-300 font-medium">
                    <i class="fas fa-search mr-2"></i>Apply Filters
                </button>
            </div>
        </form>
    </div>

    <!-- Riders Table -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center justify-between p-8 border-b border-gray-200">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Riders Table</h3>
                <p class="text-gray-600">Monitor rider performance and availability</p>
            </div>
            <div class="flex items-center space-x-3">
                <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">
                    <?= count($riders) ?> riders
                </span>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                    <tr>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Rider</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Vehicle</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Orders</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Completion Rate</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Earnings</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Rating</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Status</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php if (!empty($riders)): ?>
                        <?php foreach ($riders as $rider): ?>
                            <tr class="hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 transition-all duration-300">
                                <td class="py-4 px-6">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                                            <span class="text-white font-bold text-sm"><?= substr($rider['name'] ?? 'R', 0, 1) ?></span>
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900"><?= $rider['name'] ?? 'Unknown' ?></p>
                                            <p class="text-sm text-gray-600"><?= $rider['email'] ?? 'N/A' ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div>
                                        <p class="text-sm font-medium text-gray-900"><?= ucfirst($rider['vehicle_type'] ?? 'N/A') ?></p>
                                        <p class="text-xs text-gray-600"><?= $rider['vehicle_number'] ?? 'N/A' ?></p>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="font-medium text-gray-900"><?= $rider['total_deliveries'] ?? 0 ?></span>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center">
                                        <span class="font-medium text-gray-900"><?= number_format($rider['completion_rate'] ?? 0, 1) ?>%</span>
                                        <div class="ml-2 w-16 bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-600 h-2 rounded-full" style="width: <?= min(100, $rider['completion_rate'] ?? 0) ?>%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="font-medium text-gray-900">$<?= number_format($rider['total_earnings'] ?? 0, 2) ?></span>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center">
                                        <span class="text-yellow-500 mr-1">★</span>
                                        <span class="text-sm text-gray-600"><?= number_format($rider['rating'] ?? 0, 1) ?></span>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center space-x-2">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                            <?= $rider['status'] === 'active' ? 'bg-gradient-to-r from-green-100 to-green-200 text-green-800' : 
                                                ($rider['status'] === 'inactive' ? 'bg-gradient-to-r from-gray-100 to-gray-200 text-gray-800' : 
                                                'bg-gradient-to-r from-red-100 to-red-200 text-red-800') ?>">
                                            <?= ucfirst($rider['status'] ?? 'Unknown') ?>
                                        </span>
                                        <?php if ($rider['is_online']): ?>
                                            <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center space-x-2">
                                        <a href="<?= base_url('riders/view/' . $rider['id']) ?>" 
                                           class="text-blue-600 hover:text-blue-700" title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <button onclick="RidersHandler.updateRiderStatus(<?= $rider['id'] ?>)" 
                                                class="text-green-600 hover:text-green-700" title="Update Status">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-orange-600 hover:text-orange-700" title="Track Location">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8" class="text-center py-12">
                                <div class="text-gray-500">
                                    <i class="fas fa-motorcycle text-4xl mb-4"></i>
                                    <p class="text-lg font-medium">No riders found</p>
                                    <p class="text-sm">Try adjusting your filters or add new riders</p>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Status Update Modal -->
<div id="riderStatusModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden z-50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-xl shadow-lg max-w-md w-full">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Update Rider Status</h3>
                <form id="riderStatusForm">
                    <input type="hidden" id="riderId" name="rider_id">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                        <select id="riderStatusSelect" name="status" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                            <option value="suspended">Suspended</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="flex items-center">
                            <input type="checkbox" id="isOnlineCheck" name="is_online" value="1" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="ml-2 text-sm text-gray-700">Online/Available</span>
                        </label>
                    </div>
                    <div class="flex items-center justify-end space-x-3">
                        <button type="button" onclick="closeRiderStatusModal()" class="px-4 py-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                            Update Status
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>