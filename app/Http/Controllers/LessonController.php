<?php

namespace App\Http\Controllers;

use App\Models\LessonMaterial;
use Illuminate\Mail\Markdown;
use Inertia\Inertia;

class LessonController extends Controller
{
    public function show($id) {
        $material = LessonMaterial::find($id);
        $parsed = Markdown::parse($material->markdown);
        $lesson = $material->lesson;

        return Inertia::render('Lesson', [
            'material' => $parsed->toHtml(),
            'lesson' => $lesson,
        ]);
    }
}
