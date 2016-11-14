<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WeathercockController extends Controller
{
    /**
     *
     */
    public function trend()
    {
        return view('dashboard.weathercock.trend');
    }
}
