<?php

use Illuminate\Database\Seeder;

class MentorsTableSeeder extends Seeder
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
                'user_id' => 1,
                'company' => 'リクルート',
                'department' => '営業部',
                'paypay_url' => 'https://qr.paypay.ne.jp/9EYctRku57bFDUcD',
            ],
            [
                'user_id' => 2,
                'company' => '株式会社アンチパターン',
                'department' => '取締役',
                'paypay_url' => 'https://qr.paypay.ne.jp/9EYctRku57bFDUcD',
            ],
            [
                'user_id' => 3,
                'company' => '株式会社イノベーション',
                'department' => '技術部',
                'paypay_url' => 'https://qr.paypay.ne.jp/9EYctRku57bFDUcD',
            ],
        ];
        foreach ($params as $param) {
            DB::table('mentors')->insert($param);
        }
    }
}
