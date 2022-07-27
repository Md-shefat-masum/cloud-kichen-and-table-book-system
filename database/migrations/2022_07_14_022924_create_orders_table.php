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
            $table->double('total_amount')->nullable();
            $table->string('payment_id',100)->nullable();
            $table->string('payment_status',20)->default('pending');
            $table->string('full_name',100)->nullable();
            $table->string('email',25)->nullable();
            $table->string('phone_number',20)->nullable();
            $table->integer('person')->nullable();
            $table->string('date',20)->nullable();
            $table->string('start_time',50)->nullable();
            $table->string('end_time',50)->nullable();
            $table->text('comment')->nullable();
            $table->text('payment_type')->nullable();
            $table->text('delivery_type')->nullable();
            $table->text('delivery_time')->nullable();
            $table->text('specific_time_watch_value')->nullable();
            $table->string('status',100)->default('pending');
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
