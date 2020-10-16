<?php

use Illuminate\Database\Seeder;

class HolidayTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('holiday_types')->insert([
            ['holiday_type_code' => 'paid', 'holiday_type_name' => '有給休暇'],
            ['holiday_type_code' => 'half', 'holiday_type_name' => '半日休暇'],
            ['holiday_type_code' => 'special', 'holiday_type_name' => '特別休暇'],
            ['holiday_type_code' => 'absence', 'holiday_type_name' => '欠勤'],
        ]);
    }
}
