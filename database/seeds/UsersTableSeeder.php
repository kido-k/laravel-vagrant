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
            'name' => '管理者',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'authority' => 'admin',
            'created_at' => '2010-04-01 00:00:00',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'ユーザー１',
            'email' => 'user1@user.com',
            'password' => 'password',
            'authority' => 'normal',
            'created_at' => '2010-04-01 00:00:00',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'ユーザー２',
            'email' => 'user2@user.com',
            'password' => 'password',
            'authority' => 'normal',
            'created_at' => '2010-04-01 00:00:00',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'ユーザー３',
            'email' => 'user3@user.com',
            'password' => 'password',
            'authority' => 'normal',
            'created_at' => '2010-04-01 00:00:00',
        ];
        DB::table('users')->insert($param);
    }
}
