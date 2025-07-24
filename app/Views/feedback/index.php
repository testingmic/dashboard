<!-- Feedback & Ratings -->
<div class="space-y-8">
    <!-- Page Header with Gradient -->
    <div class="relative overflow-hidden bg-gradient-to-r from-pink-600 via-purple-600 to-blue-600 rounded-2xl p-8 text-white">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Feedback & Ratings</h2>
                    <p class="text-pink-100 text-lg">Monitor customer satisfaction and service quality</p>
                </div>
                <div class="flex items-center space-x-3">
                    <button onclick="exportFeedback()" class="px-6 py-3 bg-white bg-opacity-20 backdrop-blur-sm text-white rounded-xl hover:bg-opacity-30 transition-all duration-300 border border-white border-opacity-30">
                        <i class="fas fa-download mr-2"></i>Export
                    </button>
                    <a href="<?= base_url('feedback/analytics') ?>" class="px-6 py-3 bg-white bg-opacity-20 backdrop-blur-sm text-white rounded-xl hover:bg-opacity-30 transition-all duration-300 border border-white border-opacity-30">
                        <i class="fas fa-chart-line mr-2"></i>Analytics
                    </a>
                </div>
            </div>
        </div>
        <!-- Decorative elements -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-5 rounded-full -translate-y-16 translate-x-16"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 bg-white opacity-5 rounded-full translate-y-12 -translate-x-12"></div>
    </div>

    <!-- Feedback Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Feedback -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-comments text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Total</span>
                    </div>
                </div>
                <p class="text-blue-100 text-sm font-medium mb-1">Total Feedback</p>
                <p class="text-3xl font-bold mb-2"><?= number_format($stats['total_feedback'] ?? 0) ?></p>
                <p class="text-xs text-blue-200">
                    <i class="fas fa-arrow-up mr-1"></i>All time reviews
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-blue-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Average Rating -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-yellow-400 to-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-star text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Avg</span>
                    </div>
                </div>
                <p class="text-yellow-100 text-sm font-medium mb-1">Average Rating</p>
                <p class="text-3xl font-bold mb-2"><?= number_format($stats['avg_rating'] ?? 0, 1) ?></p>
                <p class="text-xs text-yellow-200">
                    <i class="fas fa-star mr-1"></i>Out of 5 stars
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-orange-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Negative Feedback -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-red-500 to-red-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-red-400 to-red-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-exclamation-triangle text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Alert</span>
                    </div>
                </div>
                <p class="text-red-100 text-sm font-medium mb-1">Negative Feedback</p>
                <p class="text-3xl font-bold mb-2"><?= number_format($stats['negative_feedback'] ?? 0) ?></p>
                <p class="text-xs text-red-200">
                    <i class="fas fa-arrow-down mr-1"></i>Needs attention
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-red-700 to-transparent rounded-full opacity-20"></div>
        </div>

        <!-- Flagged Users -->
        <div class="group relative overflow-hidden bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl p-6 text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-400 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-flag text-white text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="text-xs bg-white bg-opacity-20 px-2 py-1 rounded-full">Flagged</span>
                    </div>
                </div>
                <p class="text-purple-100 text-sm font-medium mb-1">Flagged Users</p>
                <p class="text-3xl font-bold mb-2"><?= number_format($stats['flagged_users'] ?? 0) ?></p>
                <p class="text-xs text-purple-200">
                    <i class="fas fa-user-slash mr-1"></i>Under review
                </p>
            </div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-purple-700 to-transparent rounded-full opacity-20"></div>
        </div>
    </div>

    <!-- Filters Section -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Feedback Filters</h3>
                <p class="text-gray-600">Filter feedback by rating, date, and type</p>
            </div>
            <button onclick="clearFilters()" class="text-blue-600 hover:text-blue-700 text-sm font-medium bg-blue-50 px-4 py-2 rounded-xl hover:bg-blue-100 transition-colors">
                Clear Filters
            </button>
        </div>
        
        <form method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Rating</label>
                <select name="rating" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    <option value="">All Ratings</option>
                    <option value="5" <?= ($filters['rating'] ?? '') === '5' ? 'selected' : '' ?>>5 Stars</option>
                    <option value="4" <?= ($filters['rating'] ?? '') === '4' ? 'selected' : '' ?>>4 Stars</option>
                    <option value="3" <?= ($filters['rating'] ?? '') === '3' ? 'selected' : '' ?>>3 Stars</option>
                    <option value="2" <?= ($filters['rating'] ?? '') === '2' ? 'selected' : '' ?>>2 Stars</option>
                    <option value="1" <?= ($filters['rating'] ?? '') === '1' ? 'selected' : '' ?>>1 Star</option>
                </select>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Feedback Type</label>
                <select name="feedback_type" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    <option value="">All Types</option>
                    <option value="user" <?= ($filters['feedback_type'] ?? '') === 'user' ? 'selected' : '' ?>>User Feedback</option>
                    <option value="rider" <?= ($filters['feedback_type'] ?? '') === 'rider' ? 'selected' : '' ?>>Rider Feedback</option>
                </select>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Flagged Status</label>
                <select name="is_flagged" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    <option value="">All</option>
                    <option value="1" <?= ($filters['is_flagged'] ?? '') === '1' ? 'selected' : '' ?>>Flagged</option>
                    <option value="0" <?= ($filters['is_flagged'] ?? '') === '0' ? 'selected' : '' ?>>Not Flagged</option>
                </select>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Date Range</label>
                <select name="date_range" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    <option value="">All Time</option>
                    <option value="today" <?= ($filters['date_range'] ?? '') === 'today' ? 'selected' : '' ?>>Today</option>
                    <option value="week" <?= ($filters['date_range'] ?? '') === 'week' ? 'selected' : '' ?>>This Week</option>
                    <option value="month" <?= ($filters['date_range'] ?? '') === 'month' ? 'selected' : '' ?>>This Month</option>
                </select>
            </div>
            
            <div class="md:col-span-4">
                <button type="submit" class="w-full md:w-auto px-8 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-xl hover:from-blue-600 hover:to-purple-700 transition-all duration-300 font-medium">
                    <i class="fas fa-search mr-2"></i>Apply Filters
                </button>
            </div>
        </form>
    </div>

    <!-- Rating Distribution -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Rating Chart -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Rating Distribution</h3>
                    <p class="text-gray-600">Customer rating breakdown</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">Avg: <?= number_format($stats['avg_rating'] ?? 0, 1) ?></span>
                </div>
            </div>
            <div class="h-80">
                <canvas id="rating-chart"></canvas>
            </div>
        </div>

        <!-- Recent Feedback Trends -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Recent Trends</h3>
                    <p class="text-gray-600">Feedback volume over time</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">Last 30 days</span>
                </div>
            </div>
            <div class="h-80">
                <canvas id="trends-chart"></canvas>
            </div>
        </div>
    </div>

    <!-- Feedback Table -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
        <div class="flex items-center justify-between p-8 border-b border-gray-200">
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Feedback Records</h3>
                <p class="text-gray-600">Detailed customer feedback and ratings</p>
            </div>
            <div class="flex items-center space-x-3">
                <span class="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">
                    <?= count($feedback) ?> records
                </span>
                <button onclick="exportFeedback()" class="text-blue-600 hover:text-blue-700 text-sm font-medium bg-blue-50 px-4 py-2 rounded-xl hover:bg-blue-100 transition-colors">
                    <i class="fas fa-download mr-2"></i>Export
                </button>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-gradient-to-r from-gray-50 to-gray-100">
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Order ID</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Rating</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Comment</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Type</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Status</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Created At</th>
                        <th class="text-left py-4 px-6 font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($feedback)): ?>
                        <?php foreach ($feedback as $item): ?>
                            <tr class="border-b border-gray-100 hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 transition-all duration-300">
                                <td class="py-4 px-6">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                                            <i class="fas fa-receipt text-white text-sm"></i>
                                        </div>
                                        <span class="font-bold text-gray-900">#<?= $item['order_id'] ?></span>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center">
                                        <?php for ($i = 1; $i <= 5; $i++): ?>
                                            <i class="fas fa-star text-<?= $i <= $item['rating'] ? 'yellow' : 'gray' ?>-400 text-sm"></i>
                                        <?php endfor; ?>
                                        <span class="ml-2 font-medium text-gray-900"><?= $item['rating'] ?>/5</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="max-w-xs">
                                        <p class="text-sm text-gray-900 truncate"><?= $item['comment'] ?></p>
                                        <?php if (strlen($item['comment']) > 50): ?>
                                            <button onclick="showFullComment('<?= htmlspecialchars($item['comment']) ?>')" class="text-blue-600 hover:text-blue-700 text-xs">Read more</button>
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                        <?= $item['feedback_type'] === 'user' ? 'bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800' : 'bg-gradient-to-r from-green-100 to-green-200 text-green-800' ?>">
                                        <?= ucfirst($item['feedback_type']) ?>
                                    </span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                        <?= $item['is_flagged'] ? 'bg-gradient-to-r from-red-100 to-red-200 text-red-800' : 'bg-gradient-to-r from-green-100 to-green-200 text-green-800' ?>">
                                        <?= $item['is_flagged'] ? 'Flagged' : 'Normal' ?>
                                    </span>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="text-sm text-gray-600"><?= date('M d, Y H:i', strtotime($item['created_at'])) ?></span>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center space-x-2">
                                        <a href="<?= base_url('feedback/view/' . $item['id']) ?>" class="text-blue-600 hover:text-blue-700 p-1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <?php if ($item['is_flagged']): ?>
                                            <button onclick="unflagFeedback(<?= $item['id'] ?>)" class="text-green-600 hover:text-green-700 p-1">
                                                <i class="fas fa-flag"></i>
                                            </button>
                                        <?php else: ?>
                                            <button onclick="flagFeedback(<?= $item['id'] ?>)" class="text-red-600 hover:text-red-700 p-1">
                                                <i class="fas fa-flag"></i>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center py-12">
                                <div class="w-16 h-16 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-comments text-gray-400 text-2xl"></i>
                                </div>
                                <p class="text-gray-600 font-medium">No feedback data available</p>
                                <p class="text-sm text-gray-500">Customer feedback will appear here once available</p>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Feedback Insights -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Top Issues -->
        <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-2xl p-8 border border-red-200">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-gray-900">Top Issues</h3>
                <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-exclamation-triangle text-white"></i>
                </div>
            </div>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Late deliveries</span>
                    <span class="font-bold text-red-600">45%</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Poor communication</span>
                    <span class="font-bold text-red-600">32%</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Damaged items</span>
                    <span class="font-bold text-red-600">18%</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Rude riders</span>
                    <span class="font-bold text-red-600">5%</span>
                </div>
            </div>
        </div>

        <!-- Positive Feedback -->
        <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 border border-green-200">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-gray-900">Positive Highlights</h3>
                <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-thumbs-up text-white"></i>
                </div>
            </div>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Fast delivery</span>
                    <span class="font-bold text-green-600">78%</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Professional service</span>
                    <span class="font-bold text-green-600">65%</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Good communication</span>
                    <span class="font-bold text-green-600">58%</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-white bg-opacity-50 rounded-xl">
                    <span class="text-sm font-medium text-gray-700">Clean packaging</span>
                    <span class="font-bold text-green-600">42%</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Comment Modal -->
<div id="commentModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden z-50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-2xl p-8 max-w-2xl w-full">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-gray-900">Full Comment</h3>
                <button onclick="closeCommentModal()" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <div id="commentContent" class="text-gray-700 mb-6"></div>
            <div class="flex justify-end">
                <button onclick="closeCommentModal()" class="px-6 py-3 bg-gray-100 text-gray-700 rounded-xl hover:bg-gray-200 transition-colors">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<script>
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

function showFullComment(comment) {
    document.getElementById('commentContent').textContent = comment;
    document.getElementById('commentModal').classList.remove('hidden');
}

function closeCommentModal() {
    document.getElementById('commentModal').classList.add('hidden');
}

function flagFeedback(feedbackId) {
    if (confirm('Are you sure you want to flag this feedback?')) {
        // Implementation for flagging feedback
        console.log('Flagging feedback:', feedbackId);
    }
}

function unflagFeedback(feedbackId) {
    if (confirm('Are you sure you want to unflag this feedback?')) {
        // Implementation for unflagging feedback
        console.log('Unflagging feedback:', feedbackId);
    }
}

function exportFeedback() {
    const data = <?= json_encode($feedback ?? []) ?>;
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
}

function clearFilters() {
    window.location.href = '<?= base_url('feedback') ?>';
}

// Auto-refresh data every 5 minutes
setInterval(function() {
    console.log('Refreshing feedback data...');
}, 300000);
</script> 