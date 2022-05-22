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
    $this->call(Admin_check_statusesTableSeeder::class);
    $this->call(Calling_logsTableSeeder::class);
    $this->call(FeedbacksTableSeeder::class);
    $this->call(Schedule_adjustmentsTableSeeder::class);
    $this->call(Schedule_statusesTableSeeder::class);
    $this->call(SchedulesTableSeeder::class);
  }
}
