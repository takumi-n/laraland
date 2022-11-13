<?php

namespace App\Usecases\Course;

use App\Models\Course;
use Auth;

class FindAction {
	public function __invoke($id) {
		$course = Course::find($id);
		$lessons = $course->lessons()->orderBy('step_no', 'asc')->get();
		$attended = Auth::user()->courses->contains($course->id);

		return [
			'course' => $course,
			'attended' => $attended,
			'lessons' => $lessons,
		];
	}
}