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
        Schema::create('information_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('info_id');
            $table->string("name");
            $table->longText("description")->nullable();
            $table->longText("url");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information_documents');
    }
};
