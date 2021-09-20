<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.(control de versiones)
     *
     * @return void
     */
    public function up()
    {   //creacion de tabla con las columnas:
        Schema::create('users', function (Blueprint $table) {
            $table->id();//Integer Unsigned Increment
            $table->string('name');//varchar(255)
            //$table->text('name');mas de 255 caracteres
            $table->string('email')->unique();//campo email único(protección de datos)
            $table->timestamp('email_verified_at')->nullable();//para verificacion de correo(quedará campo vacío por ende nullable)
            $table->string('password');
            $table->rememberToken();//se almacenará un token varchar(100) cada vez que un usuario marque (mantener sesión iniciada)
            $table->timestamps();//crea dos columnas created_at(fecha y hora de cambio de un registro) updated_at(fecha y hora donde se modificó un registro)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //elimina la tabla users
        Schema::dropIfExists('users');
    }
}
