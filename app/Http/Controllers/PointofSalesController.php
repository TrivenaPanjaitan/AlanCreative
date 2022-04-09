<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\BillDetails;
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
        $bill = Bill::all();
        $billdetails = BillDetails::orderBy('id', 'asc')->get();
        return view('point-of-sales', [
            'title' => 'AlanCreative',
            'productlist' => $productlist,
            'category' => $category,
            'bill' => $bill,
            'billdetails' => $billdetails,
        ]);
    }
}
