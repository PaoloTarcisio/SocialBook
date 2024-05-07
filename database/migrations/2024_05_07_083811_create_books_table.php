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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('Author', 64);
            $table->string('Title', 64);
            $table->string('Cover', 511)->nullable();
            $table->text('Plot', 4095)->nullable();
            $table->string('ISBN', 13)->nullable();
            $table->string('Publisher', 64)->nullable();
            $table->boolean('Published')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
