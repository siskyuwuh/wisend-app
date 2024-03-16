<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('shipper_name', 100)->nullable(false);
            $table->string('shipper_phone', 15)->nullable(false);
            $table->text('shipper_address', 250)->nullable(false);
            $table->string('recipient_name', 100)->nullable(false);
            $table->string('recipient_phone', 15)->nullable(false);
            $table->text('recipient_address', 250)->nullable(false);
            $table->unsignedBigInteger('bkg_destination')->nullable();
            $table->integer('bkg_service')->nullable(false);
            $table->integer('p')->nullable();
            $table->integer('l')->nullable();
            $table->integer('t')->nullable();
            $table->decimal('dimensional_weight')->nullable();
            $table->decimal('actual_weight')->nullable();
            // $table->bigInteger('booking_status');
            $table->timestamps();


            $table->foreign('bkg_destination')->references('id')->on('distance_locations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
