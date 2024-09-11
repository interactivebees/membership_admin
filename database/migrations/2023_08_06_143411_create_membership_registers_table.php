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
        Schema::create('hospital_categories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('slug');
            $table->integer('price')->default(0);
            $table->integer('discounted_price')->default(0);
            $table->string('currency_code')->default('INR')->comment('INR == Indian Rupee, Dollar');
            $table->string('currency_symbol')->default('₹')->comment('₹ == Rupee, $ == Dollar');
            $table->boolean('status')->default(1)->comment('1 == Active,0 == De-active');
            $table->timestamps();
        });
        Schema::create('membership_registers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('hospital_categories_id');
            $table->foreign('hospital_categories_id')->references('id')->on('hospital_categories')
                ->onDelete('cascade');

            $table->string('organization_name')->nullable();
            $table->string('numbers_of_beds_in_hospital')->nullable();
            $table->json('hospital_address')->nullable();

            $table->string('pan_no')->nullable();
            $table->string('gst_registration_number')->nullable();
            $table->string('hospital_mobile')->nullable();
            $table->json('hospital_social')->nullable();

            $table->string('hospital_logo')->nullable();

            $table->string('accreditation_category')->nullable();
            $table->string('tier_classification')->nullable();
            $table->string('hospital_location')->nullable();
            $table->string('core_services_hospital')->nullable();
            $table->string('support_services_hospital')->nullable();
            $table->string('diagnostic_centre')->nullable();

            $table->json('organization_head')->nullable();
            $table->json('contact_person_representing_organization_one')->nullable();
            $table->json('contact_person_representing_organization_two')->nullable();
            $table->boolean('status')->default(0)->comment('0 == De-active, 1 == Active, 2 == Delete');
            $table->timestamps();
        });

        Schema::create('membership_register_details', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('membership_register_id');
            $table->foreign('membership_register_id')->references('id')->on('membership_registers')->onDelete('cascade');
            $table->integer('amount')->default(0);
            $table->integer('discounted_amount')->default(0);
            $table->string('currency_code')->default('INR')->comment('INR == Indian Rupee, Dollar');
            $table->date('msd');
            $table->date('med');
            $table->string('payment_mood');
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
        Schema::dropIfExists('hospital_categories');
        Schema::dropIfExists('membership_registers');
    }
};
