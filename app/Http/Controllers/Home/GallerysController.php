<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class GallerysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('home.gallery.index');
    }
}
