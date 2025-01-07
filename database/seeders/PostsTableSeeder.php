<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title'=>'Cara Wudhu', 'content'=>'lorem ipsum'],
            ['title'=>'Haruskah Wudhu', 'content'=>'lorem ipsum'],
            ['title'=>'Cara Wudhu yang Baik dan Benar', 'content'=>'lorem ipsum']
        ];
        DB::table('posts')->insert($posts);
    }
}
