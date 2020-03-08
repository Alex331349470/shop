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
            $table->json('description')->nullable();
            $table->string('art');
            $table->string('time');
            $table->string('size');
            $table->string('quality');
            $table->boolean('on_sale')->default(true);
            $table->string('type');
            $table->string('style');
            $table->float('discount');
            $table->text('content');
            $table->decimal('price',10,2);
            $table->float('rating')->default(5);
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
