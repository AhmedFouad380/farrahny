<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provider_id')->constrained('providers')->restrictOnDelete();
            $table->foreignId('subscription_id')->constrained('subscriptions')->restrictOnDelete();
            $table->integer('service_count')->default(1)->comment('عدد الخدمات');
            $table->integer('service_image_count')->default(1)->comment('عدد الصور في الخدمة الواحدة');
            $table->integer('days_count')->default(1)->comment('عدد ايام الاشتراك');
            $table->double('price')->default(0)->comment('سعر الاشتراك');
            $table->tinyInteger('is_video')->default(0)->comment('هل الاشتراك يدعم الفيديو ام لا');
            $table->date('from_date')->comment('تاريخ بداية الاشتراك');
            $table->date('to_date')->comment('تاريخ نهاية الاشتراك');
            $table->enum('status', ['working', 'finished'])->default('working');
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
        Schema::dropIfExists('provider_subscriptions');
    }
}
