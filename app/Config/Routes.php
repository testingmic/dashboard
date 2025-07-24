<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Api;

/**
 * @var RouteCollection $routes
 */
$routes->set404Override("\App\Controllers\BaseRoute::control");

// Dashboard routes
$routes->get('/', 'Frontend\Dashboard::index');
$routes->get('login', 'Frontend\Dashboard::login');
$routes->get('dashboard', 'Frontend\Dashboard::index');
$routes->get('dashboard/getRealTimeData', 'Frontend\Dashboard::getRealTimeData');

// Orders routes
$routes->get('orders', 'Frontend\Orders::index');
$routes->get('orders/view/(:num)', 'Frontend\Orders::view/$1');
$routes->post('orders/updateStatus', 'Frontend\Orders::updateStatus');
$routes->post('orders/assignRider', 'Frontend\Orders::assignRider');
$routes->get('orders/export', 'Frontend\Orders::export');
$routes->get('orders/getOrderStats', 'Frontend\Orders::getOrderStats');

// Users routes
$routes->get('users', 'Frontend\Users::index');
$routes->get('users/view/(:num)', 'Frontend\Users::view/$1');
$routes->get('users/analytics', 'Frontend\Users::analytics');

// Riders routes
$routes->get('riders', 'Frontend\Riders::index');
$routes->get('riders/view/(:num)', 'Frontend\Riders::view/$1');
$routes->get('riders/analytics', 'Frontend\Riders::analytics');

// Revenue routes
$routes->get('revenue', 'Frontend\Revenue::index');
$routes->get('revenue/analytics', 'Frontend\Revenue::analytics');

// Geospatial routes
$routes->get('geospatial', 'Frontend\Geospatial::index');

// Performance routes
$routes->get('performance', 'Frontend\Performance::index');

// Feedback routes
$routes->get('feedback', 'Frontend\Feedback::index');

// Settings routes
$routes->get('settings', 'Frontend\Settings::index');

// Reports routes
$routes->get('reports', 'Frontend\Reports::index');
$routes->get('reports/generate', 'Frontend\Reports::generate');

// request to api routing
$routes->get("/api", [Api::class, "index"]);

// request to api routing
$routes->match(["PUT", "DELETE", "GET", "POST", "OPTIONS"], "/api(:any)", [Api::class, "index/$1/$2/$3"]);
