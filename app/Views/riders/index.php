<!-- Riders Analytics -->
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-gray-900">Rider Analytics</h2>
            <p class="text-gray-600">Monitor rider performance and availability</p>
        </div>
        <div class="flex items-center space-x-3">
            <a href="<?= base_url('riders/analytics') ?>" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                <i class="fas fa-chart-line mr-2"></i>Analytics
            </a>
            <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                <i class="fas fa-plus mr-2"></i>Add Rider
            </button>
        </div>
    </div>

    <!-- Rider Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Riders -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 card-hover">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Total Riders</p>
                    <p class="text-2xl font-bold text-gray-900"><?= number_format($stats['total_riders']) ?></p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up mr-1"></i>+8% this month
                    </p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-motorcycle text-blue-600 text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Active Riders -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 card-hover">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Active Riders</p>
                    <p class="text-2xl font-bold text-gray-900"><?= number_format($stats['active_riders']) ?></p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-check-circle mr-1"></i>Available
                    </p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-user-check text-green-600 text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Online Riders -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 card-hover">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Online Riders</p>
                    <p class="text-2xl font-bold text-gray-900"><?= number_format($stats['online_riders']) ?></p>
                    <p class="text-xs text-blue-600 mt-1">
                        <i class="fas fa-circle mr-1"></i>Real-time
                    </p>
                </div>
                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-wifi text-orange-600 text-xl"></i>
                </div>
            </div>
        </div>

        <!-- New Riders This Month -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 card-hover">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">New Riders</p>
                    <p class="text-2xl font-bold text-gray-900"><?= number_format($stats['new_riders_month']) ?></p>
                    <p class="text-xs text-purple-600 mt-1">
                        <i class="fas fa-calendar mr-1"></i>This month
                    </p>
                </div>
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-user-plus text-purple-600 text-xl"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Filters</h3>
        <form method="GET" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select name="status" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Statuses</option>
                    <option value="active" <?= ($filters['status'] ?? '') === 'active' ? 'selected' : '' ?>>Active</option>
                    <option value="inactive" <?= ($filters['status'] ?? '') === 'inactive' ? 'selected' : '' ?>>Inactive</option>
                    <option value="suspended" <?= ($filters['status'] ?? '') === 'suspended' ? 'selected' : '' ?>>Suspended</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Vehicle Type</label>
                <select name="vehicle_type" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Vehicles</option>
                    <option value="motorcycle" <?= ($filters['vehicle_type'] ?? '') === 'motorcycle' ? 'selected' : '' ?>>Motorcycle</option>
                    <option value="bicycle" <?= ($filters['vehicle_type'] ?? '') === 'bicycle' ? 'selected' : '' ?>>Bicycle</option>
                    <option value="car" <?= ($filters['vehicle_type'] ?? '') === 'car' ? 'selected' : '' ?>>Car</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Min Rating</label>
                <select name="min_rating" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Any Rating</option>
                    <option value="4.5" <?= ($filters['min_rating'] ?? '') === '4.5' ? 'selected' : '' ?>>4.5+ Stars</option>
                    <option value="4.0" <?= ($filters['min_rating'] ?? '') === '4.0' ? 'selected' : '' ?>>4.0+ Stars</option>
                    <option value="3.5" <?= ($filters['min_rating'] ?? '') === '3.5' ? 'selected' : '' ?>>3.5+ Stars</option>
                </select>
            </div>
            <div class="flex items-end">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    <i class="fas fa-search mr-2"></i>Apply Filters
                </button>
            </div>
        </form>
    </div>

    <!-- Riders Table -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="text-left py-4 px-6 font-medium text-gray-600">Rider</th>
                        <th class="text-left py-4 px-6 font-medium text-gray-600">Vehicle</th>
                        <th class="text-left py-4 px-6 font-medium text-gray-600">Orders</th>
                        <th class="text-left py-4 px-6 font-medium text-gray-600">Completion Rate</th>
                        <th class="text-left py-4 px-6 font-medium text-gray-600">Earnings</th>
                        <th class="text-left py-4 px-6 font-medium text-gray-600">Rating</th>
                        <th class="text-left py-4 px-6 font-medium text-gray-600">Status</th>
                        <th class="text-left py-4 px-6 font-medium text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php if (!empty($riders)): ?>
                        <?php foreach ($riders as $rider): ?>
                            <tr class="hover:bg-gray-50">
                                <td class="py-4 px-6">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                            <span class="text-blue-600 font-medium"><?= substr($rider['name'] ?? 'R', 0, 1) ?></span>
                                        </div>
                                        <div>
                                            <p class="font-medium text-gray-900"><?= $rider['name'] ?? 'Unknown' ?></p>
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
                                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium
                                            <?= $rider['status'] === 'active' ? 'bg-green-100 text-green-800' : 
                                                ($rider['status'] === 'inactive' ? 'bg-gray-100 text-gray-800' : 
                                                'bg-red-100 text-red-800') ?>">
                                            <?= ucfirst($rider['status'] ?? 'Unknown') ?>
                                        </span>
                                        <?php if ($rider['is_online']): ?>
                                            <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center space-x-2">
                                        <a href="<?= base_url('riders/view/' . $rider['id']) ?>" 
                                           class="text-blue-600 hover:text-blue-700" title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <button onclick="updateRiderStatus(<?= $rider['id'] ?>)" 
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

<script>
function updateRiderStatus(riderId) {
    document.getElementById('riderId').value = riderId;
    document.getElementById('riderStatusModal').classList.remove('hidden');
}

function closeRiderStatusModal() {
    document.getElementById('riderStatusModal').classList.add('hidden');
    document.getElementById('riderStatusForm').reset();
}

// Rider status form submission
document.getElementById('riderStatusForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    
    fetch('<?= base_url('riders/updateStatus') ?>', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            closeRiderStatusModal();
            location.reload();
        } else {
            alert('Error: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while updating the rider status');
    });
});

// Close modal when clicking outside
document.getElementById('riderStatusModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeRiderStatusModal();
    }
});
</script> 