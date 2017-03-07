<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Timeline;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $years = Timeline::getTimeline();

        return view('home.timeline.index', compact('years'));
    }
}
