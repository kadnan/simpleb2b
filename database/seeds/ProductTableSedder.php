<?php

use Illuminate\Database\Seeder;

class ProductTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$result = DB::table('products')->truncate();
        $products = factory(App\Product::class, 5)->create();
    }

}
