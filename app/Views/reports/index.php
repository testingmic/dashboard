<!-- Custom Reports -->
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-gray-900">Custom Reports</h2>
            <p class="text-gray-600">Generate and export detailed reports for your business</p>
        </div>
    </div>

    <!-- Report Types Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Order Reports -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 card-hover">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-shopping-cart text-blue-600 text-xl"></i>
                </div>
                <span class="text-xs font-medium text-blue-600 bg-blue-50 px-2 py-1 rounded-full">Popular</span>
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Order Reports</h3>
            <p class="text-sm text-gray-600 mb-4">Detailed order information including status, payments, and delivery times</p>
            <button onclick="ReportsHandler.generateReport('orders')" class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                Generate Report
            </button>
        </div>

        <!-- Rider Reports -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 card-hover">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-motorcycle text-green-600 text-xl"></i>
                </div>
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Rider Activity Reports</h3>
            <p class="text-sm text-gray-600 mb-4">Rider performance metrics, earnings, and delivery statistics</p>
            <button onclick="ReportsHandler.generateReport('riders')" class="w-full px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                Generate Report
            </button>
        </div>

        <!-- Revenue Reports -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 card-hover">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-dollar-sign text-purple-600 text-xl"></i>
                </div>
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Revenue Reports</h3>
            <p class="text-sm text-gray-600 mb-4">Financial data including revenue, commissions, and payment methods</p>
            <button onclick="ReportsHandler.generateReport('revenue')" class="w-full px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition-colors">
                Generate Report
            </button>
        </div>

        <!-- User Reports -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 card-hover">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-users text-orange-600 text-xl"></i>
                </div>
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">User Reports</h3>
            <p class="text-sm text-gray-600 mb-4">Customer behavior, order history, and spending patterns</p>
            <button onclick="ReportsHandler.generateReport('users')" class="w-full px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700 transition-colors">
                Generate Report
            </button>
        </div>
    </div>

    <!-- Quick Report Generator -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Report Generator</h3>
        <form id="reportForm" class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Report Type</label>
                    <select id="reportType" name="report_type" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Select Report Type</option>
                        <?php foreach ($reportTypes as $key => $value): ?>
                            <option value="<?= $key ?>"><?= $value ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Start Date</label>
                    <input type="date" name="start_date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">End Date</label>
                    <input type="date" name="end_date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <label class="flex items-center">
                        <input type="radio" name="format" value="csv" checked class="text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-sm text-gray-700">CSV Export</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="format" value="json" class="text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-sm text-gray-700">JSON Data</span>
                    </label>
                </div>
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    <i class="fas fa-download mr-2"></i>Generate Report
                </button>
            </div>
        </form>
    </div>

    <!-- Recent Reports -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Recent Reports</h3>
        <div class="space-y-3">
            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-file-csv text-blue-600"></i>
                    </div>
                    <div>
                        <p class="font-medium text-gray-900">Orders Report - Dec 2024</p>
                        <p class="text-sm text-gray-600">Generated 2 hours ago</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-700">
                        <i class="fas fa-download"></i>
                    </button>
                    <button class="text-red-600 hover:text-red-700">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-file-csv text-green-600"></i>
                    </div>
                    <div>
                        <p class="font-medium text-gray-900">Rider Performance - Nov 2024</p>
                        <p class="text-sm text-gray-600">Generated 1 day ago</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-700">
                        <i class="fas fa-download"></i>
                    </button>
                    <button class="text-red-600 hover:text-red-700">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-file-csv text-purple-600"></i>
                    </div>
                    <div>
                        <p class="font-medium text-gray-900">Revenue Analysis - Q4 2024</p>
                        <p class="text-sm text-gray-600">Generated 3 days ago</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-700">
                        <i class="fas fa-download"></i>
                    </button>
                    <button class="text-red-600 hover:text-red-700">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Report Generation Modal -->
<div id="reportModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden z-50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-xl shadow-lg max-w-md w-full">
            <div class="p-6">
                <div class="flex items-center justify-center mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-spinner fa-spin text-blue-600 text-xl"></i>
                    </div>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 text-center mb-2">Generating Report</h3>
                <p class="text-sm text-gray-600 text-center">Please wait while we prepare your report...</p>
                <div class="mt-4">
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-600 h-2 rounded-full animate-pulse" style="width: 60%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
