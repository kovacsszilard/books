<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\Book::class, 1000)->create();
        // $this->call(UserSeeder::class);
//        DB::table('books')->insert([
//            'title' => Str::random(10),
//            'author' => Str::random(10),
//            'category' => Str::random(10),
//            'piece' => 5,
//        ]);
    }
}
