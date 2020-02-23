<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public static function retrieve(string $settingName)
    {
        return self::where('name', $settingName)->orderBy('date_modified', 'DESC')->first();
    }
}
