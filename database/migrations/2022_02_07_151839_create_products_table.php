<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->foreign('seller_id')->references('id')->on('sellers');
            $table->string('sku');
            $table->float('MRP');
            $table->float('selling_price')->nullable();
            $table->string('HSN_code')->nullable();
            $table->string('GST')->nullable();
            $table->integer('dispatch_in_day')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('local_delivery_charge')->nullable();
            $table->float('zonal_delivery_charge')->nullable();
            $table->float('national_delivery_charge')->nullable();
            $table->float('weight')->nullable();
            $table->float('length')->nullable();
            $table->float('width')->nullable();
            $table->float('height')->nullable();
            $table->string('title')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('brand_name')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('model_no')->nullable();
            $table->string('pack_of')->nullable();
            $table->longText('description')->nullable();
            // $table->string('parameter');
            $table->string('keyword')->nullable();
            $table->string('key_features')->nullable();
            $table->string('meta_tags')->nullable();
            $table->enum('return_order',[0,1])->comment('0-No, 1-Yes')->nullable();
            $table->integer('return_order_in_day')->nullable();
            $table->float('sale_price')->nullable();
            $table->timestamp('sale_start_date')->nullable();
            $table->timestamp('sale_end_date')->nullable();
            $table->string('country_of_origin')->nullable();
            $table->enum('status',[0,1])->comment('0-Inactive, 1-Active');
            $table->enum('qc_status',[1,2,3,4,5])->comment('1-QC-Pending, 2-QC-Progress,3-QC-Pass, 4-QC-Error, 5-QC-Fail');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
