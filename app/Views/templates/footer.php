        </main>
    </div>

    <!-- JavaScript -->
    <script>
        // Sidebar toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const sidebarToggle = document.getElementById('sidebar-toggle');
            const sidebarClose = document.getElementById('sidebar-close');
            const sidebarOverlay = document.getElementById('sidebar-overlay');
            const userMenuButton = document.getElementById('user-menu-button');
            const userMenuDropdown = document.getElementById('user-menu-dropdown');

            // Mobile sidebar toggle
            if (sidebarToggle) {
                sidebarToggle.addEventListener('click', function() {
                    sidebar.classList.add('open');
                    sidebarOverlay.classList.add('open');
                    document.body.classList.add('sidebar-open');
                });
            }

            // Mobile sidebar close
            if (sidebarClose) {
                sidebarClose.addEventListener('click', function() {
                    sidebar.classList.remove('open');
                    sidebarOverlay.classList.remove('open');
                    document.body.classList.remove('sidebar-open');
                });
            }

            // Close sidebar when clicking overlay
            if (sidebarOverlay) {
                sidebarOverlay.addEventListener('click', function() {
                    sidebar.classList.remove('open');
                    sidebarOverlay.classList.remove('open');
                    document.body.classList.remove('sidebar-open');
                });
            }

            // Close sidebar when pressing Escape key
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                    sidebar.classList.remove('open');
                    sidebarOverlay.classList.remove('open');
                    document.body.classList.remove('sidebar-open');
                }
            });

            // User menu dropdown
            if (userMenuButton && userMenuDropdown) {
                userMenuButton.addEventListener('click', function() {
                    userMenuDropdown.classList.toggle('hidden');
                });

                // Close dropdown when clicking outside
                document.addEventListener('click', function(event) {
                    if (!userMenuButton.contains(event.target) && !userMenuDropdown.contains(event.target)) {
                        userMenuDropdown.classList.add('hidden');
                    }
                });
            }

            // Real-time data updates
            function updateRealTimeData() {
                fetch('<?= base_url('dashboard/getRealTimeData') ?>')
                    .then(response => response.json())
                    .then(data => {
                        // Update active orders count
                        const activeOrdersElement = document.getElementById('active-orders-count');
                        if (activeOrdersElement && data.active_orders) {
                            activeOrdersElement.textContent = data.active_orders.length;
                        }

                        // Update online riders count
                        const onlineRidersElement = document.getElementById('online-riders-count');
                        if (onlineRidersElement && data.online_riders) {
                            onlineRidersElement.textContent = data.online_riders.length;
                        }

                        // Update recent activities
                        const activitiesContainer = document.getElementById('recent-activities');
                        if (activitiesContainer && data.recent_activities) {
                            // Update activities list
                            activitiesContainer.innerHTML = data.recent_activities.map(activity => 
                                `<div class="flex items-center space-x-3 py-2">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                                    <span class="text-sm text-gray-600">${activity.description}</span>
                                    <span class="text-xs text-gray-400">${activity.time}</span>
                                </div>`
                            ).join('');
                        }
                    })
                    .catch(error => console.error('Error fetching real-time data:', error));
            }

            // Update real-time data every 30 seconds
            setInterval(updateRealTimeData, 30000);

            // Initialize charts if they exist
            initializeCharts();
        });

        // Chart initialization function
        function initializeCharts() {
            // Revenue Chart
            const revenueChartCanvas = document.getElementById('revenue-chart');
            if (revenueChartCanvas) {
                const ctx = revenueChartCanvas.getContext('2d');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: <?= json_encode(array_column($revenueChart ?? [], 'date')) ?>,
                        datasets: [{
                            label: 'Revenue',
                            data: <?= json_encode(array_column($revenueChart ?? [], 'daily_revenue')) ?>,
                            borderColor: 'rgb(59, 130, 246)',
                            backgroundColor: 'rgba(59, 130, 246, 0.1)',
                            tension: 0.4,
                            fill: true
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                display: false
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    callback: function(value) {
                                        return '$' + value.toLocaleString();
                                    }
                                }
                            }
                        }
                    }
                });
            }

            // Order Status Chart
            const orderStatusCanvas = document.getElementById('order-status-chart');
            if (orderStatusCanvas) {
                const ctx = orderStatusCanvas.getContext('2d');
                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Pending', 'In Progress', 'Completed', 'Canceled'],
                        datasets: [{
                            data: [
                                <?= $orderStats['pending'] ?? 0 ?>,
                                <?= $orderStats['in_progress'] ?? 0 ?>,
                                <?= $orderStats['completed'] ?? 0 ?>,
                                <?= $orderStats['canceled'] ?? 0 ?>
                            ],
                            backgroundColor: [
                                '#F59E0B',
                                '#3B82F6',
                                '#10B981',
                                '#EF4444'
                            ]
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }
                });
            }
        }

        // Utility functions
        function formatCurrency(amount) {
            return new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD'
            }).format(amount);
        }

        function formatNumber(num) {
            return new Intl.NumberFormat('en-US').format(num);
        }

        function formatDate(dateString) {
            return new Date(dateString).toLocaleDateString('en-US', {
                year: 'numeric',
                month: 'short',
                day: 'numeric'
            });
        }

        function formatDateTime(dateString) {
            return new Date(dateString).toLocaleString('en-US', {
                year: 'numeric',
                month: 'short',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            });
        }

        // Export functions
        function exportToCSV(data, filename) {
            const csvContent = "data:text/csv;charset=utf-8," + data;
            const encodedUri = encodeURI(csvContent);
            const link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", filename);
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        function exportToExcel(data, filename) {
            // This would require a library like SheetJS
            console.log('Export to Excel functionality would be implemented here');
        }
    </script>
</body>
</html> 