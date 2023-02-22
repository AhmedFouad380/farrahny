<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->cascadeOnDelete();
            $table->foreignId('service_id')->nullable()->constrained('services')->onDelete('set null');
            $table->string('service_name');  //600
            $table->double('deposit')->default(0);  //600
            $table->double('price')->default(0);  //600
            $table->double('remain')->default(0);  //600
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->date('date');  //600
            $table->time('time');  //600
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
        Schema::dropIfExists('order_details');
    }
}
