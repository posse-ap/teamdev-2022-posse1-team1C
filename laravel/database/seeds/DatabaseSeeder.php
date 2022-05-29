<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ThreadsTableSeeder::class);
        $this->call(ChatsTableSeeder::class);
        $this->call(MentorsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AdminCheckStatusesTableSeeder::class);
        $this->call(CallingLogsTableSeeder::class);
        $this->call(FeedbacksTableSeeder::class);
        $this->call(ScheduleAdjustmentsTableSeeder::class);
        $this->call(ScheduleStatusesTableSeeder::class);
        $this->call(SchedulesTableSeeder::class);
        $this->call(PaymentStatusesTableSeeder::class);
    }
}
