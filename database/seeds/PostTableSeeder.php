<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            ['user_id' => 1, 'title' => 'Post One', 'content' => 'Post One Content'],
            ['user_id' => 1, 'title' => 'Post Two', 'content' => 'Post Two Content'],
            ['user_id' => 1, 'title' => 'Post Three', 'content' => 'Post Three Content'],
        ]);
    }
}
