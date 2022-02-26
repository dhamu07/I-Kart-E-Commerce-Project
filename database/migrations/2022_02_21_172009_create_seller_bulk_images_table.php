<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerBulkImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_bulk_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id')->index()->nullable();
            $table->string('photos')->nullable();
            $table->string('path')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('seller_id')->references('id')->on('sellers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_bulk_images');
    }
}
