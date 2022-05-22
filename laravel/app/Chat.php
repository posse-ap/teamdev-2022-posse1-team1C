<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
  protected $fillable = [
    'thread_id',
    'sender',
    'content',
  ];

  public function threads()
    {
        return $this->belongsTo(Thread::class);
    }

}
