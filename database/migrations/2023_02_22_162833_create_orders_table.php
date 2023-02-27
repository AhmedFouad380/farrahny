<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('provider_id')->constrained('providers')->cascadeOnDelete();
            $table->enum('status',['pending','accepted','rejected','completed'])->default('pending');
            $table->enum('payment_status',['not_payed','payed'])->default('not_payed');
            $table->double('total')->default(0);  //600
            $table->double('total_deposit')->default(0);  //200
            $table->double('coupon_discount')->default(0);
            $table->double('remain')->default(0);  //400
            $table->string('coupon')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
