<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('ar_title')->nullable();
            $table->string('en_title')->nullable();
            $table->text('ar_description')->nullable();
            $table->text('en_description')->nullable();
            $table->string('image')->nullable();
            $table->enum('is_active',['active','inactive'])->default('active');
            $table->enum('place',['header','footer','both'])->default('both');
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
        Schema::dropIfExists('pages');
    }
}
