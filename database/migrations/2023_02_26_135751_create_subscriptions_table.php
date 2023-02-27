<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('name_en');
            $table->integer('service_count')->default(1)->comment('عدد الخدمات');
            $table->integer('service_image_count')->default(1)->comment('عدد الصور في الخدمة الواحدة');
            $table->integer('days_count')->default(1)->comment('عدد ايام الاشتراك');
            $table->double('price')->default(0)->comment('سعر الاشتراك');
            $table->tinyInteger('is_video')->default(0)->comment('هل الاشتراك يدعم الفيديو ام لا');
            $table->enum('is_active', ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('subscriptions');
    }
}
