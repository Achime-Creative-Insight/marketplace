<?php


namespace App\Services;


use App\Models\Setting;

class SettingsService
{
    public function get(string $setting)
    {
        return Setting::retrieve($setting);
    }

    public function save(array $settings)
    {
        //
    }
}
