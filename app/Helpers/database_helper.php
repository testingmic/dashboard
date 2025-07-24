<?php
global $databases, $alterTables;

use CodeIgniter\Database\Exceptions\DatabaseException;

// Create the databases
$databases = [
    "CREATE TABLE IF NOT EXISTS categories (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name VARCHAR(255) NOT NULL,
        name_slug VARCHAR(255) NOT NULL,
        description TEXT,
        image TEXT,
        icon TEXT,
        parent_id INTEGER DEFAULT 0,
        preferred_order INTEGER DEFAULT 0,
        coursesCount INTEGER DEFAULT 0,
        created_by INTEGER DEFAULT 0,
        status VARCHAR(255) DEFAULT 'Active',
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
    );",
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
    "CREATE TABLE IF NOT EXISTS user_token_auth (
        idusertokenauth INTEGER PRIMARY KEY AUTOINCREMENT,
        login TEXT,
        description TEXT,
        password TEXT UNIQUE,
        hash_algo TEXT,
        system_token INTEGER NOT NULL DEFAULT 0,
        last_used DATETIME DEFAULT NULL,
        date_created DATETIME DEFAULT CURRENT_TIMESTAMP,
        date_expired DATETIME DEFAULT CURRENT_TIMESTAMP,
        ipaddress TEXT DEFAULT NULL
    );
    CREATE INDEX IF NOT EXISTS idx_user_token_auth_login ON user_token_auth (login);",
    "CREATE TABLE IF NOT EXISTS notifications (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        user_id INTEGER DEFAULT 0,
        title TEXT DEFAULT '',
        description TEXT DEFAULT '',
        link TEXT DEFAULT '',
        read TEXT DEFAULT 'no',
        section TEXT DEFAULT '',
        created_by INTEGER DEFAULT 0,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
    );
    CREATE INDEX IF NOT EXISTS idx_notifications_user_id ON notifications (user_id);",
    "CREATE TABLE IF NOT EXISTS activities (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        user_id INTEGER DEFAULT 0,
        activity_type TEXT DEFAULT '',
        section TEXT DEFAULT '',
        content TEXT DEFAULT '',
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
    );
    CREATE INDEX IF NOT EXISTS idx_activities_user_id ON activities (user_id);
    CREATE INDEX IF NOT EXISTS idx_activities_activity_type ON activities (activity_type);
    CREATE INDEX IF NOT EXISTS idx_activities_section ON activities (section);",
    "CREATE TABLE IF NOT EXISTS resources (
        media_id INTEGER PRIMARY KEY,
        user_id INTEGER NOT NULL,
        record_id INTEGER NOT NULL,
        section TEXT NOT NULL,
        media TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    CREATE INDEX IF NOT EXISTS user_id ON resources (user_id);
    CREATE INDEX IF NOT EXISTS record_id ON resources (record_id);
    CREATE INDEX IF NOT EXISTS section ON resources (section);",

    "CREATE TABLE IF NOT EXISTS support_categories (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT DEFAULT '',
        name_slug TEXT DEFAULT '',
        icon TEXT DEFAULT '',
        parent_id INTEGER DEFAULT 0,
        created_by INTEGER DEFAULT 0,
        status VARCHAR(255) DEFAULT 'Active',
        image TEXT DEFAULT '',
        description TEXT DEFAULT '',
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
    );",

    "CREATE TABLE IF NOT EXISTS support (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT DEFAULT '',
        title_slug TEXT DEFAULT '',
        description TEXT DEFAULT '',
        content TEXT DEFAULT '',
        thumbnail TEXT DEFAULT '',
        image TEXT DEFAULT '',
        tags TEXT DEFAULT '',
        viewsCount INTEGER DEFAULT 0,
        writer TEXT DEFAULT '',
        sharesCount INTEGER DEFAULT 0,
        status VARCHAR(255) DEFAULT 'Active',
        category_id INTEGER DEFAULT 0,
        subcategory_id INTEGER DEFAULT 0,
        created_by INTEGER DEFAULT 0,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
    );
    CREATE INDEX IF NOT EXISTS idx_support_category_id ON support (category_id);
    CREATE INDEX IF NOT EXISTS idx_support_created_by ON support (created_by);",
    "CREATE TABLE IF NOT EXISTS support_contacts (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT DEFAULT '',
        email TEXT DEFAULT '',
        phone TEXT DEFAULT '',
        subject TEXT DEFAULT '',
        message TEXT DEFAULT '',
        category_id INTEGER DEFAULT 0,
        request_type TEXT DEFAULT 'contact',
        organization TEXT DEFAULT '',
        project_type TEXT DEFAULT '',
        project_title TEXT DEFAULT '',
        privacy_policy TEXT DEFAULT 'yes',
        budget TEXT DEFAULT '',
        created_by INTEGER DEFAULT 0,
        timeline TEXT DEFAULT '',
        attachments TEXT DEFAULT '',
        repliesCount INTEGER DEFAULT 0,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
    );
    CREATE INDEX IF NOT EXISTS idx_support_contacts_email ON support_contacts (email);",
    "CREATE TABLE IF NOT EXISTS support_contacts_replies (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        contact_id INTEGER,
        message TEXT DEFAULT '',
        created_by INTEGER DEFAULT 0,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    );
    CREATE INDEX IF NOT EXISTS idx_support_contacts_replies_contact_id ON support_contacts_replies (contact_id);
    CREATE INDEX IF NOT EXISTS idx_support_contacts_replies_created_by ON support_contacts_replies (created_by);",
];

$alterTables = [
    // "ALTER TABLE support_contacts ADD COLUMN created_by INTEGER DEFAULT 0;",
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
