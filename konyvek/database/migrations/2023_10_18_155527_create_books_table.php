<?php

use App\Models\Book;
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
            $table->id('book_id');
            $table->string('author', 32);
            $table->longText('title', 150);
            $table->integer('pieces')->default(50);
            $table->timestamps();
        });

        Book::create([
            'author' => 'Ludányi Bettina',
            'title' => 'Thriller',
            'pieces' => 32
        ]);

        Book::create([
            'author' => 'Baráth Viktória',
            'title' => 'Regény',
            'pieces' => 78
        ]);

        Book::create([
            'author' => 'Borsa Brown',
            'title' => 'Regény',
            'pieces' => 102
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
