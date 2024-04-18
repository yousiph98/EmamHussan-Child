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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('family_name')->nullable();
            $table->string('mother')->nullable();
            $table->foreignId('country_id')->nullable();
            $table->foreignId('city_id')->nullable();
            $table->string('address')->nullable();
            $table->bigInteger('phone1')->nullable();
            $table->bigInteger('phone2')->nullable();
            $table->date('birth_date');
            $table->foreignId('status_id')->nullable();
            $table->foreignId('department_id');
            $table->foreignId('position_id')->nullable();
            $table->string('unit')->nullable()->nullable();
            $table->date('commencement_date')->nullable();
            $table->date('breakup_date')->nullable();
            $table->boolean('is_male')->default(true);
            $table->integer('num_card')->nullable();
            $table->text('note')->nullable();
            $table->bigInteger('nid')->nullable();
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
