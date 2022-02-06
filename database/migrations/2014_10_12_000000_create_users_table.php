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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('department_id');
            $table->integer('role_id');
            $table->string('designation');
            $table->string('address')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('dbs')->nullable();
            $table->date('dbs_expiry_date')->nullable();
            $table->string('experence_on')->nullable();
            $table->string('work_experience')->nullable();
            $table->string('time_preference')->nullable();
            $table->string('ni_no')->nullable();
            $table->string('nationality')->nullable();
            $table->string('visa_status')->nullable();
            $table->date('start_from');
            $table->string('image');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
