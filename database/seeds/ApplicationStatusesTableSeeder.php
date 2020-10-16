<?php

use Illuminate\Database\Seeder;

class ApplicationStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('application_statuses')->insert([
            ['application_status_code' => 'applying', 'application_status_name' => '未処理'],
            ['application_status_code' => 'done', 'application_status_name' => '処理済']
        ]);
    }
}
