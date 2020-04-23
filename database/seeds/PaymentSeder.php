<?php

use App\Customer;
use Illuminate\Database\Seeder;

class PaymentSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Payment::class, 15)->create();
    }
}
