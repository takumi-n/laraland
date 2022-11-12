<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function show()
    {
        $courses = Auth::user()->courses;
        return Inertia::render('Dashboard', [
            'courses' => $courses,
        ]);
    }
}
