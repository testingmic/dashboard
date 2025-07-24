// Delivery Pattern Chart
const deliveryPatternCtx = document.getElementById('delivery-pattern-chart').getContext('2d');
const deliveryPatternChart = new Chart(deliveryPatternCtx, {
    type: 'line',
    data: {
        labels: ['6AM', '8AM', '10AM', '12PM', '2PM', '4PM', '6PM', '8PM', '10PM'],
        datasets: [{
            label: 'Delivery Volume',
            data: [25, 45, 65, 120, 95, 75, 110, 85, 40],
            borderColor: 'rgb(59, 130, 246)',
            backgroundColor: 'rgba(59, 130, 246, 0.1)',
            tension: 0.4,
            fill: true,
            pointBackgroundColor: 'rgb(59, 130, 246)',
            pointBorderColor: '#fff',
            pointBorderWidth: 2,
            pointRadius: 6
        }, {
            label: 'Average Delivery Time',
            data: [18, 20, 22, 25, 23, 21, 24, 22, 19],
            borderColor: 'rgb(236, 72, 153)',
            backgroundColor: 'rgba(236, 72, 153, 0.1)',
            tension: 0.4,
            fill: false,
            pointBackgroundColor: 'rgb(236, 72, 153)',
            pointBorderColor: '#fff',
            pointBorderWidth: 2,
            pointRadius: 4,
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
                position: 'top'
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        if (context.datasetIndex === 0) {
                            return 'Orders: ' + context.parsed.y;
                        } else {
                            return 'Avg Time: ' + context.parsed.y + ' min';
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
                    text: 'Number of Orders'
                }
            },
            y1: {
                type: 'linear',
                display: true,
                position: 'right',
                title: {
                    display: true,
                    text: 'Delivery Time (minutes)'
                },
                grid: {
                    drawOnChartArea: false,
                },
            }
        }
    }
});

// Pattern period selector
document.getElementById('pattern-period').addEventListener('change', function() {
    const period = this.value;
    // Update chart data based on selected period
    console.log('Pattern period changed to:', period);
    // Here you would typically fetch new data from the server
});

function refreshMapData() {
    // Simulate refreshing map data
    fetch(baseUrl + 'geospatial/getRealTimeData')
        .then(response => response.json())
        .then(data => {
            document.getElementById('active-orders-count').textContent = data.active_orders?.length || 0;
            document.getElementById('online-riders-count').textContent = data.online_riders?.length || 0;
            console.log('Map data refreshed');
        })
        .catch(error => {
            console.error('Error refreshing map data:', error);
        });
}

function toggleFullscreen() {
    const mapContainer = document.getElementById('map');
    if (!document.fullscreenElement) {
        mapContainer.requestFullscreen();
    } else {
        document.exitFullscreen();
    }
}

function toggleHeatmap() {
    console.log('Toggle heatmap view');
    // Implementation for heatmap toggle
}

function toggleTraffic() {
    console.log('Toggle traffic view');
    // Implementation for traffic toggle
}

function exportCancellationData() {
    const data = arrayStream.highCancellationAreas;
    const csvContent = "data:text/csv;charset=utf-8," 
        + "Location,Total Orders,Canceled Orders,Cancellation Rate\n"
        + data.map(row => {
            const rate = (row.canceled_orders / row.total_orders) * 100;
            return `${row.pickup_location},${row.total_orders},${row.canceled_orders},${rate.toFixed(1)}%`;
        }).join("\n");
    
    const encodedUri = encodeURI(csvContent);
    const link = document.createElement("a");
    link.setAttribute("href", encodedUri);
    link.setAttribute("download", "cancellation_areas.csv");
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}

// Auto-refresh map data every 30 seconds
setInterval(refreshMapData, 30000);

// Initialize map data on page load
document.addEventListener('DOMContentLoaded', function() {
    refreshMapData();
});