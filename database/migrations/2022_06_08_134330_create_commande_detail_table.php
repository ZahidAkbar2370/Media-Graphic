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
        Schema::create('commande_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('commande_id');
            $table->string('orientation',255)->nullable();
            $table->string('cover_transparent',255)->nullable();
            $table->string('cover',255)->nullable();
            $table->string('paper',255)->nullable();
            $table->string('black_and_white_pages',255)->nullable();
            $table->string('color_pages',255)->nullable();
            $table->string('no_of_pages',255)->nullable();
            $table->string('weight',255)->nullable();
            $table->string('print_size',255)->nullable();
            $table->string('back_print',255)->nullable();
            $table->string('back_color',255)->nullable();
            $table->string('binding_type',255)->nullable();
            $table->string('comment',255)->nullable();
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
        Schema::dropIfExists('commande_detail');
    }
};
