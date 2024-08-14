<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function dashboard()
    {
        return view('coach.dashboard.dashboard');
    }
}
