<?php

namespace App\Usecases\Course;

use App\Models\Course;

class ListAction {
	public function __invoke() {
		return [ 'courses' => Course::all()];
	}
}