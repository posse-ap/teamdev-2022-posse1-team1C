<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = "feedbacks";
    protected $fillable = ['content','is_mentor'];  

    public function schedule_adjustments() {
        return $this->belongsTo(ScheduleAdjustment::class);
    }
    
}
