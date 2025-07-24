<?php

namespace App\Controllers\Frontend;

use App\Controllers\LoadController;
use App\Models\SettingsModel;

class Settings extends LoadController
{
    protected $settingsModel;

    public function __construct()
    {
        $this->settingsModel = new SettingsModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Settings & Configuration',
            'page' => 'settings',
            'settings' => $this->settingsModel->getAllSettings()
        ];

        return view('templates/header', $data)
             . view('settings/index', $data)
             . view('templates/footer');
    }

    public function update()
    {
        $settings = $this->request->getPost();
        
        foreach ($settings as $key => $value) {
            $this->settingsModel->updateSetting($key, $value);
        }

        return $this->response->setJSON(['success' => true, 'message' => 'Settings updated successfully']);
    }

    public function getCommissionRates()
    {
        $rates = $this->settingsModel->getCommissionRates();
        return $this->response->setJSON($rates);
    }

    public function updateCommissionRate()
    {
        $city = $this->request->getPost('city');
        $rate = $this->request->getPost('rate');

        $result = $this->settingsModel->updateCommissionRate($city, $rate);

        if ($result) {
            return $this->response->setJSON(['success' => true, 'message' => 'Commission rate updated successfully']);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Failed to update commission rate']);
        }
    }
} 