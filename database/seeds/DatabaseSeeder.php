<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ApplicationStatusesTableSeeder::class,
            DepartmentsTableSeeder::class,
            HolidayTypesSeeder::class,
            PostsTableSeeder::class,
            RolesTableSeeder::class,
        ]);
    }
}
