<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = DB::table('categories')->truncate();

        $category = new Category();
        $category->name = 'Agriculture';
        $category->parent = 0;
        $category->save();

        $result = DB::table('categories')->where('name', 'Agriculture')->first();
        $new_category_id = $result->id;


        $category = new Category();
        $category->name = 'Agricultural Greenhouses';
        $category->parent = $new_category_id;
        $category->save();

        $category = new Category();
        $category->name = 'Animal husbandry';
        $category->parent = $new_category_id;
        $category->save();

        $category = new Category();
        $category->name = 'Oils & Extracts';
        $category->parent = $new_category_id;
        $category->save();

        $category = new Category();
        $category->name = 'Fruits';
        $category->parent = $new_category_id;
        $category->save();

        $category = new Category();
        $category->name = 'Vegetables';
        $category->parent = $new_category_id;
        $category->save();


        $category = new Category();
        $category->name = 'Apparel & Clothing';
        $category->parent = 0;
        $category->save();

        $result = DB::table('categories')->where('name', 'Apparel & Clothing')->first();
        $new_category_id = $result->id;

        $category = new Category();
        $category->name = 'Womens Clothing';
        $category->parent = $new_category_id;
        $category->save();

        $category = new Category();
        $category->name = 'Garment Accessories';
        $category->parent = $new_category_id;
        $category->save();

        $category = new Category();
        $category->name = 'Sportswear';
        $category->parent = $new_category_id;
        $category->save();

        $category = new Category();
        $category->name = 'T-Shirts';
        $category->parent = $new_category_id;
        $category->save();

        $category = new Category();
        $category->name = 'Dresses';
        $category->parent = $new_category_id;
        $category->save();

        $category = new Category();
        $category->name = 'Coats';
        $category->parent = $new_category_id;
        $category->save();


        $category = new Category();
        $category->name = 'Automobiles';
        $category->parent = 0;
        $category->save();

        $result = DB::table('categories')->where('name', 'Automobiles')->first();
        $new_category_id = $result->id;


        $category = new Category();
        $category->name = 'Auto Parts';
        $category->parent = $new_category_id;
        $category->save();

        $category = new Category();
        $category->name = 'Auto Electronics';
        $category->parent = $new_category_id;
        $category->save();

        $category = new Category();
        $category->name = 'Auto Engine System';
        $category->parent = $new_category_id;
        $category->save();

        $category = new Category();
        $category->name = 'Auto Accessories';
        $category->parent = $new_category_id;
        $category->save();

        $category = new Category();
        $category->name = 'Motorcycle & Bikes';
        $category->parent = $new_category_id;
        $category->save();

        $category = new Category();
        $category->name = 'Auto Electrical System';
        $category->parent = $new_category_id;
        $category->save();

    }
}
