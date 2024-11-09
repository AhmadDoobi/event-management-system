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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('content'); // The actual comment content
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // User who made the comment
            $table->foreignId('event_id')->nullable()->constrained('events')->onDelete('cascade'); // Event associated with the comment (if any)
            $table->foreignId('task_id')->nullable()->constrained('tasks')->onDelete('cascade'); // Task associated with the comment (if any)
            $table->timestamp('date')->useCurrent(); // Comment creation date
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
