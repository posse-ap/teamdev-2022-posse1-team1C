<?php

use Illuminate\Database\Seeder;

class FeedbacksTableSeeder extends Seeder
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
              'is_mentor' => '1',
              'schedule_adjustment_id' => '1',
              'content' => 'あああ'
            ],
          ];

        foreach ($params as $param) {
            DB::table('feedbacks')->insert($param);
        }
          
    }
    
}
