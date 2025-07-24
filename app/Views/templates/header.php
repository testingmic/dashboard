<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Wekada Analytics Dashboard' ?></title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Chart.js for analytics -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom styles -->
    <style>
        .sidebar-transition {
            transition: all 0.3s ease-in-out;
        }
        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Sidebar -->
    <div class="fixed inset-y-0 left-0 z-50 w-64 bg-white shadow-lg sidebar-transition" id="sidebar">
        <div class="flex items-center justify-between h-16 px-6 border-b border-gray-200">
            <div class="flex items-center">
                <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                    <i class="fas fa-chart-line text-white text-sm"></i>
                </div>
                <span class="ml-3 text-xl font-semibold text-gray-800">Wekada</span>
            </div>
            <button id="sidebar-toggle" class="text-gray-500 hover:text-gray-700 lg:hidden">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        
        <nav class="mt-6 px-4">
            <div class="space-y-2">
                <a href="<?= base_url('dashboard') ?>" 
                   class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-colors <?= $page === 'dashboard' ? 'bg-blue-50 text-blue-600' : '' ?>">
                    <i class="fas fa-tachometer-alt w-5 h-5"></i>
                    <span class="ml-3">Dashboard</span>
                </a>
                
                <a href="<?= base_url('orders') ?>" 
                   class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-colors <?= $page === 'orders' ? 'bg-blue-50 text-blue-600' : '' ?>">
                    <i class="fas fa-shopping-cart w-5 h-5"></i>
                    <span class="ml-3">Orders</span>
                </a>
                
                <a href="<?= base_url('users') ?>" 
                   class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-colors <?= $page === 'users' ? 'bg-blue-50 text-blue-600' : '' ?>">
                    <i class="fas fa-users w-5 h-5"></i>
                    <span class="ml-3">Users</span>
                </a>
                
                <a href="<?= base_url('riders') ?>" 
                   class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-colors <?= $page === 'riders' ? 'bg-blue-50 text-blue-600' : '' ?>">
                    <i class="fas fa-motorcycle w-5 h-5"></i>
                    <span class="ml-3">Riders</span>
                </a>
                
                <a href="<?= base_url('revenue') ?>" 
                   class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-colors <?= $page === 'revenue' ? 'bg-blue-50 text-blue-600' : '' ?>">
                    <i class="fas fa-dollar-sign w-5 h-5"></i>
                    <span class="ml-3">Revenue</span>
                </a>
                
                <a href="<?= base_url('geospatial') ?>" 
                   class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-colors <?= $page === 'geospatial' ? 'bg-blue-50 text-blue-600' : '' ?>">
                    <i class="fas fa-map-marker-alt w-5 h-5"></i>
                    <span class="ml-3">Geospatial</span>
                </a>
                
                <a href="<?= base_url('performance') ?>" 
                   class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-colors <?= $page === 'performance' ? 'bg-blue-50 text-blue-600' : '' ?>">
                    <i class="fas fa-chart-bar w-5 h-5"></i>
                    <span class="ml-3">Performance</span>
                </a>
                
                <a href="<?= base_url('feedback') ?>" 
                   class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-colors <?= $page === 'feedback' ? 'bg-blue-50 text-blue-600' : '' ?>">
                    <i class="fas fa-comments w-5 h-5"></i>
                    <span class="ml-3">Feedback</span>
                </a>
                
                <a href="<?= base_url('settings') ?>" 
                   class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-colors <?= $page === 'settings' ? 'bg-blue-50 text-blue-600' : '' ?>">
                    <i class="fas fa-cog w-5 h-5"></i>
                    <span class="ml-3">Settings</span>
                </a>
                
                <a href="<?= base_url('reports') ?>" 
                   class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-colors <?= $page === 'reports' ? 'bg-blue-50 text-blue-600' : '' ?>">
                    <i class="fas fa-file-alt w-5 h-5"></i>
                    <span class="ml-3">Reports</span>
                </a>
            </div>
        </nav>
    </div>

    <!-- Main content -->
    <div class="lg:ml-64">
        <!-- Top navigation -->
        <header class="bg-white shadow-sm border-b border-gray-200">
            <div class="flex items-center justify-between h-16 px-6">
                <div class="flex items-center">
                    <button id="mobile-sidebar-toggle" class="text-gray-500 hover:text-gray-700 lg:hidden mr-4">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1 class="text-xl font-semibold text-gray-800"><?= $title ?? 'Dashboard' ?></h1>
                </div>
                
                <div class="flex items-center space-x-4">
                    <!-- Notifications -->
                    <button class="relative p-2 text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                        <i class="fas fa-bell"></i>
                        <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                    </button>
                    
                    <!-- User menu -->
                    <div class="relative">
                        <button id="user-menu-button" class="flex items-center space-x-2 text-gray-700 hover:text-gray-900 transition-colors">
                            <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm font-medium">A</span>
                            </div>
                            <span class="hidden md:block">Admin</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        
                        <!-- Dropdown menu -->
                        <div id="user-menu-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 py-2">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Settings</a>
                            <hr class="my-2">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Page content -->
        <main class="p-6"> 