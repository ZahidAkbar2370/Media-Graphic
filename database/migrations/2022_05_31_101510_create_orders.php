<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->biginteger('user_id');
            $table->biginteger('quotation_id');
            $table->text('description');
            $table->text('image');
            $table->double('amount_include_tax',11,2);
            $table->double('amount_exclude_tax',11,2);
            $table->string('payment_via',50)->nullable();
            $table->text('charge_id')->nullable();
            $table->tinyInteger('status')->default(0);
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
};
