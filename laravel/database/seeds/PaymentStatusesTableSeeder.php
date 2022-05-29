<?php

use Illuminate\Database\Seeder;

class PaymentStatusesTableSeeder extends Seeder
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
                'name' => 'unconfirmed'
            ],
            [
                'name' => 'unpaid'
            ],
            [
                'name' => 'paid'
            ],
        ];

        foreach ($params as $param) {
            DB::table('payment_statuses')->insert($param);
        }
    }
}
