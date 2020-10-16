<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            ['department_code' => 'system', 'department_name' => 'システム事業部'],
            ['department_code' => 'sales', 'department_name' => '営業部'],
            ['department_code' => 'general_affairs', 'department_name' => '総務部'],
            ['department_code' => 'etc', 'department_name' => 'その他']
        ]);
    }
}
