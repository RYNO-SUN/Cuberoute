<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Variants;

class CategoriesController extends Controller
{
    public function index() 
    {
    $categories = Categories::all()->toArray();
    $varients = Variants::all()->toArray();
    return view('addproduct' , compact('categories' , 'varients'));
    }

    public function show() 
    {
    $showcategories = Categories::all()->toArray();
    return view('categories' , compact('showcategories'));
    }

    public function EditProductsPage() 
    {
    $EditProductsPage = Categories::all()->toArray();
    return view('editproduct/{id}' , compact('EditProductsPage'));
    }

    public function destroy($deletecategory){

        Categories::find($deletecategory)->delete();
        return redirect()->back();
    }

    public function edit($editcategory)
    {
        $editcategory = Categories::find($editcategory);
        return view('editcategory' , compact( 'editcategory'  ));
    }



    public function update(Request $request , $editcategory)

    {
        $editinput = $request->all();

        $editcategory = Categories::find($editcategory);
        $editcategory->category_name = $editinput['category_name'];
       
        $editcategory->save();
        return redirect('categories');


    }


    public function showCategoryProducts(){
        $showcategories = Categories::all()->toArray();

        return view('showproducts', compact('showcategories'));
    }

}
