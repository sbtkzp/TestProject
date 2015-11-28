<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model\User::create([
            "name"       => "shiba",
            "email"      => "test@sample.com",
            "created_at" => "2015-11-22 03:04:32",
            "updated_at" => "2015-11-22 03:04:32",
        ]);
    }
}
