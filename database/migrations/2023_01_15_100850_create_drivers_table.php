<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone_number');
            $table->string('engine_chasis_no')->nullable();
            $table->string('driver_licence_no');
            $table->string('passport');
            $table->integer('lga_id');
            $table->string('tax_id')->unique();
            $table->text('address')->nullable();
            $table->string('plate_no');
            $table->unsignedInteger('vehicle_type');
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
        Schema::dropIfExists('drivers');
    }
}
