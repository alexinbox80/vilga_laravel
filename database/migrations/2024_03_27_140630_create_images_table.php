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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gallery_id')->nullable();
            $table->foreign('gallery_id')
                ->references('id')
                ->on('galleries')
                ->nullOnDelete();
            $table->unsignedBigInteger('schema_id')->nullable();
            $table->foreign('schema_id')
                ->references('id')
                ->on('schemas')
                ->nullOnDelete();
            $table->unsignedBigInteger('map_id')->nullable();
            $table->foreign('map_id')
                ->references('id')
                ->on('maps')
                ->nullOnDelete();
            $table->text('name');
            $table->text('original_name');
            $table->string('mime');
            $table->string('extension')->nullable();
            $table->bigInteger('size')->default(0);
            $table->integer('sort')->default(0);
            $table->text('path');
            $table->text('description')->nullable();
            $table->text('alt')->nullable();
            $table->text('hash')->nullable();
            $table->string('disk')->default('public');
            $table->string('group')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
