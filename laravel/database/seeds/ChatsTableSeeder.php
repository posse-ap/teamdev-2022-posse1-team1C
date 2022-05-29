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
                'is_mentor' => 0,
                'content' => 'あああ'
            ],
            [
                'thread_id' => 1,
                'is_mentor' => 1,
                'content' => 'いいい'
            ],
            [
                'thread_id' => 1,
                'is_mentor' => 0,
                'content' => 'ううう'
            ],
            [
                'thread_id' => 1,
                'is_mentor' => 1,
                'content' => 'えええ'
            ],
        ];

        foreach ($params as $param) {
            DB::table('chats')->insert($param);
        }
    }
}
