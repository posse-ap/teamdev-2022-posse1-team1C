<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ToBothRequestCancelMail extends Mailable
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
        return $this->subject('相談依頼がキャンセルされました') // メールタイトル
        ->view('emails.to_both_request_cancel') // どのテンプレートを呼び出すか
        ->with(['content' => $this->content]); // withオプションでセットしたデータをテンプレートへ受け渡す
    }
}