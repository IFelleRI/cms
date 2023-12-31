<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\File;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('file_references', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('file_id')->index()->unsigned();
            $table->foreign('file_id')->references('id')->on('files');
            $table->string('model_name');
            $table->integer('model_id');
            $table->string('type');
            $table->integer('sort_index')->nullable();;
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
