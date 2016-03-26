<?php namespace App\Http\Controllers\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Timeline;

class TimelineController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$years = [];
		for ($i = 2016; $i >= 2014; $i--) {
			$timelines = Timeline::where(\DB::raw('YEAR(start_date)'), '=', $i)->orderby('start_date', 'desc')->take(50)->get();
			$years[$i] = $timelines;
		}

		return view('home.timeline.index',compact('years'));
	}
}
