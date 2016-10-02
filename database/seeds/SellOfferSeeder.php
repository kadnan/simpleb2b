<?php

use Illuminate\Database\Seeder;

class SellOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\SellOffer::class, 5)->create();
    }
}
