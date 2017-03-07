<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected $table = 'timeline';

    public static function getTimeline()
    {
        return \Cache::rememberForever('timelines_array', function () {
            $years = [];
            for ($i = 2016; $i >= 2014; --$i) {
                $timelines = Timeline::where(\DB::raw('YEAR(start_date)'), '=', $i)->orderby('start_date', 'desc')->take(100)->get();
                $years[$i] = $timelines;
            }

            return $years;
        });
    }
}
