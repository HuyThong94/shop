<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_type(){
        return view('pages.product_type');
    }
    public function product(){
        return view('pages.product');
    }
}
