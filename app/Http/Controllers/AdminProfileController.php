<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Cart;

/*class AdminProfileController extends Controller
{
     public function update(Request $request, $rowId)
    {
        $data = $request->json()->all();
        dd($data);
        Cart::update($rowId, $data['qty']);

        return view('admin.products.index');
    }
    
}

*/
