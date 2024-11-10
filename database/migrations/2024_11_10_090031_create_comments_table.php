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
            $table->unsignedBigInteger('commentable_id'); // ID of the User or GuestUser
            $table->string('commentable_type'); // Model type, either User or GuestUser
            $table->foreignId('task_id')->constrained('tasks')->onDelete('cascade');
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
