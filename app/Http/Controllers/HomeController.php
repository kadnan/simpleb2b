<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        $entries = [];
        $entries[] = ['title' => 'I want to buy clothes','url' => 'http://example.com'];
        $entries[] = ['title' => 'I want to buy shows','url' => 'http://example.com'];
        return view('home')
            ->with('entries',$entries)
            ->with('title_latest_product','Latest Products')
            ->with('title_latest_buyoffers','Latest BuyOffers');
    }
}
