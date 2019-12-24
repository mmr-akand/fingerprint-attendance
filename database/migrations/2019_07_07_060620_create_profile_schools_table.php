<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->bigInteger('deviceid')->nullable();
            $table->integer('upazila_id')->unsigned();
            $table->integer('profile_teo_id')->unsigned()->nullable();
            $table->integer('profile_ateo_id')->unsigned()->nullable();
            $table->timestamps();            
            $table->softDeletes();

            $table->foreign('upazila_id')->references('id')->on('upazilas')->onDelete('cascade');
            $table->foreign('profile_teo_id')->references('id')->on('profile_teos')->onDelete('set null');
            $table->foreign('profile_ateo_id')->references('id')->on('profile_ateos')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
