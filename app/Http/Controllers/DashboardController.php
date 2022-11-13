<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Usecases\Course\FindAttendedAction;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function show(FindAttendedAction $usecase)
    {
        $data = $usecase(Auth::user());
        return Inertia::render('Dashboard', $data);
    }
}
