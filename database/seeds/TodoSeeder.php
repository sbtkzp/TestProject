<?php

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model\Todo::create([
            "doer_id"       => 1,
            "title"         => "Test Todo 1",
            "description"   => "This is a Test Todo.",
            "status"        => 2,
            "created_at"    => "2015-11-28 12:19:21",
            "updated_at"    => "2015-11-28 12:19:21",
        ]);
    }
}
