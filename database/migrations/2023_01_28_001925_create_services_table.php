<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('ar_title')->nullable();
            $table->string('en_title')->nullable();
            $table->text('ar_description')->nullable();
            $table->text('en_description')->nullable();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->double('deposit')->nullable();
            $table->double('price')->nullable();
            $table->enum('is_active',['active','inactive'])->default('active');
            $table->enum('is_recommend',['active','inactive'])->default('inactive');
            $table->enum('is_sponsored',['active','inactive'])->default('inactive');
            $table->foreignId('provider_id')->nullable()->constrained('providers')->cascadeOnDelete();
            $table->foreignId('event_id')->nullable()->constrained('events')->nullOnDelete();
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
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
        Schema::dropIfExists('services');
    }
}
