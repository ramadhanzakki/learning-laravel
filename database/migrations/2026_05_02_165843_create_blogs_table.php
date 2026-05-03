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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blogTitle');
            $table->foreignId('author_id')->constrained(
                table: 'users', 
                indexName: 'blogs_user_id'
            );
            $table->string('slug')->unique();
            $table->foreignId('category_id')->constrained(
                table: 'categories', 
                indexName: 'blogs_category_id'
            );
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
