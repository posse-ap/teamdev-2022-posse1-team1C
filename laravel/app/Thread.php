<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = [
        'mentee_user_id', 'mentor_user_id',
    ];

    public function chats()
    {
        return $this->hasMany(Chat::class);
    }

    public function schedule_adjustments()
    {
        return $this->hasMany(ScheduleAdjustment::class);
    }
}
