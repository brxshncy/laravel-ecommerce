<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.product');
    }
    public function categories(){
        return view('admin.categories');
    }
}
