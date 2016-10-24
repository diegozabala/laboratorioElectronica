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
            $table->increments('id');
            $table->string('email')->unique();            
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('cedula')->unique();
            $table->enum('rol', ['admin','auxiliar'])->default('auxiliar');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::statement("INSERT INTO `users` (`nombre`,`email`,`password`,`apellido`,`cedula`,`imagen`,`rol`) VALUES ('ingenieria','electronica@gmail.com','1234567','electronica','12345','user.png','admin')");
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
