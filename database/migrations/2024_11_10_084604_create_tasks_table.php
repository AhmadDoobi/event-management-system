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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('category');
            $table->string('status')->default('Pending'); // e.g., Pending, In Progress, Completed
            $table->integer('max_assignments')->default(1);
            $table->unsignedBigInteger('assigned_to_id')->nullable();
            $table->string('assigned_to_type')->nullable();
            $table->foreignId('event_id')->constrained('events')->onDelete('cascade');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->string('created_by_type')->nullable();            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
