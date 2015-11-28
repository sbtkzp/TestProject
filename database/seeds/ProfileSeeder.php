<?php

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model\Profile::create([
            "user_id"             => 1,
            "display_name"        => "",
            "display_name_en"     => "",
            "birthday"            => "0000-00-00 00:00:00",
            "age"                 => 0,
            "postal_number"       => "",
            "address"             => "",
            "phone_number"        => "",
            "mobile_phone_number" => "",
            "web_site_url"        => "",
            "blood_type"          => "",
            "memo"                => "",
            "icon"                => "",
            "status"              => 2,
            "created_at"          => "2015-11-28 03:25:19",
            "updated_at"          => "2015-11-28 16:01:32",
        ]);
    }
}
