<?php

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->truncate();

        DB::table('pages')->insert([
            [
                'title' => 'About',
                'uri' => 'about',
                'name' => 'About Page',
                'parent_id' => null,
                'lft' => 3,
                'rgt' => 8,
                'depth' => 0
            ],

            [
                'title' => 'Contact',
                'uri' => 'contact',
                'name' => 'Contact Page',
                'parent_id' => 1,
                'lft' => 4,
                'rgt' => 5,
                'depth' => 1
            ],

            [
                'title' => 'FAQ',
                'uri' => 'faq',
                'name' => 'FAQ Page',
                'parent_id' => 1,
                'lft' => 6,
                'rgt' => 7,
                'depth' => 1
            ],

            [
                'title' => 'Media',
                'uri' => 'media',
                'name' => 'Media Page',
                'parent_id' => null,
                'lft' => 1,
                'rgt' => 2,
                'depth' => 0
            ],
        ]);
    }
}
