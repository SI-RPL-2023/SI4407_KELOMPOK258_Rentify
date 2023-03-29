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
        Schema::create('property', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('id_penyewa')->references('id')->on('users');
            $table->string('property_name',255);
            $table->string('category',255);
            $table->string('price',255);
            $table->string('availability',255);
            $table->text('description');
            $table->text('lokasi');
            $table->string('image',255);
            $table->string('rating',255);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property');
    }
};
