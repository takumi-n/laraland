<?php

namespace App\Http\Controllers;

use App\Models\LessonMaterial;
use App\Usecases\Lesson\FindAction;
use Illuminate\Mail\Markdown;
use Inertia\Inertia;

class LessonController extends Controller
{
    public function show(int $id, FindAction $usecase) {
        $data = $usecase($id);
        return Inertia::render('Lesson', $data);
    }
}
