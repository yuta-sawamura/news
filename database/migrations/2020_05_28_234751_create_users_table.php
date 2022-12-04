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
            $table->bigIncrements('id');
            $table->string('sei', 50)->comment('姓');
            $table->string('mei', 50)->comment('名');
            $table->string('sei_kana', 100)->nullable()->comment('セイ');
            $table->string('mei_kana', 100)->nullable()->comment('メイ');
            $table->unsignedSmallInteger('gender')->comment('性別(1:男 2:女)');
            $table->string('email', 100)->unique()->nullable()->comment('メールアドレス');
            $table->date('birth')->comment('誕生日');
            $table->string('password', 255)->nullable()->comment('パスワード');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->softDeletes();
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
