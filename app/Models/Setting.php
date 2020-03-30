<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $guarded = [];

    public static function retrieve(string $settingName)
    {
        $setting = self::where('name', $settingName)->orderBy('updated_at', 'DESC')->first();
        return $setting->value ?? null;
    }
}
