<?php

use Illuminate\Database\Seeder;

class ScheduleStatusesTableSeeder extends Seeder
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
                'name' => 'waiting_for_mentor_reply',
            ],
            [
                'name' => 'schedule_fixed',
            ],
            [
                'name' => 'calling_completed',
            ],
        ];

        foreach ($params as $param) {
            DB::table('schedule_statuses')->insert($param);
        }
    }
}
