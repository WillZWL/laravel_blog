<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //public $timestamps= false;
    protected $fillable = ['name', 'value', 'description', 'type'];

    public static function getSettingsArr()
    {
        return \Cache::rememberForever('settings_array', function () {

            $settings = \App\Setting::all()->lists('value', 'name');

            return $settings;
        });
    }

    public static function getSettingValue($name)
    {
        $settings = self::getSettingsArr();
        return $settings[$name];
    }
}
