<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalcadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('calcados', function (Blueprint $table) {
          $table->uuid('id')->primary();
          $table->string('nome', 50);
          $table->uuid('categoria_id')->unsigned();
          $table->foreign('categoria_id')->references('id')->on('categorias');
          $table->decimal('preco', 10, 2);
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
        Schema::dropIfExists('calcados');
    }
}
