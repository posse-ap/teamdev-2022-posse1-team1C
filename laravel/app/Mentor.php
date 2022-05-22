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
        return $this->belongsTo(User::class);
    }

    
}
