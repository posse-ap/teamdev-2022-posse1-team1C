<?php

use Illuminate\Database\Seeder;

class ThreadsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $params = [
      [
        'mentee_user_id' => 1,
        'mentor_user_id' => 2,
      ],
    ];

    foreach ($params as $param) {
      DB::table('threads')->insert($param);
    }
  }
}
