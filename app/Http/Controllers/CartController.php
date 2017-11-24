<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Products;
class CartController extends Controller
{
    function cart(){
        $carts = Cart::content();
        return view('pages.cart',compact(['carts']));
    }

    function cartCreate($productId){
        $product = Products::find($productId);
        Cart::add($product, $product->title, 1, $product->price,['image' => $product->picture]);
        return redirect('/cart');
    }

    function cartEdit($rowId,Request $request){
        Cart::update($rowId, $request->quantity);
        return redirect('/cart');
    }

    function cartRemove($rowId){
        Cart::remove($rowId);
        return redirect('/cart');
    }
}
