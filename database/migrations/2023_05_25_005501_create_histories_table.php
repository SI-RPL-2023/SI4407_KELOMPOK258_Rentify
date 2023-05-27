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
        Schema::create('histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger("id_property")->unsigned()->index()->nullable();
            $table->foreign('id_property')->references('id')->on('properties')->onDelete('cascade');
            $table->bigInteger('id_user')->unsigned()->index()->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('id_reservasi')->unsigned()->index()->nullable();
            $table->foreign('id_reservasi')->references('id')->on('reservations')->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histories');
    }
};
