<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model\Post::create([
            "user_id"     => 1,
            "title"       => "aaaaa",
            "body"        => "aaaaabbbbbbb",
            "status"      => 2,
            "created_at"  => "2015-11-22 00:49:35",
            "updated_at"  => "2015-11-22 01:34:46",
        ]);
    }
}
