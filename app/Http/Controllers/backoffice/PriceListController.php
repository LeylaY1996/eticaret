<?php

namespace App\Http\Controllers\backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PriceListController extends Controller
{
    public function priceList(){
        return view('backoffice.pages.price-list');
    } 
}
