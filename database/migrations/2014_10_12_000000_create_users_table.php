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
            $table->string('name');
            $table->string('apellido');
            $table->integer('cedula')->unique();
            $table->string('imagen');
            $table->enum('rol', ['Administrador','Auxiliar'])->default('Auxiliar');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        $password=bcrypt('123456789');
        DB::statement("INSERT INTO `users` (`name`,`email`,`password`,`apellido`,`cedula`,`imagen`,`rol`) VALUES ('ingenieria','electronica@gmail.com','$password','electronica','12345','user.png','Administrador')");
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
