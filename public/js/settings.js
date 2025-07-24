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
    
    fetch(baseUrl + 'settings/update', {
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