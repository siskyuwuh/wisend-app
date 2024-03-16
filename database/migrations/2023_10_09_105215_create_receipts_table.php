<?php

use App\Models\Booking;
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
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('booking_id')->nullable(false);
            $table->char('receipt_id', 15)->nullable(false)->unique();
            $table->char('shipment_id')->unique()->nullable();
            $table->string('shipment_status')->nullable(false);
            $table->integer('weight_charge')->nullable();
            $table->float('dist_charge')->nullable();
            // $table->string('photos')->nullable();
            $table->bigInteger('item_value')->nullable();
            $table->bigInteger('cod_fee')->nullable();
            $table->bigInteger('ovl_cost')->nullable(false);
            $table->timestamps();


            $table->foreign('booking_id')->on('bookings')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipts');
    }
};
