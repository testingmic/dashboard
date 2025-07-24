<!-- Orders Management -->
<div class="space-y-8">
    <!-- Page Header with Gradient -->
    <div class="relative overflow-hidden bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 rounded-2xl p-8 text-white">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Orders Management</h2>
                    <p class="text-blue-100 text-lg">Manage and track all delivery orders in real-time</p>
                </div>
                <div class="flex items-center space-x-3">
                    <a href="<?= base_url('orders/export') ?>" class="px-6 py-3 bg-white bg-opacity-20 backdrop-blur-sm text-white rounded-xl hover:bg-opacity-30 transition-all duration-300 border border-white border-opacity-30">
                        <i class="fas fa-download mr-2"></i>Export CSV
                    </a>
                    <button class="px-6 py-3 bg-white bg-opacity-20 backdrop-blur-sm text-white rounded-xl hover:bg-opacity-30 transition-all duration-300 border border-white border-opacity-30">
                        <i class="fas fa-plus mr-2"></i>New Order
                    </button>
                </div>
            </div>
        </div>
        <!-- Decorative elements -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-5 rounded-full -translate-y-16 translate-x-16"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 bg-white opacity-5 rounded-full translate-y-12 -translate-x-12"></div>
    </div>

    <!-- Filters -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Order Filters</h3>
                <p class="text-gray-600">Filter orders by date, status, and payment</p>
            </div>
            <a href="<?= base_url('orders') ?>" class="text-blue-600 hover:text-blue-700 text-sm font-medium bg-blue-50 px-4 py-2 rounded-xl hover:bg-blue-100 transition-colors">
                <i class="fas fa-times mr-2"></i>Clear Filters
            </a>
        </div>
        <form method="GET" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Date From</label>
                <input type="date" name="date_from" value="<?= $filters['date_from'] ?? '' ?>" 
                       class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Date To</label>
                <input type="date" name="date_to" value="<?= $filters['date_to'] ?? '' ?>" 
                       class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select name="status" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    <option value="">All Statuses</option>
                    <option value="pending" <?= ($filters['status'] ?? '') === 'pending' ? 'selected' : '' ?>>Pending</option>
                    <option value="accepted" <?= ($filters['status'] ?? '') === 'accepted' ? 'selected' : '' ?>>Accepted</option>
                    <option value="picked_up" <?= ($filters['status'] ?? '') === 'picked_up' ? 'selected' : '' ?>>Picked Up</option>
                    <option value="delivered" <?= ($filters['status'] ?? '') === 'delivered' ? 'selected' : '' ?>>Delivered</option>
                    <option value="canceled" <?= ($filters['status'] ?? '') === 'canceled' ? 'selected' : '' ?>>Canceled</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Payment Status</label>
                <select name="payment_status" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    <option value="">All Payment Statuses</option>
                    <option value="paid" <?= ($filters['payment_status'] ?? '') === 'paid' ? 'selected' : '' ?>>Paid</option>
                    <option value="unpaid" <?= ($filters['payment_status'] ?? '') === 'unpaid' ? 'selected' : '' ?>>Unpaid</option>
                    <option value="refunded" <?= ($filters['payment_status'] ?? '') === 'refunded' ? 'selected' : '' ?>>Refunded</option>
                </select>
            </div>
            <div class="md:col-span-2 lg:col-span-4">
                <button type="submit" class="w-full md:w-auto px-8 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-xl hover:from-blue-600 hover:to-purple-700 transition-all duration-300 font-medium">
                    <i class="fas fa-search mr-2"></i>Apply Filters
                </button>
            </div>
        </form>
    </div>

    <!-- Orders Table -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center justify-between p-8 border-b border-gray-200">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Orders Table</h3>
                <p class="text-gray-600">Manage and track all delivery orders</p>
            </div>
            <div class="flex items-center space-x-3">
                <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">
                    <?= count($orders) ?> orders
                </span>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                    <tr>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Order ID</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Customer</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Rider</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Pickup</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Delivery</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Amount</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Status</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Payment</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Created</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php if (!empty($orders)): ?>
                        <?php foreach ($orders as $order): ?>
                            <tr class="hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 transition-all duration-300">
                                <td class="py-4 px-6">
                                    <span class="font-medium text-gray-900">#<?= $order['order_id'] ?></span>
                                </td>
                                <td class="py-4 px-6">
                                    <div>
                                        <p class="font-medium text-gray-900">User #<?= $order['user_id'] ?></p>
                                        <p class="text-sm text-gray-600"><?= $order['user_id'] ?></p>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <?php if ($order['rider_id']): ?>
                                        <div>
                                            <p class="font-medium text-gray-900">Rider #<?= $order['rider_id'] ?></p>
                                            <p class="text-sm text-gray-600"><?= $order['rider_id'] ?></p>
                                        </div>
                                    <?php else: ?>
                                        <span class="text-gray-400">Unassigned</span>
                                    <?php endif; ?>
                                </td>
                                <td class="py-4 px-6">
                                    <p class="text-sm text-gray-900"><?= $order['pickup_location'] ?></p>
                                </td>
                                <td class="py-4 px-6">
                                    <p class="text-sm text-gray-900"><?= $order['delivery_location'] ?></p>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="font-medium text-gray-900">$<?= number_format($order['amount'], 2) ?></span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                        <?= $order['status'] === 'delivered' ? 'bg-gradient-to-r from-green-100 to-green-200 text-green-800' : 
                                            ($order['status'] === 'picked_up' ? 'bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800' : 
                                            ($order['status'] === 'accepted' ? 'bg-gradient-to-r from-yellow-100 to-yellow-200 text-yellow-800' : 
                                            ($order['status'] === 'canceled' ? 'bg-gradient-to-r from-red-100 to-red-200 text-red-800' : 
                                            'bg-gradient-to-r from-gray-100 to-gray-200 text-gray-800'))) ?>">
                                        <?= ucfirst(str_replace('_', ' ', $order['status'])) ?>
                                    </span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                        <?= $order['payment_status'] === 'paid' ? 'bg-gradient-to-r from-green-100 to-green-200 text-green-800' : 
                                            ($order['payment_status'] === 'unpaid' ? 'bg-gradient-to-r from-red-100 to-red-200 text-red-800' : 
                                            'bg-gradient-to-r from-yellow-100 to-yellow-200 text-yellow-800') ?>">
                                        <?= ucfirst($order['payment_status']) ?>
                                    </span>
                                </td>
                                <td class="py-4 px-6">
                                    <p class="text-sm text-gray-600"><?= date('M j, Y', strtotime($order['created_at'])) ?></p>
                                    <p class="text-xs text-gray-400"><?= date('g:i A', strtotime($order['created_at'])) ?></p>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center space-x-2">
                                        <a href="<?= base_url('orders/view/' . $order['id']) ?>" 
                                           class="text-blue-600 hover:text-blue-700" title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <button onclick="updateOrderStatus(<?= $order['id'] ?>)" 
                                                class="text-green-600 hover:text-green-700" title="Update Status">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <?php if (!$order['rider_id']): ?>
                                            <button onclick="assignRider(<?= $order['id'] ?>)" 
                                                    class="text-orange-600 hover:text-orange-700" title="Assign Rider">
                                                <i class="fas fa-user-plus"></i>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="10" class="text-center py-12">
                                <div class="w-16 h-16 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-inbox text-gray-400 text-2xl"></i>
                                </div>
                                <p class="text-gray-600 font-medium">No orders found</p>
                                <p class="text-sm text-gray-500">Try adjusting your filters or create a new order</p>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Status Update Modal -->
<div id="statusModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden z-50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-2xl shadow-xl max-w-md w-full">
            <div class="p-8">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold text-gray-900">Update Order Status</h3>
                    <button onclick="closeStatusModal()" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <form id="statusForm">
                    <input type="hidden" id="orderId" name="order_id">
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                        <select id="statusSelect" name="status" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                            <option value="pending">Pending</option>
                            <option value="accepted">Accepted</option>
                            <option value="picked_up">Picked Up</option>
                            <option value="delivered">Delivered</option>
                            <option value="canceled">Canceled</option>
                        </select>
                    </div>
                    <div id="reasonField" class="mb-6 hidden">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Cancel Reason</label>
                        <textarea name="reason" rows="3" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"></textarea>
                    </div>
                    <div class="flex items-center justify-end space-x-3">
                        <button type="button" onclick="closeStatusModal()" class="px-6 py-3 text-gray-700 bg-gray-100 rounded-xl hover:bg-gray-200 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" class="px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-xl hover:from-blue-600 hover:to-purple-700 transition-all duration-300">
                            Update Status
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Assign Rider Modal -->
<div id="riderModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden z-50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-2xl shadow-xl max-w-md w-full">
            <div class="p-8">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold text-gray-900">Assign Rider</h3>
                    <button onclick="closeRiderModal()" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <form id="riderForm">
                    <input type="hidden" id="assignOrderId" name="order_id">
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Select Rider</label>
                        <select name="rider_id" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                            <option value="">Choose a rider...</option>
                            <?php foreach ($riders as $rider): ?>
                                <option value="<?= $rider['id'] ?>"><?= $rider['name'] ?> (<?= $rider['vehicle_type'] ?>)</option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="flex items-center justify-end space-x-3">
                        <button type="button" onclick="closeRiderModal()" class="px-6 py-3 text-gray-700 bg-gray-100 rounded-xl hover:bg-gray-200 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" class="px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-xl hover:from-blue-600 hover:to-purple-700 transition-all duration-300">
                            Assign Rider
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function updateOrderStatus(orderId) {
    document.getElementById('orderId').value = orderId;
    document.getElementById('statusModal').classList.remove('hidden');
}

function closeStatusModal() {
    document.getElementById('statusModal').classList.add('hidden');
    document.getElementById('statusForm').reset();
}

function assignRider(orderId) {
    document.getElementById('assignOrderId').value = orderId;
    document.getElementById('riderModal').classList.remove('hidden');
}

function closeRiderModal() {
    document.getElementById('riderModal').classList.add('hidden');
    document.getElementById('riderForm').reset();
}

// Status form submission
document.getElementById('statusForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    
    fetch('<?= base_url('orders/updateStatus') ?>', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            closeStatusModal();
            location.reload();
        } else {
            alert('Error: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while updating the order status');
    });
});

// Rider form submission
document.getElementById('riderForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    
    fetch('<?= base_url('orders/assignRider') ?>', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            closeRiderModal();
            location.reload();
        } else {
            alert('Error: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while assigning the rider');
    });
});

// Show/hide reason field based on status
document.getElementById('statusSelect').addEventListener('change', function() {
    const reasonField = document.getElementById('reasonField');
    if (this.value === 'canceled') {
        reasonField.classList.remove('hidden');
    } else {
        reasonField.classList.add('hidden');
    }
});

// Close modals when clicking outside
document.getElementById('statusModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeStatusModal();
    }
});

document.getElementById('riderModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeRiderModal();
    }
});
</script> 