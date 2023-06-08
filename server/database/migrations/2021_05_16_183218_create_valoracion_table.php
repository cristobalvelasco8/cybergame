<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValoracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valoracion', function (Blueprint $table) {
            $table->string('comentario',300)->nullable(false);
            $table->unsignedTinyInteger('puntuacion')->nullable(false);
            $table->unsignedSmallInteger('user_id_user')->nullable(false);
            $table->unsignedSmallInteger('producto_id_producto')->nullable(false);

            $table->foreign('user_id_user')->references('id_user')->on('user');
            $table->foreign('producto_id_producto')->references('id_producto')->on('producto');

            $table->primary(['user_id_user', 'producto_id_producto']);

            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
       });
    }

    public function down()
    {
        Schema::dropIfExists('valoracion');
    }
}
