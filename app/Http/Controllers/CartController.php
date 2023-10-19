<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\OrdersRadi;
use App\Models\Identifications;
use GuzzleHttp\Client;
use Stripe;
use App\Models\Affiliates;
use Hashids\Hashids;
use Mail;



class CartController extends Controller
{
    public function add(Request $request){
        // dd($request->all());

        if($request->color == 1 ){
            $color = 'blue';
            $image = 'https://i.ibb.co/K5QgHVj/Nombre-de-tu-mascota-4.png';
        }else if($request->color == 2){
            $color = 'black';
            $image = 'https://i.ibb.co/vzqYRGs/Nombre-de-tu-mascota-5.png';

        }else if($request->color == 3){
            $color = 'red';
            $image = 'https://i.ibb.co/d6kM24J/Nombre-de-tu-mascota-7.png';

        }else if($request->color == 4){
            $color = 'green';
            $image = 'https://i.ibb.co/BGN992R/Nombre-de-tu-mascota-8.png';

        }else if($request->color == 5){
            $color = 'pink';
            $image = 'https://i.ibb.co/nDW0HyW/Nombre-de-tu-mascota-6.png';
        }
        $price =   $request->model == 2? '289':'269';
        $pet_name = $request->model == 2?$request->pet_name:'Radi Pets';
        $type = $request->model == 2? 'Personalizada':'Sin personalizar';

        Cart::add([
            'id' => Carbon::now()->timestamp,
            'name' => 'Placa de identificación',
            'price' => $price,
            'quantity' => '1',
            'attributes' => array(
                'image' => $image,
                'color' => $color,
                'type' => $type,
                'pet_name' => ucfirst($pet_name)
            )
        ]);

        return redirect('checkout')->with('success','Se agrego al carrito');
    }

    public function statuscart(){
        return view('success');
    }

    public function buy(Request $request){
        // dd($request->all());
        $id_user = 0;

        if($request->cookie('affiliate')){
            $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
            $id_user = $hashids->decode($request->cookie('affiliate'));
        }

        $stripe = Stripe::setApiKey(env('STRIPE_ID'));

            try{
                // $token = $stripe->tokens()->create([
                //     'card' => [
                //         'number' => $request->get('card-no'),
                //         'exp_month' => $request->get('month-expiry'),
                //         'exp_year' => $request->get('year-expiry'),
                //         'cvc' => $request->get('credit-cvc'),
                //     ],
                //   ]);

                //   if (!isset($token['id'])) {
                //     return redirect()->route('stripe.add.money');
                // }
                dd($request->all());

                $charge = $stripe->charges()->create([
                    "source" => $request->stripeToken,
                    'currency' => 'MXN',
                    // 'amount' => Cart::getTotal(),
                    'amount' => 10,
                    'description' => 'Compra en Radi Pets',
                ]);

                if($charge['status'] == 'succeeded'){

                    $user_name =    $request->get('name');
                    $email =   $request->get('email');
                    $phone =   $request->get('cellphone');

                    $address =   $request->get('billing-address').', '.$request->get('billing-neighborhood').', '.$request->get('billing-city').', '.$request->get('billing-zip');
                    $shipping = 'normal';

                    $cantidad = 0;
                    foreach(Cart::getContent() as $product){
                        $cantidad += 1;

                        $name = $product->name;
                        $sku = '0001';
                        $id_tag = 'RD'.Str::random(7);
                        $url_tag = 'https://media.hovercode.com/media/codes/82264cfd-1f78-4b0b-9585-28338a0b8db8.png';
                        $quantity = 1;
                        $color =  $product->attributes->color;
                        $pricing = $product->price;
                        $pet_name = $product->attributes->pet_name;
                        $total   = $pricing*$product->quantity;
                        $product->attributes->color;

                        $identification = new Identifications([
                            'code' => $id_tag,
                            'url'  => 'https://radi.pet/pets/'.$id_tag,
                            'version' => 2,
                            'color' => $color
                        ]);

                        $identification->save();

                        $payload = [
                            "url"   => 'https://radi.pet/pets/'.$id_tag,
                            "color" => $color
                        ];

                        $client = new \GuzzleHttp\Client();
                        $res = $client->post('localhost:8080/generateQR', [
                            'json' => $payload,
                        ]);

                        $resp =  json_decode($res->getBody()->getContents());
                        $url_tag  = $resp->data;


                        $product = new OrdersRadi([
                            'product_name'    =>  $name,
                            'sku'             =>  $sku,
                            'id_tag'          =>  $id_tag,
                            'url_tag'         =>  $url_tag,
                            'quantity'        =>  $quantity,
                            'color'           =>  $color,
                            'size'            =>  $product->attributes->size,
                            'gender'          =>  $product->attributes->gender,
                            'specie'          =>  $product->attributes->specie,
                            'allergies'       =>  $product->attributes->allergies,
                            'pricing'         =>  $pricing,
                            'shipping'        =>  $shipping,
                            'email'           =>  $email,
                            'phone'           =>  $phone,
                            'user_name'       =>  ucfirst($request->get('name')),
                            'pet_name'        =>  $pet_name,
                            'notes'           =>  $request->get('notes').', AID:'.$request->cookie('affiliate')?$request->cookie('affiliate'):'N/A',
                            'address'         =>  ucfirst($address),
                            'total'           =>  $total,
                            'status'          =>  3,
                        ]);
                        $product->save();


                        // generar ganancias
                        if($id_user != 0){
                            $affiliates = new Affiliates([
                                'id_user' => $id_user[0],
                                'status'  => 1,
                                'amount' => 30.50,
                                ]);
                            $affiliates->save();
                        }

                    }

                    $data["email"] = $request->email;
                    $data["title"] = "Gracias por tu confianza";
                    $data["body"]  = "Recibo de tu compra en Radi Pets la situación.";
                    $data["total"] = $total;
                    $data["info"] = Cart::getContent();
                    $data["delivery"] = Carbon::now()->addDays(10);

                    Mail::send('mail.receipt', $data, function($message)use($data) {
                        $message->to($data["email"])
                                ->subject($data["title"]);
                    });

                    // enviar correo

                    Cart::clear();
                    return redirect()->route('cart.status')->with('success','Compra exitosa');
                }

            }catch (Exception $e) {
                return redirect()->route('cart.status')->with('error',$e->getMessage());
            } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
                return redirect()->route('cart.status')->with('error','Tarjeta declinada, intente con otra.');
            } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
                dd($e->getMessage());
                return redirect()->route('cart.status')->with('error','Información incorrecta, verifica tus datos');
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
