<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            ['post_code' => 'president', 'post_name' => '社長'],
            ['post_code' => 'director', 'post_name' => '取締役'],
            ['post_code' => 'manager', 'post_name' => '部長'],
            ['post_code' => 'section_chief', 'post_name' => '課長'],
            ['post_code' => 'chief', 'post_name' => '主任'],
            ['post_code' => 'member', 'post_name' => '一般']
        ]);
    }
}
