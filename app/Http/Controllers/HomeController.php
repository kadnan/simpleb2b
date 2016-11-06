<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SellOffer;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        $latest_sell_offers = [];
        $latest_products = [];
        $featured_products = [];

        $categories = Category::getParentCategories();
        $products = Product::getLatest(5);
        foreach ($products as $product) {
            $latest_products[] = ['title' => $product->title, 'url' => 'http://example.com/' . $product->id];
        }

        $featured = Product::getItemsWithImage(8);
        foreach ($featured as $featured_product) {
            $images = $featured_product->images;
            $images = json_decode($images, true);
            $featured_products[] = [
                'title' => $featured_product->title,
                'url' => 'http://example.com/' . $featured_product->id,
                'image' => count($images) > 0 ? $images[0] : ''
            ];
        }
        $offers = SellOffer::getLatest(5);
        foreach ($offers as $offer) {
            $latest_sell_offers[] = ['title' => $offer->title, 'url' => 'http://example.com/' . $offer->id];
        }

        return view('home')
            ->with('categories', $categories)
            ->with('latest_sell_offers', $latest_sell_offers)
            ->with('latest_products', $latest_products)
            ->with('featured', $featured_products);
    }
}
