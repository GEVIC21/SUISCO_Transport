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
            $table->bigIncrements('id');
            $table->string('reference')->nullable();
            $table->string('service');
            $table->string('home_address');
            $table->string('school_address');
            $table->string('trajectory');
            $table->string('phone_number');
            $table->integer('children_number')->nullable();
            $table->date('enforcement_date')->nullable();
            $table->timestamp('request_date', 0)->nullable();
            $table->timestamp('updated_at', 0)->nullable();
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
        Schema::dropIfExists('subscriptions');
    }
}
