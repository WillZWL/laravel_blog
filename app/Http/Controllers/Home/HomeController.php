<?php namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        $page_size = setting('page_size');

        $articles = \App\Article::latest()->take(5)->get();

        return view('home.index', compact('articles'));
    }
}
