<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Importazione Models
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // elimino tutti gli elementi presenti in Book
        Book::truncate();


        // Assegno i valori creati tramite faker alle colonne
        for ($i = 0; $i < 25; $i++) {

            // Creo un nuovo oggetto di classe book
            $book = new Book();

            $book->Author = fake()->name();
            $book->Title = fake()->words(rand(1, 5), true);
            $book->Plot = fake()->Text(100, 300);
            $book->ISBN = fake()->isbn13();
            $book->Published = rand(0, 1);

            $book->save();
        }
    }
}
