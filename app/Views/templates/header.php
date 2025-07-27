<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Wekada Analytics Dashboard' ?></title>
    <meta name="description" content="Wekada Analytics Dashboard">
    <meta name="keywords" content="Wekada, Analytics, Dashboard, Delivery, Logistics">
    <link rel="icon" href="<?= base_url('images/logo.png') ?>" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom styles for enhanced UI */

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
        }
        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            border-radius: 3px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #2563eb, #7c3aed);
        }
        
        /* Gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Animated gradient background */
        .animated-gradient {
            background: linear-gradient(-45deg, #3b82f6, #8b5cf6, #ec4899, #3b82f6);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        /* Glass morphism effect */
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        /* Pulse animation for live indicators */
        .pulse-live {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        
        /* Mobile sidebar styles */
        @media (max-width: 1023px) {
            .sidebar-mobile {
                transform: translateX(-100%);
            }
            
            .sidebar-mobile.open {
                transform: translateX(0);
            }
            
            .sidebar-overlay {
                opacity: 0;
                visibility: hidden;
                transition: opacity 0.3s ease, visibility 0.3s ease;
            }
            
            .sidebar-overlay.open {
                opacity: 1;
                visibility: visible;
            }
        }
        
        /* Prevent body scroll when sidebar is open on mobile */
        body.sidebar-open {
            overflow: hidden;
        }
    </style>
    <script>
        const baseUrl = "<?= base_url() ?>";
        const arrayStream = {
            'feedbackData' : <?= json_encode($feedback ?? []) ?>,
            'revenueChart': <?= json_encode($revenueChart ?? []) ?>,
            'rejectionReasons': <?= json_encode($rejectionReasons ?? []) ?>,
            'chartData': <?= json_encode($chartData ?? []) ?>,
            'stats': <?= json_encode($stats ?? []) ?>,
            'highCancellationAreas': <?= json_encode($highCancellationAreas ?? []) ?>,
        };
    </script>
    <script src="<?= base_url('js/app.js') ?>"></script>
</head>
<body class="bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 min-h-screen">
    <!--                 -->
    <div class="fixed inset-0 bg-black bg-opacity-50 z-40 sidebar-overlay lg:hidden" id="sidebar-overlay"></div>
    
    <!-- Sidebar -->
    <div class="fixed inset-y-0 left-0 z-50 w-64 bg-gradient-to-b from-white to-gray-50 shadow-2xl sidebar-transition sidebar-mobile lg:translate-x-0" id="sidebar">
        <div class="flex flex-col h-full">
            <!-- Logo Section -->
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10  rounded-xl flex items-center justify-center">
                        <img src="<?= base_url('images/logo.png') ?>" alt="Wekada Logo" class="w-10 h-10">
                    </div>
                    <div>
                        <h1 class="text-xl font-bold gradient-text">Wekada</h1>
                        <p class="text-xs text-gray-500">Analytics Dashboard</p>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
                <a href="<?= base_url('dashboard') ?>" class="flex items-center space-x-3 px-4 py-4 rounded-xl transition-all duration-300 <?= $page === 'dashboard' ? 'bg-gradient-to-r from-blue-500 to-purple-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 active:bg-blue-50' ?>" onclick="closeMobileSidebar()">
                    <i class="fas fa-tachometer-alt w-5 text-lg"></i>
                    <span class="font-medium">Dashboard</span>
                </a>
                
                <a href="<?= base_url('performance') ?>" class="flex items-center space-x-3 px-4 py-4 rounded-xl transition-all duration-300 <?= $page === 'performance' ? 'bg-gradient-to-r from-blue-500 to-purple-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 active:bg-blue-50' ?>" onclick="closeMobileSidebar()">
                    <i class="fas fa-chart-line w-5 text-lg"></i>
                    <span class="font-medium">Performance</span>
                </a>
                
                <a href="<?= base_url('users') ?>" class="flex items-center space-x-3 px-4 py-4 rounded-xl transition-all duration-300 <?= $page === 'users' ? 'bg-gradient-to-r from-blue-500 to-purple-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 active:bg-blue-50' ?>" onclick="closeMobileSidebar()">
                    <i class="fas fa-users w-5 text-lg"></i>
                    <span class="font-medium">Users</span>
                </a>
                
                <a href="<?= base_url('riders') ?>" class="flex items-center space-x-3 px-4 py-4 rounded-xl transition-all duration-300 <?= $page === 'riders' ? 'bg-gradient-to-r from-blue-500 to-purple-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 active:bg-blue-50' ?>" onclick="closeMobileSidebar()">
                    <i class="fas fa-motorcycle w-5 text-lg"></i>
                    <span class="font-medium">Riders</span>
                </a>
                
                <a href="<?= base_url('revenue') ?>" class="flex items-center space-x-3 px-4 py-4 rounded-xl transition-all duration-300 <?= $page === 'revenue' ? 'bg-gradient-to-r from-blue-500 to-purple-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 active:bg-blue-50' ?>" onclick="closeMobileSidebar()">
                    <i class="fas fa-dollar-sign w-5 text-lg"></i>
                    <span class="font-medium">Revenue</span>
                </a>
                
                <a href="<?= base_url('geospatial') ?>" class="flex items-center space-x-3 px-4 py-4 rounded-xl transition-all duration-300 <?= $page === 'geospatial' ? 'bg-gradient-to-r from-blue-500 to-purple-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 active:bg-blue-50' ?>" onclick="closeMobileSidebar()">
                    <i class="fas fa-map-marker-alt w-5 text-lg"></i>
                    <span class="font-medium">Geospatial</span>
                </a>
                
                <a href="<?= base_url('feedback') ?>" class="flex items-center space-x-3 px-4 py-4 rounded-xl transition-all duration-300 <?= $page === 'feedback' ? 'bg-gradient-to-r from-blue-500 to-purple-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 active:bg-blue-50' ?>" onclick="closeMobileSidebar()">
                    <i class="fas fa-star w-5 text-lg"></i>
                    <span class="font-medium">Feedback</span>
                </a>
                
                <a href="<?= base_url('settings') ?>" class="flex items-center space-x-3 px-4 py-4 rounded-xl transition-all duration-300 <?= $page === 'settings' ? 'bg-gradient-to-r from-blue-500 to-purple-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 active:bg-blue-50' ?>" onclick="closeMobileSidebar()">
                    <i class="fas fa-cog w-5 text-lg"></i>
                    <span class="font-medium">Settings</span>
                </a>
                
                <a href="<?= base_url('reports') ?>" class="flex items-center space-x-3 px-4 py-4 rounded-xl transition-all duration-300 <?= $page === 'reports' ? 'bg-gradient-to-r from-blue-500 to-purple-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 active:bg-blue-50' ?>" onclick="closeMobileSidebar()">
                    <i class="fas fa-file-alt w-5 text-lg"></i>
                    <span class="font-medium">Reports</span>
                </a>
            </nav>

            <!-- User Section -->
            <div class="p-4 border-t border-gray-200">
                <div class="flex items-center space-x-3 p-3 bg-gradient-to-r from-blue-50 to-purple-50 rounded-xl">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center">
                        <span class="text-white font-bold">A</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900">Admin User</p>
                        <p class="text-xs text-gray-500">Administrator</p>
                    </div>
                    <button class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Close Button -->
            <div class="p-4 lg:hidden">
                <button id="sidebar-close" class="w-full px-4 py-3 bg-gradient-to-r from-red-500 to-red-600 text-white rounded-xl hover:from-red-600 hover:to-red-700 transition-all duration-300 font-medium">
                    <i class="fas fa-times mr-2"></i>Close Menu
                </button>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="lg:ml-64">
        <!-- Top navigation -->
        <header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-40">
            <div class="flex items-center justify-between px-6 py-4">
                <div class="flex items-center space-x-4">
                    <button id="sidebar-toggle" class="lg:hidden p-2 rounded-lg text-gray-600 hover:bg-gray-100 transition-colors">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="block lg:hidden">
                        <h1 class="text-xl font-bold gradient-text"><?= $title ?? 'Dashboard' ?></h1>
                    </div>
                    <div class="hidden lg:block">
                        <h1 class="text-2xl font-bold gradient-text"><?= $title ?? 'Dashboard' ?></h1>
                    </div>
                </div>
                
                <div class="flex items-center space-x-4">
                    <!-- Notifications -->
                    <button class="relative p-2 text-gray-600 hover:text-gray-900 transition-colors">
                        <i class="fas fa-bell text-lg"></i>
                        <span class="absolute top-0 right-0 w-3 h-3 bg-gradient-to-r from-red-500 to-pink-500 rounded-full"></span>
                    </button>
                    
                    <!-- Live Status -->
                    <div class="hidden md:flex items-center space-x-2 px-3 py-1 bg-gradient-to-r from-green-100 to-green-200 rounded-full">
                        <div class="w-2 h-2 bg-green-500 rounded-full pulse-live"></div>
                        <span class="text-xs font-medium text-green-800">Live</span>
                    </div>
                    
                    <!-- User Menu -->
                    <div class="relative">
                        <button class="flex items-center space-x-2 p-2 rounded-lg hover:bg-gray-100 transition-colors">
                            <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm font-bold">A</span>
                            </div>
                            <span class="hidden md:block text-sm font-medium text-gray-700">Admin</span>
                            <i class="fas fa-chevron-down text-xs text-gray-500"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Page content -->
        <main class="p-6"> 