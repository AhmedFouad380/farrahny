<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('ar_button')->nullable();
            $table->string('en_button')->nullable();
            $table->integer('offer')->nullable();
            $table->text('ar_description')->nullable();
            $table->text('en_description')->nullable();
            $table->text('link')->nullable();
            $table->string('image')->nullable();
            $table->enum('is_active',['active','inactive'])->default('active');
            $table->foreignId('created_by')->nullable()->constrained('admins')->nullOnDelete();
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
        Schema::dropIfExists('offer_sliders');
    }
}
