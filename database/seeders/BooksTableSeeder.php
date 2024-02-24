<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            ['title' => 'Clean Code', 'author' => 'Robert C. Martin'],
            ['title' => 'The Pragmatic Programmer', 'author' => 'Andrew Hunt, David Thomas'],  
        ]);
    }
}
