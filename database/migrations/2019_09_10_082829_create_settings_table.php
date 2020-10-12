<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('url');
            $table->string('logo');
            $table->string('admin_email');
            $table->string('app_store_url');
            $table->string('play_store_url');
            $table->string('info_email');
            $table->string('mobile');
            $table->string('phone');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linked_in');
            $table->string('instagram');
            $table->string('google_plus');
            $table->integer('paginate');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('image');
            $table->string('vedio');
            $table->string('join_us');
            $table->string('note');
            $table->integer('time_from');
            $table->integer('time_to');

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
        Schema::dropIfExists('settings');
    }
}
