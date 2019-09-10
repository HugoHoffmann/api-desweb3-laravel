<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosCalcadosTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('pedidos_calcados', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->uuid('pedido_id')->unsigned();
      $table->foreign('pedido_id')->references('id')->on('pedidos');
      $table->uuid('calcado_id')->unsigned();
      $table->foreign('calcado_id')->references('id')->on('calcados');
      $table->integer('quantidade');
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
    Schema::dropIfExists('pedidos_calcados');
  }
}
