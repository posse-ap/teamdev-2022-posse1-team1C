<?php

use Illuminate\Database\Seeder;

class ChatsTableSeeder extends Seeder
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
        'thread_id' => 1,
        'sender' => 'mentor',
        'content' => 'あああ'
      ],
      [
        'thread_id' => 1,
        'sender' => 'mentee',
        'content' => 'いいい'
      ],
      [
        'thread_id' => 1,
        'sender' => 'mentor',
        'content' => 'ううう'
      ],
      [
        'thread_id' => 1,
        'sender' => 'mentor',
        'content' => 'えええ'
      ],
    ];

    foreach ($params as $param) {
      DB::table('chats')->insert($param);
    }
  }
}
