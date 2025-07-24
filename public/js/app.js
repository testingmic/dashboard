function refreshData() {
    location.reload();
}

const RevenueHandler = {
    init() {
        this.initCharts();
    },
    initCharts() {
        
        if(!document.getElementById('revenue-trend-chart')) return;

        this.initRevenueTrendChart();
    },
    initRevenueTrendChart() {
        const revenueTrendCtx = document.getElementById('revenue-trend-chart').getContext('2d');

        const revenueTrendChart = new Chart(revenueTrendCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Revenue',
                    data: [45000, 52000, 48000, 61000, 55000, 67000, 72000, 68000, 75000, 82000, 78000, 85000],
                    borderColor: 'rgb(59, 130, 246)',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    tension: 0.4,
                    fill: true,
                    pointBackgroundColor: 'rgb(59, 130, 246)',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 6
                }, {
                    label: 'Commission',
                    data: [6750, 7800, 7200, 9150, 8250, 10050, 10800, 10200, 11250, 12300, 11700, 12750],
                    borderColor: 'rgb(236, 72, 153)',
                    backgroundColor: 'rgba(236, 72, 153, 0.1)',
                    tension: 0.4,
                    fill: false,
                    pointBackgroundColor: 'rgb(236, 72, 153)',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    mode: 'index',
                    intersect: false,
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.dataset.label + ': $' + context.parsed.y.toLocaleString();
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Revenue ($)'
                        },
                        ticks: {
                            callback: function(value) {
                                return '$' + value.toLocaleString();
                            }
                        }
                    }
                }
            }
        });

        // Payment Methods Chart
        const paymentMethodsCtx = document.getElementById('payment-methods-chart').getContext('2d');
        const paymentMethodsChart = new Chart(paymentMethodsCtx, {
            type: 'doughnut',
            data: {
                labels: ['Card Payments', 'Digital Wallet', 'Cash', 'Bank Transfer'],
                datasets: [{
                    data: [55, 30, 12, 3],
                    backgroundColor: [
                        'rgba(59, 130, 246, 0.8)',
                        'rgba(16, 185, 129, 0.8)',
                        'rgba(156, 163, 175, 0.8)',
                        'rgba(245, 158, 11, 0.8)'
                    ],
                    borderColor: [
                        '#3b82f6',
                        '#10b981',
                        '#9ca3af',
                        '#f59e0b'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom'
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                const percentage = ((context.parsed / total) * 100).toFixed(1);
                                return context.label + ': ' + percentage + '%';
                            }
                        }
                    }
                }
            }
        });

        // Trend period selector
        document.getElementById('trend-period').addEventListener('change', function() {
            const period = this.value;
            console.log('Trend period changed to:', period);
            // Here you would typically fetch new data from the server and update the chart
        });
    },
    exportRevenue() {
        // Get current filters
        const urlParams = new URLSearchParams(window.location.search);
        const exportUrl = baseUrl + 'revenue/export?' + urlParams.toString();
        
        // Create temporary link and trigger download
        const link = document.createElement('a');
        link.href = exportUrl;
        link.download = 'revenue_export.csv';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    },
    clearFilters() {
        window.location.href = baseUrl + 'revenue';
    }
}

const OverviewHandler = {
    init() {
        this.initCharts();
    },
    initCharts() {
        if(!document.getElementById('revenue-chart')) return;
        // Revenue Analytics Chart
        const revenueCtx = document.getElementById('revenue-chart').getContext('2d');
        const revenueChart = new Chart(revenueCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Revenue',
                    data: [42000, 48000, 52000, 58000, 62000, 68000, 72000, 78000, 82000, 88000, 92000, 98000],
                    borderColor: '#ec4899', // Pink
                    backgroundColor: 'rgba(236, 72, 153, 0.2)',
                    tension: 0.4,
                    fill: true,
                    pointBackgroundColor: '#ec4899',
                    pointBorderColor: '#ffffff',
                    pointBorderWidth: 3,
                    pointRadius: 8,
                    pointHoverRadius: 12,
                    borderWidth: 3
                }, {
                    label: 'Orders',
                    data: [850, 920, 980, 1050, 1120, 1180, 1250, 1320, 1380, 1450, 1520, 1580],
                    borderColor: '#06b6d4', // Cyan
                    backgroundColor: 'rgba(6, 182, 212, 0.1)',
                    tension: 0.4,
                    fill: false,
                    pointBackgroundColor: '#06b6d4',
                    pointBorderColor: '#ffffff',
                    pointBorderWidth: 3,
                    pointRadius: 6,
                    pointHoverRadius: 10,
                    borderWidth: 3,
                    yAxisID: 'y1'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    mode: 'index',
                    intersect: false,
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            padding: 20,
                            color: '#ffffff',
                            font: {
                                size: 12,
                                weight: 'bold'
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        titleColor: '#ffffff',
                        bodyColor: '#ffffff',
                        borderColor: '#ec4899',
                        borderWidth: 2,
                        cornerRadius: 12,
                        callbacks: {
                            label: function(context) {
                                if (context.datasetIndex === 0) {
                                    return 'Revenue: $' + context.parsed.y.toLocaleString();
                                } else {
                                    return 'Orders: ' + context.parsed.y.toLocaleString();
                                }
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        type: 'linear',
                        display: true,
                        position: 'left',
                        title: {
                            display: true,
                            text: 'Revenue ($)',
                            color: '#ffffff',
                            font: {
                                size: 14,
                                weight: 'bold'
                            }
                        },
                        ticks: {
                            color: '#ffffff',
                            callback: function(value) {
                                return '$' + (value / 1000) + 'k';
                            }
                        },
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)'
                        }
                    },
                    y1: {
                        type: 'linear',
                        display: true,
                        position: 'right',
                        title: {
                            display: true,
                            text: 'Orders',
                            color: '#ffffff',
                            font: {
                                size: 14,
                                weight: 'bold'
                            }
                        },
                        grid: {
                            drawOnChartArea: false,
                        },
                        ticks: {
                            color: '#ffffff',
                            callback: function(value) {
                                return value.toLocaleString();
                            }
                        }
                    },
                    x: {
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)'
                        },
                        ticks: {
                            color: '#ffffff'
                        }
                    }
                }
            }
        });

        if(!document.getElementById('order-status-chart')) return;

        // Order Analytics Chart
        const orderStatusCtx = document.getElementById('order-status-chart').getContext('2d');
        const orderStatusChart = new Chart(orderStatusCtx, {
            type: 'doughnut',
            data: {
                labels: ['Completed', 'In Progress', 'Pending', 'Cancelled'],
                datasets: [{
                    data: [65, 20, 12, 3],
                    backgroundColor: [
                        'rgba(34, 197, 94, 0.8)', // Green
                        'rgba(245, 158, 11, 0.8)', // Orange
                        'rgba(59, 130, 246, 0.8)', // Blue
                        'rgba(239, 68, 68, 0.8)'  // Red
                    ],
                    borderColor: [
                        '#22c55e',
                        '#f59e0b',
                        '#3b82f6',
                        '#ef4444'
                    ],
                    borderWidth: 3,
                    hoverOffset: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            usePointStyle: true,
                            padding: 20,
                            color: '#ffffff',
                            font: {
                                size: 12,
                                weight: 'bold'
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        titleColor: '#ffffff',
                        bodyColor: '#ffffff',
                        borderColor: '#ec4899',
                        borderWidth: 2,
                        cornerRadius: 12,
                        callbacks: {
                            label: function(context) {
                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                const percentage = ((context.parsed / total) * 100).toFixed(1);
                                return context.label + ': ' + context.parsed + ' (' + percentage + '%)';
                            }
                        }
                    }
                }
            }
        });

        // Revenue period selector
        document.getElementById('revenue-period').addEventListener('change', function() {
            const period = this.value;
            console.log('Revenue period changed to:', period);
            
            // Sample data for different periods
            const periodData = {
                '7': {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    revenue: [2800, 3200, 2900, 3500, 3800, 4200, 3900],
                    orders: [56, 64, 58, 70, 76, 84, 78]
                },
                '30': {
                    labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                    revenue: [18500, 19800, 21200, 22500],
                    orders: [370, 396, 424, 450]
                },
                '90': {
                    labels: ['Jan', 'Feb', 'Mar'],
                    revenue: [42000, 48000, 52000],
                    orders: [850, 920, 980]
                }
            };
            
            if (periodData[period] && typeof revenueChart !== 'undefined') {
                const data = periodData[period];
                revenueChart.data.labels = data.labels;
                revenueChart.data.datasets[0].data = data.revenue;
                revenueChart.data.datasets[1].data = data.orders;
                revenueChart.update();
            }
        });

        // Update data every 30 seconds
        setInterval(this.updateRealTimeData, 30000);
    
    },

    // Real-time data updates
    updateRealTimeData() {
        // Simulate real-time updates
        const onlineRidersElement = document.getElementById('online-riders-count');
        if (onlineRidersElement) {
            const currentCount = parseInt(onlineRidersElement.textContent.replace(/,/g, ''));
            const newCount = Math.max(0, currentCount + Math.floor(Math.random() * 3) - 1);
            onlineRidersElement.textContent = newCount.toLocaleString();
        }
    }
}

const FeedbackHandler = {
    init() {
        this.initCharts();
    },
    initCharts() {
        if(!document.getElementById('rating-chart')) return;
        // Rating Distribution Chart
        const ratingCtx = document.getElementById('rating-chart').getContext('2d');
        const ratingChart = new Chart(ratingCtx, {
            type: 'doughnut',
            data: {
                labels: ['5 Stars', '4 Stars', '3 Stars', '2 Stars', '1 Star'],
                datasets: [{
                    data: [45, 30, 15, 7, 3],
                    backgroundColor: [
                        '#10b981',
                        '#3b82f6',
                        '#f59e0b',
                        '#f97316',
                        '#ef4444'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });

        // Trends Chart
        const trendsCtx = document.getElementById('trends-chart').getContext('2d');
        const trendsChart = new Chart(trendsCtx, {
            type: 'line',
            data: {
                labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                datasets: [{
                    label: 'Feedback Volume',
                    data: [120, 150, 180, 140],
                    borderColor: '#3b82f6',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Number of Reviews'
                        }
                    }
                }
            }
        });
    },

    showFullComment(comment) {
        document.getElementById('commentContent').textContent = comment;
        document.getElementById('commentModal').classList.remove('hidden');
    },

    closeCommentModal() {
        document.getElementById('commentModal').classList.add('hidden');
    },

    flagFeedback(feedbackId) {
        if (confirm('Are you sure you want to flag this feedback?')) {
            // Implementation for flagging feedback
            console.log('Flagging feedback:', feedbackId);
        }
    },

    unflagFeedback(feedbackId) {
        if (confirm('Are you sure you want to unflag this feedback?')) {
            // Implementation for unflagging feedback
            console.log('Unflagging feedback:', feedbackId);
        }
    },

    exportFeedback() {
        const data = arrayStream.feedbackData;
        const csvContent = "data:text/csv;charset=utf-8," 
            + "Order ID,Rating,Comment,Type,Status,Created At\n"
            + data.map(row => {
                return `${row.order_id},${row.rating},"${row.comment}",${row.feedback_type},${row.is_flagged ? 'Flagged' : 'Normal'},${row.created_at}`;
            }).join("\n");
        
        const encodedUri = encodeURI(csvContent);
        const link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        link.setAttribute("download", "feedback_export.csv");
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    },

    clearFilters() {
        window.location.href = baseUrl + 'feedback';
    }
}

const PerformanceHandler = {
    init() {
        this.initCharts();
    },
    initCharts() {
        if(!document.getElementById('performance-chart')) return;
        // Performance Chart
        const performanceCtx = document.getElementById('performance-chart').getContext('2d');
        const performanceChart = new Chart(performanceCtx, {
            type: 'line',
            data: {
                labels: arrayStream.chartData['labels'],
                datasets: [{
                    label: 'Delivery Time (min)',
                    data: arrayStream.chartData['delivery_times'],
                    borderColor: '#3b82f6',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    tension: 0.4,
                    fill: true
                }, {
                    label: 'Pickup Time (min)',
                    data: arrayStream.chartData['pickup_times'],
                    borderColor: '#10b981',
                    backgroundColor: 'rgba(16, 185, 129, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Time (minutes)'
                        }
                    }
                }
            }
        });

        // Rejection Rate Chart
        const rejectionCtx = document.getElementById('rejection-chart').getContext('2d');
        const rejectionChart = new Chart(rejectionCtx, {
            type: 'doughnut',
            data: {
                labels: ['Completed', 'Rejected'],
                datasets: [{
                    data: [100 - arrayStream.stats['rejection_rate'], arrayStream.stats['rejection_rate']],
                    backgroundColor: ['#10b981', '#ef4444'],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });
    },
    exportRejectionData() {
        if(!document.getElementById('rejection-chart')) return;
        
        const data = arrayStream.rejectionReasons;
        const csvContent = "data:text/csv;charset=utf-8," 
            + "Reason,Count\n"
            + data.map(row => `${row.cancel_reason},${row.count}`).join("\n");
        
        const encodedUri = encodeURI(csvContent);
        const link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        link.setAttribute("download", "rejection_reasons.csv");
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }
}

const UsersHandler = {
    init() {
        this.initCharts();
    },
    initCharts() {
        if(!document.getElementById('user-registration-chart')) return;
        // User Registration Trend Chart
        const userRegistrationCtx = document.getElementById('user-registration-chart').getContext('2d');
        const userRegistrationChart = new Chart(userRegistrationCtx, {
            type: 'line',
            data: {
                labels: arrayStream.chartData['labels'],
                datasets: [{
                    label: 'New Users',
                    data: arrayStream.chartData['values'],
                    borderColor: 'rgb(99, 102, 241)',
                    backgroundColor: 'rgba(99, 102, 241, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: 'rgb(99, 102, 241)',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 6,
                    pointHoverRadius: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

        // User Activity Distribution Chart
        const userActivityCtx = document.getElementById('user-activity-chart').getContext('2d');
        const userActivityChart = new Chart(userActivityCtx, {
            type: 'doughnut',
            data: {
                labels: ['Power Users', 'Regular Users', 'Occasional Users', 'Inactive Users'],
                datasets: [{
                    data: [
                        arrayStream.stats['total_users'] * 0.15,
                        arrayStream.stats['total_users'] * 0.45,
                        arrayStream.stats['total_users'] * 0.25,
                        arrayStream.stats['total_users'] * 0.15
                    ],
                    backgroundColor: [
                        'rgba(34, 197, 94, 0.8)',
                        'rgba(59, 130, 246, 0.8)',
                        'rgba(249, 115, 22, 0.8)',
                        'rgba(239, 68, 68, 0.8)'
                    ],
                    borderColor: [
                        'rgb(34, 197, 94)',
                        'rgb(59, 130, 246)',
                        'rgb(249, 115, 22)',
                        'rgb(239, 68, 68)'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            padding: 20,
                            usePointStyle: true
                        }
                    }
                }
            }
        });
    }
}

const RidersHandler = {
    init() {
        this.initCharts();
    },
    initCharts() {
        if(!document.getElementById('rider-status-chart')) return;

        // Rider status form submission
        document.getElementById('riderStatusForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            
            fetch(baseUrl + 'riders/updateStatus', { method: 'POST', body: formData})
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    this.closeRiderStatusModal();
                    location.reload();
                } else { }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    },
    updateRiderStatus(riderId) {
        document.getElementById('riderId').value = riderId;
        document.getElementById('riderStatusModal').classList.remove('hidden');
    },

    closeRiderStatusModal() {
        document.getElementById('riderStatusModal').classList.add('hidden');
        document.getElementById('riderStatusForm').reset();
    },
}

const ReportsHandler = {
    init() {
        this.initCharts();
    },
    initCharts() {
        if(!document.getElementById('reportForm')) return;
        setTimeout(() => {
            document.getElementById('reportModal').classList.add('hidden');
        }, 3000);
        document.getElementById('reportForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const reportType = formData.get('report_type');
            const format = formData.get('format');
            
            if (!reportType) {
                alert('Please select a report type');
                return;
            }
            
            // Show loading modal
            document.getElementById('reportModal').classList.remove('hidden');
            
            if (format === 'csv') {
                // For CSV, redirect to download
                const params = new URLSearchParams(formData);
                window.location.href = baseUrl + 'reports/generate?' + params.toString();
            } else {
                // For JSON, fetch data
                fetch(baseUrl + 'reports/generate', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    document.getElementById('reportModal').classList.add('hidden');
                    if (data.success) {
                        // Display data in a modal or download
                        console.log('Report data:', data);
                        alert('Report generated successfully!');
                    } else {
                        alert('Error: ' + data.message);
                    }
                })
                .catch(error => {
                    document.getElementById('reportModal').classList.add('hidden');
                    console.error('Error:', error);
                    alert('An error occurred while generating the report');
                });
            }
        });
    },
    generateReport(reportType) {
        // Set default dates (last 30 days)
        const endDate = new Date().toISOString().split('T')[0];
        const startDate = new Date(Date.now() - 30 * 24 * 60 * 60 * 1000).toISOString().split('T')[0];
        
        document.getElementById('reportType').value = reportType;
        document.querySelector('input[name="start_date"]').value = startDate;
        document.querySelector('input[name="end_date"]').value = endDate;
        document.getElementById('reportForm').submit();
    }
}

// Initialize charts on page load
document.addEventListener('DOMContentLoaded', function() {
    RevenueHandler.init();
    OverviewHandler.init();
    FeedbackHandler.init();
    PerformanceHandler.init();
    UsersHandler.init();
    RidersHandler.init();
});

// Close modal when clicking outside
if(document.getElementById('riderStatusModal')) {
    document.getElementById('riderStatusModal').addEventListener('click', function(e) {
        if (e.target === this) {
            RidersHandler.closeRiderStatusModal();
        }
    });
}