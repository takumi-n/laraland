<?php

namespace App\Usecases\Course;

use App\Models\User;

class FindAttendedAction {
	public function __invoke(User $user) {
		return [ 'courses' => $user->courses ];
	}
}