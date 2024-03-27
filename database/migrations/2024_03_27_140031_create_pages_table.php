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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lang_id')->nullable();
            $table->foreign('lang_id')
                ->references('id')
                ->on('langs')
                ->nullOnDelete();
            $table->string('charset', 10);
            $table->string('meta_title', 255);
            $table->string('meta_description', 255);
            $table->string('title', 255);
            $table->string('contact_phone', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
