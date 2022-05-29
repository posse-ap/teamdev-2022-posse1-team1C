<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $fillable = [
        'user_id', 'company', 'department', 'paypay_url'
    ];

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function threads()
    {
        return $this->hasMany(Thread::class, 'mentor_user_id', 'user_id');
    }

    public function getSchedule($mentee_user_id)
    {
        $schedule_status = '';
        $threads = $this
            ->threads()
            ->where('mentee_user_id', $mentee_user_id)
            ->with('schedule_adjustments')
            ->first();
        if (!isset($threads)) {
            return [
                'thread_id' => null,
                'schedule_status' => '未依頼',
                'fixed_schedule' => '-',
            ];
        }
        $schedule_adjustment = $threads
            ->schedule_adjustments
            ->sortByDesc('id')
            ->first();
        switch ($schedule_adjustment->schedule_status_id) {
            case 1;
            case 2;
                $schedule_status = '依頼中';
                break;
            case 3;
                $schedule_status = '相談済み';
                break;
        }
        $fixed_schedule = '';
        if ($schedule_adjustment->fixed_schedule) {
            $fixed_schedule = $schedule_adjustment->fixed_schedule;
        }
        return [
            'thread_id' => $threads->id,
            'schedule_status' => $schedule_status,
            'fixed_schedule' => $fixed_schedule,
        ];
    }
}
