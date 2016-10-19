<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class HomeController extends Controller
{
    /**
     * Display index page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
    }

    /**
     * Display feature page
     *
     * @return \Illuminate\Http\Response
     */
    public function cloud()
    {
        return view('home.cloud');
    }

    /**
     * Display business page
     *
     * @return \Illuminate\Http\Response
     */
    public function business()
    {
        return view('home.business');
    }

    /**
     * Display open-sources page
     *
     * @return \Illuminate\Http\Response
     */
    public function openSources()
    {
        return view('home.open-sources');
    }

    /**
     * Display jobs page
     *
     * @return \Illuminate\Http\Response
     */
    public function jobs()
    {
        return view('home.jobs');
    }

    /**
     * Display about-us page
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutUs()
    {
        return view('home.about-us');
    }
}
