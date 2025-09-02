<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_faculty', function (Blueprint $table) {
            $table->id();
            $table->string('department_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('department');
            $table->string('phone_number')->unique();
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_faculty');
    }
};
