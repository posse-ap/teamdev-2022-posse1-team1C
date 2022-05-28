<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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
                'email' => 'testtesttest@com',
                'password' => Hash::make('password'),
                'is_mentor' => '0',
                'ticket' => '0'
            ],
            [
                'email' => 'testtest@com',
                'password' => Hash::make('password'),
                'is_mentor' => '1',
                'ticket' => '1'
            ],
        ];

        foreach ($params as $param) {
            DB::table('users')->insert($param);
        }
    }
}
