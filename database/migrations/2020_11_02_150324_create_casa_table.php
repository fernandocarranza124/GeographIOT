<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casa', function (Blueprint $table) {
            $table->id();
            $table->decimal('esq1_longitud',10,7);
            $table->decimal('esq1_latitud',10,7);
            $table->decimal('esq2_longitud',10,7);
            $table->decimal('esq2_latitud',10,7);
            $table->decimal('esq3_longitud',10,7);
            $table->decimal('esq3_latitud',10,7);
            $table->decimal('esq4_longitud',10,7);
            $table->decimal('esq4_latitud',10,7);
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
        Schema::dropIfExists('casa');
    }
}
