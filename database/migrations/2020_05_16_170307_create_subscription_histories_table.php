<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('subscription_id')->nullable();
            $table->string('reference')->nullable();
            $table->string('service');
            $table->string('home_address');
            $table->string('school_address');
            $table->string('trajectory');
            $table->string('phone_number');
            $table->integer('children_number')->nullable();
            $table->foreign('subscription_id')->references('id')->on('subscriptions')->onDelete('set null');
            $table->timestamp('created_at', 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscription_histories');
    }
}
