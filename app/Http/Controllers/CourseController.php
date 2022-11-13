<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Usecases\Course\AttendAction;
use App\Usecases\Course\FindAction;
use App\Usecases\Course\ListAction;
use App\Usecases\Course\QuitAction;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class CourseController extends Controller
{
    public function list(ListAction $usecase)
    {
        $data = $usecase();
        return Inertia::render('Courses', $data);
    }

    public function show(int $id, FindAction $usecase) {
        $data = $usecase($id);
        return Inertia::render('Course', $data);
    }

    public function attend(int $id, AttendAction $usecase) {
        $usecase(Auth::user(), $id);
        return redirect(RouteServiceProvider::HOME);
    }

    public function quit(int $id, QuitAction $usecase) {
        $usecase(Auth::user(), $id);
        return redirect(RouteServiceProvider::HOME);
    }
}
