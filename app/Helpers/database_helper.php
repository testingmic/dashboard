<?php
global $databases, $alterTables;

use CodeIgniter\Database\Exceptions\DatabaseException;

// Create the databases
$databases = [
    "CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        firstname VARCHAR(255) NOT NULL,
        lastname VARCHAR(255) NOT NULL,
        image TEXT DEFAULT '',
        status VARCHAR(255) DEFAULT 'Active',
        description TEXT DEFAULT '',
        two_factor_setup VARCHAR(255) DEFAULT 'no',
        twofactor_secret VARCHAR(255) DEFAULT '',
        user_type VARCHAR(255) DEFAULT 'Student',
        admin_access VARCHAR(255) DEFAULT 'no',
        date_registered DATETIME DEFAULT CURRENT_TIMESTAMP,
        nationality VARCHAR(255) DEFAULT '',
        gender VARCHAR(255) DEFAULT '',
        timezone VARCHAR(255) DEFAULT '',
        website VARCHAR(255) DEFAULT '',
        company VARCHAR(255) DEFAULT '',
        language VARCHAR(255) DEFAULT '',
        preferences TEXT DEFAULT '',
        job_title VARCHAR(255) DEFAULT '',
        skills TEXT DEFAULT '',
        rating INTEGER DEFAULT 0,
        reviewCount INTEGER DEFAULT 0,
        students_count INTEGER DEFAULT 0,
        coursesCount INTEGER DEFAULT 0,
        last_login DATETIME DEFAULT NULL,
        date_of_birth DATETIME DEFAULT '',
        phone VARCHAR(255) DEFAULT '',
        billing_address TEXT DEFAULT '',
        permissions TEXT DEFAULT '',
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        social_links TEXT DEFAULT ''
    );
    CREATE INDEX IF NOT EXISTS idx_users_username ON users (username);
    CREATE INDEX IF NOT EXISTS idx_users_email ON users (email);
    CREATE INDEX IF NOT EXISTS idx_users_status ON users (status);
    CREATE INDEX IF NOT EXISTS idx_users_user_type ON users (user_type);",
    "CREATE TABLE IF NOT EXISTS orders (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        order_id VARCHAR(255) NOT NULL,
        user_id INTEGER NOT NULL,
        rider_id INTEGER NOT NULL,
        pickup_location TEXT NOT NULL,
        delivery_location TEXT NOT NULL,
        pickup_lat REAL NOT NULL,
        pickup_lng REAL NOT NULL,
        delivery_lat REAL NOT NULL,
        delivery_lng REAL NOT NULL,
        amount REAL NOT NULL,
        status VARCHAR(255) NOT NULL,
        payment_status VARCHAR(255) NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        picked_at DATETIME DEFAULT NULL,
        delivered_at DATETIME DEFAULT NULL,
        canceled_at DATETIME DEFAULT NULL,
        cancel_reason TEXT DEFAULT ''
    );
    CREATE INDEX IF NOT EXISTS idx_orders_order_id ON orders (order_id);
    CREATE INDEX IF NOT EXISTS idx_orders_user_id ON orders (user_id);
    CREATE INDEX IF NOT EXISTS idx_orders_rider_id ON orders (rider_id);",

    "CREATE TABLE IF NOT EXISTS riders (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        rider_id VARCHAR(255) NOT NULL,
        name TEXT NOT NULL,
        email TEXT NOT NULL,
        phone TEXT NOT NULL,
        vehicle_type TEXT NOT NULL,
        vehicle_number TEXT NOT NULL,
        current_lat REAL NOT NULL,
        current_lng REAL NOT NULL,
        status VARCHAR(255) NOT NULL,
        is_online INTEGER DEFAULT 0,
        rating INTEGER DEFAULT 0,
        total_deliveries INTEGER DEFAULT 0,
        total_earnings REAL DEFAULT 0,
        acceptance_rate REAL DEFAULT 0,
        completion_rate REAL DEFAULT 0,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        last_active DATETIME DEFAULT NULL,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
    );
    CREATE INDEX IF NOT EXISTS idx_riders_rider_id ON riders (rider_id);
    CREATE INDEX IF NOT EXISTS idx_riders_email ON riders (email);
    CREATE INDEX IF NOT EXISTS idx_riders_phone ON riders (phone);
    CREATE INDEX IF NOT EXISTS idx_riders_status ON riders (status);",

    "CREATE TABLE IF NOT EXISTS revenue (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        order_id VARCHAR(255) NOT NULL,
        amount REAL NOT NULL,
        commission REAL NOT NULL,
        rider_payout REAL NOT NULL,
        platform_fee REAL NOT NULL,
        payment_method VARCHAR(255) NOT NULL,
        status VARCHAR(255) NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        processed_at DATETIME DEFAULT NULL,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
    );
    CREATE INDEX IF NOT EXISTS idx_revenue_order_id ON revenue (order_id);
    CREATE INDEX IF NOT EXISTS idx_revenue_payment_method ON revenue (payment_method);
    CREATE INDEX IF NOT EXISTS idx_revenue_status ON revenue (status);"
];

$alterTables = [

];

function createDatabaseStructure() {
    global $databases, $alterTables;
    $db = \Config\Database::connect();
    foreach(array_merge($alterTables, $databases) as $query) {
        try {
            if(empty($query)) continue;
            $db->query($query);
        } catch(DatabaseException $e) {
        }
    }
}

/**
 * Set the database settings
 * 
 * @param object $dbHandler
 * 
 * @return void
 */
function setDatabaseSettings($dbHandler) {
    $dbHandler->query("PRAGMA journal_mode = WAL");
    $dbHandler->query("PRAGMA synchronous = NORMAL");
    $dbHandler->query("PRAGMA locking_mode = NORMAL");
    $dbHandler->query("PRAGMA busy_timeout = 5000");
    $dbHandler->query("PRAGMA cache_size = -16000");
}
