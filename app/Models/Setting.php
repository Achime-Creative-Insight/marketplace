<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public static function retrieve(string $settingName)
    {
        $setting = self::where('name', $settingName)->orderBy('date_modified', 'DESC')->first();
        return $setting->value ?? null;
    }
}
