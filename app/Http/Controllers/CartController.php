<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function add(Request $req){
        // dd($req->all());


        Cart::add([
            'id' => '2',
            'name' => 'Placa de identificación roja - Personalizada',
            'price' => '289.00',
            'quantity' => '1',
            'attributes' => array(
                'image' => 'https://i.ibb.co/z8jDHfK/3.png',
                'pet_name' => 'Radiador'
            )
        ]);

        return redirect('checkout')->with('success','Se agrego al carrito');
    }

    public function checkout(){
        $products = Cart::getContent();
        return view('home.checkout',compact('products'));

    }

    public function remove(Request $req){
        Cart::remove([
            'id' => 1
        ]);

         return back()->with('success','Se elimino producto del carrito');

    }

    public function clear(){
        Cart::clear();
    }
}
