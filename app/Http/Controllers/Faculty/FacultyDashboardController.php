<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Controller;

class FacultyDashboardController extends Controller
{
    public function index()
    {
        return view('faculty.dashboard');
    }
}