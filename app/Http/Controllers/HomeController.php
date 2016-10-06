<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        $latest_sell_offers = [];
        $latest_products = [];

        $latest_sell_offers[] = ['title' => 'I want to buy clothes', 'url' => 'http://example.com'];
        $latest_sell_offers[] = ['title' => 'I want to buy shows', 'url' => 'http://example.com'];

        $latest_products[] = ['title' => 'Raw Cashew Nuts', 'url' => 'http://example.com'];
        $latest_products[] = ['title' => 'High Quality Coconuts', 'url' => 'http://example.com'];
        return view('home')
            ->with('latest_sell_offers', $latest_sell_offers)
            ->with('latest_products', $latest_products);
    }
}
