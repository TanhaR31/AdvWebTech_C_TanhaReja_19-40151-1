<?php

namespace App\Http\Controllers;
use App\Models\SellerProduct;

use Illuminate\Http\Request;

class SellerProductAPIController extends Controller
{
    //
    public function list(){
        $products = SellerProduct::all();
        return $products;
    }
}
