<?php

use Illuminate\Database\Seeder;

class ScheduleAdjustmentsTableSeeder extends Seeder
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
                'fixed_schedule' => '2022-05-30 18:00:00',
                'schedule_status_id' => 1,
                'admin_check_status_id' => 1,
                'admin_remarks' => ''
            ],
            [
                'thread_id' => 2,
                'fixed_schedule' => '2022-05-30 19:00:00',
                'schedule_status_id' => 2,
                'admin_check_status_id' => 1,
                'admin_remarks' => ''
            ],
        ];

        foreach ($params as $param) {
            DB::table('schedule_adjustments')->insert($param);
        }
    }
}
