<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;

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
        $products = Product::all();
        return view('toko/admin', compact('products'));
    }

    public function customers()
    {
        $customers = Customer::all();
        return view('toko/customers', compact('customers'));
    }

    public function create()
    {
        return view('toko/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        Product::create($request->all());
        return redirect()->route('produk.admin')->with('success', 'Product created successfully');
    }

    public function edit(Product $product)
    {
        return view('toko/edit', compact('product'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('produk.admin')->with('success', 'Product deleted successfully');
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product->update($request->all());
        
        return redirect()->route('produk.admin')->with('success', 'Product updated successfully');
    }

    public function input()
    {
        return view('toko/input');
    }

    public function toko(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'no_hp' => 'required'
        ]);

        Customer::create($request->all());
        return redirect()->route('pelanggan.customers')->with('success', 'Customer created successfully');
    }

    public function ubah(Customer $customer)
    {
        return view('toko/ubah', compact('customer'));
    }

    public function hapus(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('pelanggan.customers')->with('success', 'Customer deleted successfully');
    }

    public function perbarui(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'no_hp' => 'required',
        ]);

        $customer->update($request->all());
        
        return redirect()->route('pelanggan.customers')->with('success', 'Customer updated successfully');
    }
}
