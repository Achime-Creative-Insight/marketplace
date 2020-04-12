<?php


namespace App\Services;


use App\Models\Setting;
use Illuminate\Http\UploadedFile;

class SettingsService
{
    public function all()
    {
        $_settings = Setting::all();
        $settings = [];
        foreach ($_settings as $setting) {
            $settings[$setting->name] = $setting->value;
        }
        return $settings;
    }

    public function get(string $setting)
    {
        return Setting::retrieve($setting);
    }

    public function save(array $settings)
    {
        foreach ($settings as $name => $value) {
            Setting::updateOrCreate(['name' => $name], ['value' => $value]);
        }
        return true;
    }

    public function processImage(UploadedFile $image)
    {
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images/ads'), $imageName);
        return '/images/ads/' . $imageName;
    }
}
