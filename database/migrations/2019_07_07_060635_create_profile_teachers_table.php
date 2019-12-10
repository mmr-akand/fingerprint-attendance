<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('school_id')->unsigned();
            $table->enum('is_head_teacher', ['no', 'yes'])->default('no');
            $table->string('about')->nullable();
            $table->unsignedInteger('parent_id')->nullable();
            $table->timestamps();            
            $table->softDeletes();

            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('profile_teachers', function (Blueprint $table) {
            $table->foreign('parent_id')
                ->references('id')
                ->on('profile_teachers')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_teachers');
    }
}
