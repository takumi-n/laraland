<?php

namespace App\Usecases\Lesson;

use App\Models\Course;
use App\Models\LessonMaterial;
use Auth;
use Illuminate\Mail\Markdown;

class FindAction {
	public function __invoke($id) {
		$material = LessonMaterial::find($id);
        $parsed = Markdown::parse($material->markdown);
        $lesson = $material->lesson;

        return [
            'material' => $parsed->toHtml(),
            'lesson' => $lesson,
        ];
	}
}