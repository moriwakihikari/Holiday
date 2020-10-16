<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['role_code' => 'admin', 'role_name' => '管理者'],
            ['role_code' => 'user', 'role_name' => 'ユーザー']
        ]);
    }
}
