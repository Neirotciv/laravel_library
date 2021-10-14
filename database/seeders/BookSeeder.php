<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
            'title' => "1984",
            'author' => "George Orwell",
            'publication_year' => 1984,
            'genre' => "Science Fiction",
            'synopsis' => "En 1984, après une catastrophe dévastatrice, le monde est divisé en 3 blocs. ",
            ],
            [
            'title' => "Appel de la forêt",
            'author' => "Jack London",
            'publication_year' => 1903,
            'genre' => "Aventure",
            'synopsis' => "Buck est un chien de Californie qui appartient au juge Miller. ",
            ],
            [
            'title' => "L'Univers dans une coquille de noix",
            'author' => "Stephen Hawking",
            'publication_year' => 2001,
            'genre' => "Scientifique",
            'synopsis' => "Après Une brève histoire du temps et Trous noirs et bébés univers, ",
            ]
        ]
    );
    }
}
