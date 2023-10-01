<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Carbon\Carbon;

class CartController extends Controller
{
    public function add(Request $request){
        // dd($request->all());

        if($request->color == 1 ){
            $color = 'Azul';
            $image = 'https://i.ibb.co/jDGpDYN/1.png';
        }else if($request->color == 2){
            $color = 'Negro';
            $image = 'https://i.ibb.co/Bj38GHv/2.png';

        }else if($request->color == 3){
            $color = 'Rojo';
            $image = 'https://i.ibb.co/BcJKpXp/5.png';

        }else if($request->color == 4){
            $color = 'Verde';
            $image = 'https://i.ibb.co/m4hd0fc/4.png';

        }else if($request->color == 5){
            $color = 'Rosa';
            $image = 'https://i.ibb.co/z8jDHfK/3.png';

        }
        $price =   $request->model == 1? '269':'289';
        $pet_name = $request->model == 2?$request->pet_name:'Radi Pets';
        $type = $request->model == 2? 'Personalizada':'Sin personalizar';

        Cart::add([
            'id' => Carbon::now()->timestamp,
            'name' => 'Placa de identificación '.$color.' - '.$type,
            'price' => $price,
            'quantity' => '1',
            'attributes' => array(
                'image' => $image,
                'pet_name' => ucfirst($pet_name)
            )
        ]);

        return redirect('checkout')->with('success','Se agrego al carrito');
    }

    public function buy(Request $request){
        dd($request->all());

         $stripe = Stripe::setApiKey(env('STRIPE_ID'));

        //  compra

            try{
                $token = $stripe->tokens()->create([
                    'card' => [
                        'number' => $request->get('card-no'),
                        'exp_month' => $request->get('credit-expiry'),
                        'exp_year' => $request->get('ccExpiryYear'),
                        'cvc' => $request->get('credit-cvc'),
                    ],
                  ]);

                  if (!isset($token['id'])) {
                    return redirect()->route('stripe.add.money');
                }

                $charge = $stripe->charges()->create([
                    'card' => $token['id'],
                    'currency' => 'MXN',
                    'amount' => Cart::getTotal(),
                    'description' => 'Compra en Radi Pets',
                ]);

                if($charge['status'] == 'succeeded'){

                }
            }catch (Exception $e) {
                return redirect()->route('cart.checkout')->with('error',$e->getMessage());
            } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
                return redirect()->route('cart.checkout')->with('error','Tarjeta declinada, intente con otra.');
            } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
                return redirect()->route('cart.checkout')->with('error','Información incorrecta, verifica tus datos');
            }
    }

    public function checkout(){
        // dd(Cart::getTotal());
        $products = Cart::getContent();
        return view('home.checkout',compact('products'));

    }

    public function remove($id){

        Cart::remove([
            'id' => $id
        ]);

         return back()->with('success','Se elimino producto del carrito');

    }

    public function clear(){
        Cart::clear();
    }
}
