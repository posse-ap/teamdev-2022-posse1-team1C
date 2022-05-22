<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScheduleAdjustment extends Model
{
    protected $fillable =
    [
        'mentee_user_id', 'mentor_user_id', 'fixed_schedule',
        'schedule_status_id', 'mentee_has_done', 'mentor_has_done',
        'admin_check_status_id', 'admin_remarks'
    ];

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function schedule_statuses()
    {
        return $this->hasMany(Schedule_status::class);
    }
}
