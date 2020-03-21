<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('art')->nullable();
            $table->string('time')->nullable();
            $table->string('size');
            $table->string('quality');
            $table->decimal('weight')->default(0);
            $table->string('unit')->default('g');
            $table->boolean('on_sale')->default(true);
            $table->string('type');
            $table->string('style')->nullable();
            $table->string('theme')->nullable();
            $table->float('discount')->default(1);
            $table->text('content');
            $table->decimal('express_price')->default(0);
            $table->decimal('price',10,2)->default(0.00);
            $table->float('rating')->default(5);
            $table->integer('category_id')->index();
            $table->string('good_no')->nullable();
            $table->string('brand')->nullable();
            $table->unsignedInteger('stock')->default(0);
            $table->unsignedInteger('sold_count')->default(0);
            $table->unsignedInteger('review_count')->default(0);
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
        Schema::dropIfExists('goods');
    }
}
