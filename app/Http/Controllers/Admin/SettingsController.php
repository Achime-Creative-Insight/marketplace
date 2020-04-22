<?php

namespace App\Http\Controllers\Admin;

use App\Services\SettingsService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    /**
     * Settings to be validated as images
     */
    const images = [
        'hero_banner_ad',
        'product_banner_ad'
    ];

    /**
     * Settings to be validated as documents
     */
    const docs = [
        'terms_of_use',
        'privacy_policy'
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
            elseif (in_array($key, self::docs)) {
                $request->validate([
                    $key => 'mimes:pdf'
                ]);
                return $setting = $this->settingsService->processDocument($setting);
            }
            return $setting;
        });
        $this->settingsService->save($settings);
        return \redirect(\route('admin.home'));
    }
}
