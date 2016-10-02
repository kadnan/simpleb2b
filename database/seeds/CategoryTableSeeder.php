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

        /**
         * Add Subcategory of Agriculture
         */
        $category = new Category();
        $category->name = 'Agricultural Greenhouses';
        $category->parent = $new_category_id;
        $category->save();

    }
}
