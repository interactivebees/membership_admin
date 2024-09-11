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
        Schema::create('membership_categories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->integer('validity')->default(1)->comment('0 == Life Time, [1,2,3] Years');
            $table->integer('price')->default(0);
            $table->integer('discounted_price')->default(0);
            $table->string('currency_code')->default('INR')->comment('INR == Indian Rupee, Dollar');
            $table->string('currency_symbol')->default('₹')->comment('₹ == Rupee, $ == Dollar');
            $table->boolean('status')->default(1)->comment('1 == Active,0 == De-active');
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
        Schema::dropIfExists('membership_categories');
    }
};
