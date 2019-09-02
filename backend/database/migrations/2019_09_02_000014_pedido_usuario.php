<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PedidoUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_usuario', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date('data_pedido');
            $table->integer('pedido_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->boolean('pagamento');
            $table->timestamps();

            $table->foreign('pedido_id')
                ->references('id')
                ->on('pedidos');

            $table->foreign('usuario_id')
                ->references('id')
                ->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_usuario');
    }
}
