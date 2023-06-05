<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Customers;

class TokoController extends Controller
{
    public function index()
    {
        return view('toko/index');
    }

    public function detail()
    {
        return view('toko/detail');
    }

    public function about()
    {
        return view('toko/about');
    }

    public function admin()
    {
        $products = Produk::all();
        return view('toko/admin', compact('products'));
    }

    public function customers()
    {
        $customers = Customers::all();
        return view('toko/customers', compact('customers'));
    }
}
