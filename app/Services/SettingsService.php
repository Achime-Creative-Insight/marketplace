<?php


namespace App\Services;


use App\Models\Setting;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

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
        $disk = config('app.env') === 'local' ? 'public' : 's3';    
        $imageName = time().'.'.$image->extension();
        $path = $image->store('images/ads', $disk);
        return Storage::disk($disk)->url($path);
    }

    public function processDocument(UploadedFile $doc)
    {
        $disk = config('app.env') === 'local' ? 'public' : 's3';
        $docName = time().'.'.$doc->extension();
        $path = $doc->store('docs', $disk);
        return Storage::disk($disk)->url($path);
    }
}
