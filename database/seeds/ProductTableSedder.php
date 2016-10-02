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
        $result = DB::table('products')->truncate();
        //Find User
        $result = DB::table('users')->where('first_name', 'Adnan')->first();
        $user_id = $result->id;

        //constructing images Array
        $images = [
            'http://imgusr.tradekey.com/images/uploadedimages/products/1/2/10658925-20160716113712.jpg',
            'http://imgusr.tradekey.com/p-10658925-20160716074048/kasa-flowers.png'
        ];
        $product = new \App\Product();
        $product->user_id = $user_id;
        $product->title = 'Kasa Flowers';
        $product->description = "Having a modern and updated greenhouse and taking advantages of the latest agricultural methods, Agricultural Business Company of KASA FLOWERS plants Lilium bulbs through hydroponic method.  Aiming to develop and progress the agricultural activities and make the customers satisfied, KASA FLOWERS is ready to bind contract with other companies to fulfill their needs. Now;we believe to take larger steps to export these flowers out of the borders.";
        $product->images = json_encode($images);
        $product->specs = 'Large Size,  Plastic greenhouse';

        $min_qty = ['value' => 1000, 'unit' => 'ton'];
        $product->min_qty = json_encode($min_qty);

        $product->fob_min = 1000;
        $product->fob_max = 4000;
        $product->payment_type = 'paypal';

        $min_qty = ['value' => 4000, 'unit' => 'ton'];
        $product->supply_ability = json_encode($min_qty);
        $product->delivery = 'Within 1 month';
        $product->package_details = 'Lash Pash Package';
        $product->save();
    }
}
