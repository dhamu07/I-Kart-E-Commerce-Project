<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->bigInteger('phone_number')->nullable();
            $table->string('email',50)->unique()->index();
            $table->string('password')->nullable();
            $table->string('gst_number')->nullable();
            $table->string('pan_number')->nullable();
            $table->string('bank_account_number',30)->nullable();
            $table->string('ifsc_code')->nullable();
            $table->text('business_address')->nullable();
            $table->string('gst_certificate')->nullable();
            $table->string('cancel_cheque')->nullable();
            $table->text('pickup_address')->nullable();
            $table->bigInteger('country')->nullable();
            $table->bigInteger('state')->nullable();
            $table->bigInteger('city')->nullable();
            $table->bigInteger('pin_code')->nullable();
            $table->enum('business_type', [1, 2, 3])->comment('1-Wholeseller, 2-Retailer, 3-Manufacturer')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('token')->nullable();
            $table->tinyInteger('is_verified')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('sellers');
    }
}
