<!-- Settings & Configuration -->
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-gray-900">Settings & Configuration</h2>
            <p class="text-gray-600">Manage platform settings and business rules</p>
        </div>
        <button onclick="saveAllSettings()" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
            <i class="fas fa-save mr-2"></i>Save All Changes
        </button>
    </div>

    <!-- Settings Tabs -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200">
        <div class="border-b border-gray-200">
            <nav class="flex space-x-8 px-6" aria-label="Tabs">
                <button onclick="showTab('general')" id="general-tab" class="tab-button active py-4 px-1 border-b-2 border-blue-500 font-medium text-sm text-blue-600">
                    General Settings
                </button>
                <button onclick="showTab('commission')" id="commission-tab" class="tab-button py-4 px-1 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700">
                    Commission Rates
                </button>
                <button onclick="showTab('pricing')" id="pricing-tab" class="tab-button py-4 px-1 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700">
                    Pricing Algorithm
                </button>
                <button onclick="showTab('notifications')" id="notifications-tab" class="tab-button py-4 px-1 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700">
                    Notifications
                </button>
            </nav>
        </div>

        <!-- General Settings Tab -->
        <div id="general-tab-content" class="tab-content p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">General Platform Settings</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Platform Name</label>
                    <input type="text" name="platform_name" value="<?= $settings['platform_name'] ?? 'Wekada' ?>" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Support Email</label>
                    <input type="email" name="support_email" value="<?= $settings['support_email'] ?? 'support@wekada.com' ?>" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Default Currency</label>
                    <select name="default_currency" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="USD" <?= ($settings['default_currency'] ?? 'USD') === 'USD' ? 'selected' : '' ?>>USD ($)</option>
                        <option value="EUR" <?= ($settings['default_currency'] ?? 'USD') === 'EUR' ? 'selected' : '' ?>>EUR (€)</option>
                        <option value="GBP" <?= ($settings['default_currency'] ?? 'USD') === 'GBP' ? 'selected' : '' ?>>GBP (£)</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Time Zone</label>
                    <select name="timezone" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="UTC" <?= ($settings['timezone'] ?? 'UTC') === 'UTC' ? 'selected' : '' ?>>UTC</option>
                        <option value="America/New_York" <?= ($settings['timezone'] ?? 'UTC') === 'America/New_York' ? 'selected' : '' ?>>Eastern Time</option>
                        <option value="America/Chicago" <?= ($settings['timezone'] ?? 'UTC') === 'America/Chicago' ? 'selected' : '' ?>>Central Time</option>
                        <option value="America/Denver" <?= ($settings['timezone'] ?? 'UTC') === 'America/Denver' ? 'selected' : '' ?>>Mountain Time</option>
                        <option value="America/Los_Angeles" <?= ($settings['timezone'] ?? 'UTC') === 'America/Los_Angeles' ? 'selected' : '' ?>>Pacific Time</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Maximum Order Value</label>
                    <input type="number" name="max_order_value" value="<?= $settings['max_order_value'] ?? '1000' ?>" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Minimum Order Value</label>
                    <input type="number" name="min_order_value" value="<?= $settings['min_order_value'] ?? '5' ?>" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>
        </div>

        <!-- Commission Rates Tab -->
        <div id="commission-tab-content" class="tab-content p-6 hidden">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Commission Rates by City</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div>
                        <h4 class="font-medium text-gray-900">New York</h4>
                        <p class="text-sm text-gray-600">High demand area</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <input type="number" name="commission_ny" value="15" min="0" max="50" step="0.1" 
                               class="w-20 px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <span class="text-sm text-gray-600">%</span>
                    </div>
                </div>
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div>
                        <h4 class="font-medium text-gray-900">Los Angeles</h4>
                        <p class="text-sm text-gray-600">Medium demand area</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <input type="number" name="commission_la" value="12" min="0" max="50" step="0.1" 
                               class="w-20 px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <span class="text-sm text-gray-600">%</span>
                    </div>
                </div>
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div>
                        <h4 class="font-medium text-gray-900">Chicago</h4>
                        <p class="text-sm text-gray-600">Medium demand area</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <input type="number" name="commission_chicago" value="10" min="0" max="50" step="0.1" 
                               class="w-20 px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <span class="text-sm text-gray-600">%</span>
                    </div>
                </div>
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div>
                        <h4 class="font-medium text-gray-900">Default Rate</h4>
                        <p class="text-sm text-gray-600">For all other cities</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <input type="number" name="commission_default" value="8" min="0" max="50" step="0.1" 
                               class="w-20 px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <span class="text-sm text-gray-600">%</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pricing Algorithm Tab -->
        <div id="pricing-tab-content" class="tab-content p-6 hidden">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Delivery Pricing Algorithm</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Base Delivery Fee</label>
                    <input type="number" name="base_delivery_fee" value="<?= $settings['base_delivery_fee'] ?? '5.00' ?>" step="0.01" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Per Mile Rate</label>
                    <input type="number" name="per_mile_rate" value="<?= $settings['per_mile_rate'] ?? '2.50' ?>" step="0.01" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Surge Pricing Multiplier</label>
                    <input type="number" name="surge_multiplier" value="<?= $settings['surge_multiplier'] ?? '1.5' ?>" step="0.1" min="1" max="3" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Peak Hours Start</label>
                    <input type="time" name="peak_hours_start" value="<?= $settings['peak_hours_start'] ?? '17:00' ?>" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Peak Hours End</label>
                    <input type="time" name="peak_hours_end" value="<?= $settings['peak_hours_end'] ?? '20:00' ?>" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Weekend Surcharge</label>
                    <input type="number" name="weekend_surcharge" value="<?= $settings['weekend_surcharge'] ?? '2.00' ?>" step="0.01" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>
        </div>

        <!-- Notifications Tab -->
        <div id="notifications-tab-content" class="tab-content p-6 hidden">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Notification Settings</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div>
                        <h4 class="font-medium text-gray-900">Email Notifications</h4>
                        <p class="text-sm text-gray-600">Receive notifications via email</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="email_notifications" value="1" checked class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div>
                        <h4 class="font-medium text-gray-900">SMS Notifications</h4>
                        <p class="text-sm text-gray-600">Receive notifications via SMS</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="sms_notifications" value="1" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div>
                        <h4 class="font-medium text-gray-900">Push Notifications</h4>
                        <p class="text-sm text-gray-600">Receive push notifications in dashboard</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="push_notifications" value="1" checked class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function showTab(tabName) {
    // Hide all tab contents
    document.querySelectorAll('.tab-content').forEach(content => {
        content.classList.add('hidden');
    });
    
    // Remove active class from all tab buttons
    document.querySelectorAll('.tab-button').forEach(button => {
        button.classList.remove('active', 'border-blue-500', 'text-blue-600');
        button.classList.add('border-transparent', 'text-gray-500');
    });
    
    // Show selected tab content
    document.getElementById(tabName + '-tab-content').classList.remove('hidden');
    
    // Add active class to selected tab button
    document.getElementById(tabName + '-tab').classList.add('active', 'border-blue-500', 'text-blue-600');
    document.getElementById(tabName + '-tab').classList.remove('border-transparent', 'text-gray-500');
}

function saveAllSettings() {
    const formData = new FormData();
    
    // Collect all form inputs
    document.querySelectorAll('input, select').forEach(input => {
        if (input.name) {
            if (input.type === 'checkbox') {
                formData.append(input.name, input.checked ? '1' : '0');
            } else {
                formData.append(input.name, input.value);
            }
        }
    });
    
    // Show loading state
    const saveButton = event.target;
    const originalText = saveButton.innerHTML;
    saveButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Saving...';
    saveButton.disabled = true;
    
    fetch('<?= base_url('settings/update') ?>', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Show success message
            showNotification('Settings saved successfully!', 'success');
        } else {
            showNotification('Error: ' + data.message, 'error');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showNotification('An error occurred while saving settings', 'error');
    })
    .finally(() => {
        // Restore button state
        saveButton.innerHTML = originalText;
        saveButton.disabled = false;
    });
}

function showNotification(message, type) {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 p-4 rounded-lg shadow-lg z-50 ${
        type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
    }`;
    notification.innerHTML = `
        <div class="flex items-center">
            <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'} mr-2"></i>
            <span>${message}</span>
        </div>
    `;
    
    document.body.appendChild(notification);
    
    // Remove notification after 3 seconds
    setTimeout(() => {
        notification.remove();
    }, 3000);
}

// Initialize first tab
document.addEventListener('DOMContentLoaded', function() {
    showTab('general');
});
</script> 