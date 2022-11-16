<?php

namespace App\Listeners;

use App\Events\UserAttendCourse;
use App\Notifications\WelcomeCourse;

class SendWelcomeCourseNotifications
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UserAttendCourse  $event
     * @return void
     */
    public function handle(UserAttendCourse $event)
    {
        $event->user->notify(new WelcomeCourse($event->course));
    }
}
