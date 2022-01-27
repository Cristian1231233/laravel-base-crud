<?php

use Illuminate\Database\Seeder;
use App\Book;
use Illuminate\Support\Str;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = config('comics');

        foreach($books as $book){

            $new_book = new Book();

            $new_book->name = $book['title'];
            $new_book->description = $book['description'];
            $new_book->image = $book['thumb'];
            $new_book->price = $book['price'];
            $new_book->series = $book['series'];
            $new_book->date = $book['sale_date'];
            $new_book->type = $book['type'];
            $new_book->slug = Str::slug
            ($new_book->name, '-');
            $new_book->save();
        }
    }
}
