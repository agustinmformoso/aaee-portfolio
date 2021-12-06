<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title_job')->nullable();
            $table->string('welcome_greeting')->nullable();
            $table->string('image')->nullable();
            $table->string('about_me_image')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('tel')->nullable();
            $table->string('address')->nullable();
            $table->text('excerpt')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
            $table->string('about_me_title')->nullable();
            $table->string('what_i_do_title')->nullable();
            $table->string('techical_skills_title')->nullable();
            $table->string('professional_skills_title')->nullable();
            $table->string('education_title')->nullable();
            $table->string('work_experience_title')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
