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
        Schema::table('users', function ($table) {
            $table->string('title', 10)->after('last_name')->nullable()->default(null);
            $table->unsignedInteger('phone')->after('title')->nullable()->default(null);
            $table->text('delivery_address')->after('phone')->nullable()->default(null);
            $table->string('postal',50)->after('delivery_address')->nullable()->default(null);
            $table->string('city',100)->after('postal')->nullable()->default(null);
            $table->text('billing_address')->after('city')->nullable()->default(null);
            $table->string('billing_postal',50)->after('billing_address')->nullable()->default(null);
            $table->string('billing_city',100)->after('billing_postal')->nullable()->default(null);
            $table->unsignedInteger('service_id',2)->after('billing_city')->nullable()->default(null);
            $table->text('social_reason')->after('service_id')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('title');
            $table->dropColumn('phone');
            $table->dropColumn('delivery_address');
            $table->dropColumn('postal');
            $table->dropColumn('city');
            $table->dropColumn('billing_address');
            $table->dropColumn('billing_postal');
            $table->dropColumn('billing_city');
            $table->dropColumn('service_id');
            $table->dropColumn('service_id');
        });
    }
};
