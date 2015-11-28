<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(PrefectureMasterSeeder::class);
        $this->call(MunicipalitiesSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(TodoSeeder::class);

        Model::reguard();
    }
}
