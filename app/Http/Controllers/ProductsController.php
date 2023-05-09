<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use App\Models\User;
use App\Models\Variants;

class ProductsController extends Controller
{
    public function index() 
    {
    $products = Products::all()->toArray();
    return view('products' , compact('products'));
    }

    public function frontend() 
    {
    $products = Products::all()->toArray();
    return view('welcome' , compact('products'));
    }

 
    
   
    public function edit($editproduct)
    {
      
        $categories = Categories::all()->toArray();
        $varients = Variants::all()->toArray();
        $editproduct = Products::find($editproduct);
        return view('editproduct' , compact( 'editproduct' , 'categories' , 'varients' ));
    }



public function update(Request $request , $editproduct)

    {
        $editinput = $request->all();

        $editproduct = Products::find($editproduct);
        $editproduct->Product_name = $editinput['Product_name'];
        $editproduct->product_slug = $editinput['product_slug'];
        $editproduct->category_id = $editinput['category_id'];
        $editproduct->varient = $editinput['varient'];
        $editproduct->save();
        return redirect('products');


    }
    public function destroy($editproduct){


    
        Products::find($editproduct)->delete();
        return redirect()->back();
    }

    public function counter()
    {
        $registeredusers = User::count();
        $products = Products::count();
        $categories = Categories::count();
        $varients = Variants::count();
        return view('home' , compact('registeredusers', 'products' , 'categories' , 'varients'));
    }
   
}
