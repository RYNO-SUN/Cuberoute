<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Variants;

class VariantsController extends Controller
{
    public function index() 
    {
    $varients = Variants::all()->toArray();
    return view('varients' , compact('varients'));

    }

        public function edit($editvariant)
        {
  
        $editvarient = Variants::find($editvariant);
        return view('editvarient' , compact( 'editvariant'  ));

        }



        public function update(Request $request , $editvariant)

        {
        $editinput = $request->all();

        $editvariant = Variants::find($editvariant);
        $editvariant->sap_product_code = $editinput['sap_product_code'];
        $editvariant->web_product_code = $editinput['web_product_code'];
        $editvariant->name = $editinput['name'];
        $editvariant->save();
        return redirect('varients');
       

        }

    public function destroy($delete){

        Variants::find($delete)->delete();
        return redirect()->back();
    }
}
