<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant_registers', function (Blueprint $table) {
            $table->id();
            $table->string('b_name');
            $table->string('f_name');
            $table->string('M_name');
            $table->string('l_name');
            $table->string('address');
            $table->string('zone');
            $table->string('pincode');
            $table->string('phone');
            $table->string('email');
            $table->string('password');
            $table->string('password_confirmation');
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
        Schema::dropIfExists('merchant_registers');
    }
}
