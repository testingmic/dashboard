<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\Exceptions\DatabaseException;

class SettingsModel extends Model
{
    protected $settingsTable;
    protected $sitesTable;
    protected $table;
    protected $ipBlockingTable;
    protected $primaryKey = 'id';
    protected $allowedFields = ['options', 'settings_values', 'idsite'];

    public function __construct() {
        parent::__construct();
        
        $this->table = DbTables::$settingsTable;
        foreach(DbTables::initTables() as $key) {
            if (property_exists($this, $key)) {
                $this->{$key} = DbTables::${$key};
            }
        }
    }

    public function getAllSettings() {
        return [];
    }
    
}
