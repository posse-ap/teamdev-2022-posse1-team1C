<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ToMentorScheduleAdjustmentRemindMail extends Mailable
{
    use Queueable, SerializesModels;

    public $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    // public function __construct(string $content)
    // {
    //     $this->content = $content;
    // }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('相談依頼の日程回答リマインド') // メールタイトル
        ->view('emails.to_mentor_schedule_adjustment_remind') // どのテンプレートを呼び出すか
        ->with(['content' => $this->content]); // withオプションでセットしたデータをテンプレートへ受け渡す
    }
}