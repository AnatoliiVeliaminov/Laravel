<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 50)->unique();
            $table->string('description', 100);
            $table->string('short_description', 50);
            $table->string('sku', 50);
            $table->float('price')->unsigned();
            $table->float('discount')->unsigned()->nullable();
            $table->boolean('in_stock');
            $table->bigInteger('count')->unsigned()->nullable();
            $table->text('thumbnail')->nullable();
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
        Schema::dropIfExists('producties');
    }
}
