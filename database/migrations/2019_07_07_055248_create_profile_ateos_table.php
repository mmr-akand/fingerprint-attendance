<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileAteosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_ateos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('upazila_id')->unsigned();
            $table->integer('profile_dpeo_id')->unsigned()->nullable();
            $table->integer('profile_adpeo_id')->unsigned()->nullable();
            $table->integer('profile_teo_id')->unsigned()->nullable();
            $table->string('about')->nullable();
            $table->timestamps();            
            $table->softDeletes();

            $table->foreign('upazila_id')->references('id')->on('upazilas')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('profile_dpeo_id')->references('id')->on('profile_dpeos')->onDelete('set null');
            $table->foreign('profile_adpeo_id')->references('id')->on('profile_adpeos')->onDelete('set null');
            $table->foreign('profile_teo_id')->references('id')->on('profile_teos')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_ateos');
    }
}
