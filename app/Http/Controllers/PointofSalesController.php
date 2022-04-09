<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ProductList;
use Illuminate\Http\Request;

class PointofSalesController extends Controller
{
    //
    public function index()
    {
        $productlist = ProductList::orderBy('id', 'asc')->get();
        $category = Category::orderBy('id', 'asc')->get();
        return view('point-of-sales', [
            'title' => 'AlanCreative',
            'productlist' => $productlist,
            'category' => $category,
        ]);
    }
}
