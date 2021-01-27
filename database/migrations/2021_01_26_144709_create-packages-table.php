<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('tracking_id')->unique();
            $table->string('sender_name');
            $table->string('sender_location');
            $table->string('receiver_name');
            $table->string('receiver_email');
            $table->string('receiver_phonenumber');
            $table->text('receiver_address');
            $table->string('destination');
            $table->string('delivery_date');
            $table->text('description');
            $table->string('weight');
            $table->string('cost');
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
        Schema::dropIfExists('packages');
    }
}
