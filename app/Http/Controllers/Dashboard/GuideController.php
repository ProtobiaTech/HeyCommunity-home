<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GuideController extends Controller
{
    /**
     *
     */
    public function index()
    {
        return redirect('dashboard/guide/getting-started');
    }

    /**
     *
     */
    public function gettingStarted()
    {
        return view('dashboard.guide.getting-started');
    }
}
