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
        Schema::create('maritals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mother')->nullable();
            $table->date('birth_date')->nullable();
            $table->foreignId('country_id')->nullable();
            $table->foreignId('city_id')->nullable();
            $table->string('address')->nullable();
            $table->date('add_date')->nullable();
            $table->foreignId('block_id')->nullable();
            $table->text('note')->nullable();
            $table->foreignId('bill_id');
            $table->foreignId('user_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maritals');
    }
};
