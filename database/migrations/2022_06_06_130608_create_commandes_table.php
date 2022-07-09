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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('file',255)->nullable();
            $table->text('name')->nullable();
            $table->text('file_format')->nullable();
            $table->string('print',100)->nullable();
            $table->string('works_type',100)->nullable();
            $table->string('paper',100)->nullable();
            $table->string('shaping',100)->nullable();
            $table->bigInteger('desired_copies')->nullable();
            $table->bigInteger('maximum_deliver_copies')->nullable();
            $table->date('deliver_date')->nullable();
            $table->double('subtotal',11,2)->nullable();
            $table->double('tax',11,2)->nullable();
            $table->double('total',11,2)->nullable();
            $table->string('payment_via',255)->nullable();
            $table->text('charge_id')->nullable();
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
        Schema::dropIfExists('commandes');
    }
};
