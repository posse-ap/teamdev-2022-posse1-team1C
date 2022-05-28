<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = "feedbacks";

    public function schedule_adjustment() {
        return $this->belongsTo("App\Models\ScheduleAdjustment");
    }
}
