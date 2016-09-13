<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Timeline;
use App\User;

class DataController extends Controller
{
    /**
     *
     */
    public function index()
    {
        return redirect('/dashboard/data/timeline');
    }

    /**
     *
     */
    public function timeline()
    {
        $assign['timelines'] = Timeline::orderBy('id', 'desc')->paginate();
        return view('dashboard.data.timeline', $assign);
    }

    /**
     *
     */
    public function user()
    {
        $assign['users'] = User::orderBy('id', 'desc')->paginate();
        return view('dashboard.data.user', $assign);
    }
}
