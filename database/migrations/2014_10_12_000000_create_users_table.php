<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id')->unsigned()->comment('自增id 无符号');
            $table->string('name',50)->default('default name')->comment('姓名');
            $table->string('email')->unique()->default('default email')->comment('邮箱');
            $table->string('phone',11)->unique()->default('0')->comment('手机号');
            $table->string('password');
            $table->tinyInteger('type')->default(1)->comment('用户类型 1用户');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
            $table->index(['email','password']);
            $table->index(['phone','password']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
