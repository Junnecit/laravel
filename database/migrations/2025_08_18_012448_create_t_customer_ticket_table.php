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
        Schema::create('t_customer_ticket', function (Blueprint $table) {
            $table->id();
            $table->string("customer_Name");
            $table->string("Subject");
            $table->string("Category");
            $table->string("Priority");
            $table->string("Status");
            $table->string("Assigned_to");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_customer_ticket');
    }
};
