<?php

namespace App\Usecases\Course;

use App\Models\Course;
use App\Models\User;

class AttendAction {
	public function __invoke(User $user, int $courseId) {
		$user->courses()->attach($courseId);
	}
}