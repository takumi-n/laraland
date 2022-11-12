<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class CourseController extends Controller
{
    public function list()
    {
        $courses = Course::all();
        return Inertia::render('Courses', [
            'courses' => $courses,
        ]);
    }

    public function show($id) {
        $course = Course::find($id);
        $lessons = $course->lessons()->orderBy('step_no', 'asc')->get();
        $attended = Auth::user()->courses->contains($course->id);

        return Inertia::render('Course', [
            'course' => $course,
            'attended' => $attended,
            'lessons' => $lessons,
        ]);
    }

    public function attend($id) {
        Auth::user()->courses()->attach($id);
        return redirect(RouteServiceProvider::HOME);
    }

    public function quit($id) {
        Auth::user()->courses()->detach($id);
        return redirect(RouteServiceProvider::HOME);
    }
}
