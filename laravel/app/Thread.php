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

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function getMentee()
    {
        return $this->belongsTo(User::class, 'mentee_user_id');
    }

    public function getMentor()
    {
        return $this->belongsTo(User::class, 'mentor_user_id');
    }
}
