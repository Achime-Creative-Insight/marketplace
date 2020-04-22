<?php

namespace App\Models;

use App\Notifications\TermsUpdated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Notification;

class Setting extends Model
{
    protected $guarded = [];
    
    protected static function boot()
    {
        parent::boot();
        Setting::saved(function ($setting) {
            if(in_array($setting->name, ['terms_of_use', 'privacy_policy'])) {
                Notification::send(User::all(), new TermsUpdated($setting));
            } 
        });
    }

    public static function retrieve(string $settingName)
    {
        $setting = self::where('name', $settingName)->orderBy('updated_at', 'DESC')->first();
        return $setting->value ?? null;
    }
}
