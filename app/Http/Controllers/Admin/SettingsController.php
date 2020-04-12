<?php

namespace App\Http\Controllers\Admin;

use App\Services\SettingsService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    const images = [
        'hero_banner_ad',
        'product_banner_ad'
    ];
    /**
     * @var SettingsService
     */
    private $settingsService;

    public function __construct(SettingsService $settingsService)
    {
        $this->settingsService = $settingsService;
    }

    /**
     * Save settings.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function save(Request $request)
    {
        $settings = $request->all();
        array_walk($settings, function (&$setting, $key) use ($request)
        {
            if(in_array($key, self::images)){
                $request->validate([
                    $key => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ]);
                return $setting = $this->settingsService->processImage($setting);
            }
            return $setting;
        });
        $this->settingsService->save($settings);
        return \redirect(\route('admin.home'));
    }
}
