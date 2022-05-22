<?php

use Illuminate\Database\Seeder;

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
              [
                'name' => 'メンター',
                'email' => 'testtest@com',
                'password' => 'password',
                'is_mentor' => '1',
                'ticket' => '1'
              ],
            ],
          ];

        $params = [
            [
              [
                'name' => 'メンティー',
                'email' => 'testtesttest@com',
                'password' => 'password',
                'is_mentor' => '0',
                'ticket' => '1'
              ],
            ],
          ];
          
          foreach ($params as $param) {
            DB::table('users')->insert($param);
          }
    }
}
