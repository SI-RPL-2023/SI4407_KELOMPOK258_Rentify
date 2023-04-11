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
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->bigInteger('id_property')->unsigned()->index()->nullable();
            $table->foreign('id_property')->references('id')->on('property');
            $table->bigInteger('id_user')->unsigned()->index()->nullable();
            $table->foreign('id_user')->references('id')->on('users');
            $table->date('tanggal_sewa');
            $table->bigInteger('durasi');
            $table->string('status_pembayaran');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
