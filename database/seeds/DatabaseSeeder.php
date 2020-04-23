<?php

use App\Category;
use App\Customer;
use App\Payment;
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


        $this->call([
            CustomerSeeder::class,
            CategorySeeder::class,
            PaymentSeder::class,
            BookSeeder::class,
            RentSeeder::class,


        ]);
        // $this->call(UserSeeder::class);
//        DB::table('books')->insert([
//            'title' => Str::random(10),
//            'author' => Str::random(10),
//            'category' => Str::random(10),
//            'piece' => 5,
//        ]);
    }
}
