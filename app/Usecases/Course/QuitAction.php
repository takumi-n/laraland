<?php

namespace App\Usecases\Course;

use App\Models\User;

class QuitAction {
	public function __invoke(User $user, int $courseId) {
		$user->courses()->detach($courseId);
	}
}