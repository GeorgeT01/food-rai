<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('email_2')->nullable();
            $table->string('phone')->nullable();
            $table->string('logo')->nullable();
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->string('geocode');
            $table->string('meta_title');
            $table->string('meta_tag_description')->nullable();
            $table->string('meta_tag_keywords')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('vk')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('viber')->nullable();
            $table->string('telegram')->nullable();
            $table->boolean('open')->default(0);
            $table->boolean('has_delivery')->default(0);
            $table->text('about')->nullable();
            $table->double('min_fee')->default(0);
            $table->double('delivery_fee')->default(0);
            $table->string('currency');
            $table->text('delivery_hours')->nullable();
            $table->text('opening_hours')->nullable();
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
        Schema::dropIfExists('stores');
    }
}
