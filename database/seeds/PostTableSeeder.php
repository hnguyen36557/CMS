<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();
        DB::table('posts')->insert([
            [
                'author_id' => 1,
                'title' => 'Post 1',
                'slug' => 'post-1',
                'body' => 'post',
                'published_at' => date('Y-m-d H:i:s', strtotime('now'))
            ],

            [
                'author_id' => 2,
                'title' => 'Post 2',
                'slug' => 'post-2',
                'body' => 'post 2',
                'published_at' => date('Y-m-d H:i:s', strtotime('+2 week'))
            ],

            [
                'author_id' => 3,
                'title' => 'Post 3',
                'slug' => 'post-3',
                'body' => 'post 3',
                'published_at' => null
            ]
        ]);
    }
}
