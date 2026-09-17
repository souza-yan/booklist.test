<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // pelo book factory create many vc insere os dados dos quais pode inserir e passa os dados q serão preenchidos
        // Book::factory(4)->createMany([
        //     [
        //         'title' => 'O Grande Gatsby',
        //         'author' => 'F. Scott Fitzgerald',
        //         'genre' => 'Ficção',
        //         'published_year' => 1925,
        //         'description' => 'O Grande Gatsby é um romance de 1925 do escritor americano F. Scott Fitzgerald. Situado na Era do Jazz em Long Island, o romance retrata as interações do narrador Nick Carraway com o misterioso milionário Jay Gatsby e a obsessão de Gatsby em se reunir com seu antigo amor, Daisy Buchanan.',
        //     ],
        //     [
        //         'title' => 'Harry Potter e a Pedra Filosofal',
        //         'author' => 'J.K. Rowling',
        //         'genre' => 'Fantasia',
        //         'published_year' => 1997,
        //         'description' => 'Harry Potter e a Pedra Filosofal é um romance de fantasia escrito pela autora britânica J.K. Rowling. É o primeiro romance da série Harry Potter e seu sucessor é Harry Potter e a Câmara Secreta.',
        //     ],
        // ]);

        // aqui vc usa a factory para inserir os atributos automaticamente sem a necessidade de passar parametros e dados
        Book::factory(8)->create();
    }
}
