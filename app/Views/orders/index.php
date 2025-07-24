<!-- Orders Management -->
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-gray-900">Orders Management</h2>
            <p class="text-gray-600">Manage and track all delivery orders</p>
        </div>
        <div class="flex items-center space-x-3">
            <a href="<?= base_url('orders/export') ?>" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                <i class="fas fa-download mr-2"></i>Export CSV
            </a>
            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                <i class="fas fa-plus mr-2"></i>New Order
            </button>
        </div>
    </div>

    <!-- Filters -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Filters</h3>
        <form method="GET" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Date From</label>
                <input type="date" name="date_from" value="<?= $filters['date_from'] ?? '' ?>" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Date To</label>
                <input type="date" name="date_to" value="<?= $filters['date_to'] ?? '' ?>" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select name="status" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
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
                <select name="payment_status" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">All Payment Statuses</option>
                    <option value="paid" <?= ($filters['payment_status'] ?? '') === 'paid' ? 'selected' : '' ?>>Paid</option>
                    <option value="unpaid" <?= ($filters['payment_status'] ?? '') === 'unpaid' ? 'selected' : '' ?>>Unpaid</option>
                    <option value="refunded" <?= ($filters['payment_status'] ?? '') === 'refunded' ? 'selected' : '' ?>>Refunded</option>
                </select>
            </div>
            <div class="md:col-span-2 lg:col-span-4 flex items-center space-x-3">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    <i class="fas fa-search mr-2"></i>Apply Filters
                </button>
                <a href="<?= base_url('orders') ?>" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
                    <i class="fas fa-times mr-2"></i>Clear Filters
                </a>
            </div>
        </form>
    </div>

    <!-- Orders Table -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="text-left py-4 px-6 font-medium text-gray-600">Order ID</th>
                        <th class="text-left py-4 px-6 font-medium text-gray-600">Customer</th>
                        <th class="text-left py-4 px-6 font-medium text-gray-600">Rider</th>
                        <th class="text-left py-4 px-6 font-medium text-gray-600">Pickup</th>
                        <th class="text-left py-4 px-6 font-medium text-gray-600">Delivery</th>
                        <th class="text-left py-4 px-6 font-medium text-gray-600">Amount</th>
                        <th class="text-left py-4 px-6 font-medium text-gray-600">Status</th>
                        <th class="text-left py-4 px-6 font-medium text-gray-600">Payment</th>
                        <th class="text-left py-4 px-6 font-medium text-gray-600">Created</th>
                        <th class="text-left py-4 px-6 font-medium text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php if (!empty($orders)): ?>
                        <?php foreach ($orders as $order): ?>
                            <tr class="hover:bg-gray-50">
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
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium
                                        <?= $order['status'] === 'delivered' ? 'bg-green-100 text-green-800' : 
                                            ($order['status'] === 'picked_up' ? 'bg-blue-100 text-blue-800' : 
                                            ($order['status'] === 'accepted' ? 'bg-yellow-100 text-yellow-800' : 
                                            ($order['status'] === 'canceled' ? 'bg-red-100 text-red-800' : 
                                            'bg-gray-100 text-gray-800'))) ?>">
                                        <?= ucfirst(str_replace('_', ' ', $order['status'])) ?>
                                    </span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium
                                        <?= $order['payment_status'] === 'paid' ? 'bg-green-100 text-green-800' : 
                                            ($order['payment_status'] === 'unpaid' ? 'bg-red-100 text-red-800' : 
                                            'bg-yellow-100 text-yellow-800') ?>">
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
                                <div class="text-gray-500">
                                    <i class="fas fa-inbox text-4xl mb-4"></i>
                                    <p class="text-lg font-medium">No orders found</p>
                                    <p class="text-sm">Try adjusting your filters or create a new order</p>
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
<div id="statusModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden z-50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-xl shadow-lg max-w-md w-full">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Update Order Status</h3>
                <form id="statusForm">
                    <input type="hidden" id="orderId" name="order_id">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                        <select id="statusSelect" name="status" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="pending">Pending</option>
                            <option value="accepted">Accepted</option>
                            <option value="picked_up">Picked Up</option>
                            <option value="delivered">Delivered</option>
                            <option value="canceled">Canceled</option>
                        </select>
                    </div>
                    <div id="reasonField" class="mb-4 hidden">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Cancel Reason</label>
                        <textarea name="reason" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>
                    <div class="flex items-center justify-end space-x-3">
                        <button type="button" onclick="closeStatusModal()" class="px-4 py-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">
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

<!-- Assign Rider Modal -->
<div id="riderModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden z-50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-xl shadow-lg max-w-md w-full">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Assign Rider</h3>
                <form id="riderForm">
                    <input type="hidden" id="assignOrderId" name="order_id">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Select Rider</label>
                        <select name="rider_id" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Choose a rider...</option>
                            <?php foreach ($riders as $rider): ?>
                                <option value="<?= $rider['id'] ?>"><?= $rider['name'] ?> (<?= $rider['vehicle_type'] ?>)</option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="flex items-center justify-end space-x-3">
                        <button type="button" onclick="closeRiderModal()" class="px-4 py-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
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