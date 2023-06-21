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
        Schema::create('file_references', function (Blueprint $table) {
            $table->id();
            $table->integer('file_id');
            $table->string('model_name');
            $table->integer('model_id');
            $table->string('type');
            $table->integer('sort_index');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_references');
    }
};
