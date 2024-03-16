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
        Schema::create('distance_locations', function (Blueprint $table) {
            $table->id();
            $table->string('drop_point')->nullable(false);
            $table->string('kabupaten')->nullable(false);
            $table->string('kecamatan')->nullable(false);
            $table->string('kelurahan')->nullable(false);
            $table->double('jarak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distance_locations');
    }
};
