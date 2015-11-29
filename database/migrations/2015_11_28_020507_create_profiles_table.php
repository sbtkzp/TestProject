<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('display_name');
            $table->string('display_name_en');
            $table->date('birthday');
            $table->integer('age');
            $table->string('postal_number');
            $table->string('address');
            $table->string('phone_number');
            $table->string('mobile_phone_number');
            $table->string('web_site_url');
            $table->string('blood_type',2);
            $table->string('memo');
            $table->string('icon');
            $table->smallInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profiles');
    }
}
