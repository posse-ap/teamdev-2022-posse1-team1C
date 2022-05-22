<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ToBothTheDayBeforeRemindMail extends Mailable
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
        return $this->subject('相談予定日前日です') // メールタイトル
        ->view('emails.to_both_the_day_before_remind') // どのテンプレートを呼び出すか
        ->with(['content' => $this->content]); // withオプションでセットしたデータをテンプレートへ受け渡す
    }
}