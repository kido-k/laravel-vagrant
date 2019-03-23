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
        $param = [
            'name' => 'ララベル',
            'email' => 'laravel@laravel.com',
            'password' => 'password',
            'created_at' => '2019-03-22 21:37:24',
        ];
        DB::table('users')->insert($param);
    }
}
