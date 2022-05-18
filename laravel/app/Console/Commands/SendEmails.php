<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:sendEmails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'メールを送信する';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $send_email_controller = app()->make('App\Http\Controllers\Api\MailController');
        $send_email_controller->sendToMentorScheduleAdjustmentRemindMail();

        return "SUCCESS";
    }
}
