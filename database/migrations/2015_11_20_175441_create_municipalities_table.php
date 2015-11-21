<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_municipality', function (Blueprint $table)
        {
            $table->string('code');
            $table->string('code_with_check_digit');
            $table->string('name');
            $table->string('kana');
            $table->string('shigai_tel_num');
            $table->string('main_postal_codes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('m_municipality');
    }
}
