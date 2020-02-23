<?php

namespace App\Http\Controllers\Admin;

use App\Services\SettingsService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
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
        dd($settings);
        $this->settingsService->save($settings);
        \redirect(\route('admin.home'));
    }
}
