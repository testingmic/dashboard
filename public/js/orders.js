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
    
    fetch(baseUrl + 'orders/updateStatus', {
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
    
    fetch(baseUrl + 'orders/assignRider', {
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