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
        Schema::create('products_setting', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type')->unsigned();
            $table->biginteger('quantity');
            $table->double('first_day_price',11,2);
            $table->double('second_day_price',11,2);
            $table->double('third_day_price',11,2);
            $table->double('fourth_day_price',11,2);
            $table->tinyinteger('status')->default(1);
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products_setting');
    }
};
