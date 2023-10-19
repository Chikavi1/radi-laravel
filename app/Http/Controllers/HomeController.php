<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;
use App\Models\Organizations;
use Hashids\Hashids;
use App\Models\Requests;

use App\Models\User;
use Auth;

use App\Models\Memorial;
use App\Models\MemorialComments;
use App\Models\DiscountsCompanies;
use Cart;
use GuzzleHttp\Client;
use Image;
use App\Models\OrdersRadi;
use App\Models\Identifications;
use Request as req;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use App\Models\Affiliates;


use Symfony\Component\HttpFoundation\Cookie;

class HomeController extends Controller
{
    //

    public function placasbuy(Request $request)
    {

        SEO::setTitle('Placas de identificacion con QR de Radi Pets');
        SEO::setDescription('Conoce las nuevas placas de identificación con código QR');
        SEO::opengraph()->setUrl('https://radi.pet/placas-buy');
        SEO::setCanonical('https://radi.pet/placas-buy');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/placas-fondo.png'));
        SEO::twitter()->setImage(asset('img/placas-fondo.png'));

        // dd(req::cookie('affiliate'));

        if(!req::cookie('affiliate')){
            if($request->aid){
                $response = new Response('Set Cookie');
                return response(view('home.placasbuy'))->withCookie(cookie('affiliate',$request->aid,30240));
            }else{
                return view('home.placasbuy');
            }
        }else{
            return view('home.placasbuy');
        }

    }

    public function garantias(){
        SEO::setTitle('Garantia en las placas de identificacion de Radi Pets');
        SEO::setDescription('Somos la única empresa que ofrece garantía en tus placas');
        SEO::opengraph()->setUrl('https://radi.pet/garantia-placas');
        SEO::setCanonical('https://radi.pet/garantia-placas');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/garantias.png'));
        SEO::twitter()->setImage(asset('img/garantias.png'));
        return view('home.garantias-placas');
    }

    public function generateLogoPlaca($name,$color){
        $BLACK = '#222222';
        $BLUE  = '#004AAD';
        $RED   = '#dc2626';
        $PINK  = '#ec4899';
        $GREEN = '#059669';

        $name = $name == 'null'?'Radi Pets':$name;
        $COLOR = public_path('img/bg-black.png');

        if($color == 'blue'){
            $COLOR = public_path('img/bg-blue.png') ;

        }else if($color == 'red'){
            $COLOR = public_path('img/bg-red.png') ;

        }else if($color == 'pink'){
            $COLOR = public_path('img/bg-pink.png') ;

        }else if($color == 'green'){
            $COLOR = public_path('img/bg-green.png') ;
        }


        $img = Image::make( $COLOR)->resize(1024,1024);
        $img->text($name,512,512,function($font) use($COLOR){
            $font->file(public_path('fonts/Roboto/Roboto-Black.ttf'));

            $font->size(176);
            $font->color('#FFFFFF');
            $font->align("center");
            $font->valign("center");
        });

        return $img->response('jpg');


        $image = $img->encode('jpg');
        $name = '03-10-14'.$name.'.jpg';

        $headers = [
            'Content-Type' => 'image/jpeg',
            'Content-Disposition' => 'attachment; filename='. $name,
        ];

        return response()->stream(function() use ($image) {
            echo $image;
        }, 200, $headers);
    }

    public function downloadQR($id){
        $order = OrdersRadi::findOrFail($id);
        $name = 'QR.png';
        $image = Image::make($order->url_tag)->encode('png');
        $headers = [
            'Content-Type' => 'image/png',
            'Content-Disposition' => 'attachment; filename='. $name,
        ];
        return response()->stream(function() use ($image) {
            echo $image;
        }, 200, $headers);
    }

    public function startguide(){
        return view('startguideid' );
    }

    public function generateThanks($name,$pet_name){
            // $name = 'Saulo';
            // $pet_name = 'Loki';
            $onlyname = explode(" ", $name);
            $name = ucfirst($onlyname[0]);
            $name =  ($name!='Null')?$name:'';

        $img = Image::make(public_path('img/bg-thanks.png'))->resize(1414,2000);
        if($name){
            $img->text('¡Hola '.$name.'!',212,480,function($font){
                $font->file(public_path('fonts/Roboto/Roboto-Light.ttf'));
                $font->size(96);
                $font->color('#17202F');
                $font->align("left");
            });
        }else{
            $img->text('¡Hola!',212,480,function($font){
                $font->file(public_path('fonts/Roboto/Roboto-Light.ttf'));
                $font->size(96);
                $font->color('#17202F');
                $font->align("left");
            });
        }


        $img->text('¡Esperamos que tú y',712,1295,function($font){
            $font->file(public_path('fonts/Roboto/Roboto-Light.ttf'));
            $font->size(85);
            $font->color('#17202F');
            $font->align("center");
        });


        if($pet_name == 'Radi Pets'){
            $img->text('mascota lo disfruten!',712,1400,function($font){
                $font->file(public_path('fonts/Roboto/Roboto-Light.ttf'));

                $font->size(85);
                $font->color('#17202F');
                $font->align("center");
            });
        }else{
            $img->text(ucfirst($pet_name).' lo disfruten!',712,1400,function($font){
                $font->file(public_path('fonts/Roboto/Roboto-Light.ttf'));

                $font->size(85);
                $font->color('#17202F');
                $font->align("center");
            });
        }



        // return $img->response('jpg');


        $image = $img->encode('jpg');
        $name = '03-10-14'.$name.'.jpg';

        $headers = [
            'Content-Type' => 'image/jpeg',
            'Content-Disposition' => 'attachment; filename='. $name,
        ];

        return response()->stream(function() use ($image) {
            echo $image;
        }, 200, $headers);



        // $url = "https://i.ibb.co/59yLsxN/Documento-A4-Portada-trabajo-final-de-carrera-azules-pastel-1.png";
        // $name = 'thanks.png';

        // $image = Image::make($url)->encode('png');
        // $headers = [
        //     'Content-Type' => 'image/png',
        //     'Content-Disposition' => 'attachment; filename='. $name,
        // ];
        // return response()->stream(function() use ($image) {
        //     echo $image;
        // }, 200, $headers);


    }

    public function affiliateprogram(){


        SEO::setTitle('Gana dinero desde casa recomendando placas de identificación de mascotas con tecnología QR.');
        SEO::setDescription('Comparte tu enlace de compra con tu código, ¡y gana dinero sin inversiones ni riesgos! ');
        SEO::opengraph()->setUrl('https://radi.pet/affiliate-program');
        SEO::setCanonical('https://radi.pet/affiliate-program');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/placas-fondo.png'));
        SEO::twitter()->setImage(asset('img/placas-fondo.png'));

        if(Auth::check()){
            $affiliates = Affiliates::where('status',1)->where('id_user', Auth::user()->id );
            $count  = $affiliates->count();
            $amount = $affiliates->sum('amount');
            return view('home.affiliate-program',compact('amount','count'));
        }else{
            return view('home.affiliate-program');
        }
    }

    public function orderCreate(Request $request){
        // OrdersRadi::create

        $name = 'placa';
        $pricing = 299.00;
        $total   = $pricing*$request->get('quantity');
        $status = 1;



        if($request->get('sku') == '0001'){

            $code = 'RD'.Str::random(7);

            $identification = new Identifications([
                'code' => $code,
                'url'  => 'https://radi.pet/pets/'.$code,
                'version' => 2,
                'color' => $request->color
            ]);

            $identification->save();

                $payload = [
                    "url"   => 'https://radi.pet/pets/'.$code,
                    "color" => $request->color
                ];

                $client = new \GuzzleHttp\Client();
                $res = $client->post('https://core.radi.pet/generateQR', [
                    'json' => $payload,
                ]);

              $resp =  json_decode($res->getBody()->getContents());
              $url_tag  = $resp->data;

            if($request->get('pet_name')){
                $pricing = 205;
            }else{
                $pricing = 169;
                $status = 3;
            }
        }

        $product = new OrdersRadi([
            'color' => $request->get('color'),
            'size' => $request->get('size'),
            'gender' => $request->get('gender'),
            'specie' => $request->get('specie'),
            'allergies' => $request->get('allergies'),
            'id_tag'    =>  $code,
            'url_tag'   => $url_tag,

            'product_name'    =>  $name,
            'sku'             =>  $request->get('sku'),
            'quantity'        =>  $request->get('quantity'),
            'pricing'         =>  $pricing,
            'shipping'        =>  $request->get('shipping'),
            'email'           =>  $request->get('email'),
            'phone'           =>  $request->get('phone'),
            'user_name'       =>  ucfirst($request->get('user_name')),
            'pet_name'        =>  $request->get('pet_name')?ucfirst($request->get('pet_name')):'Radi Pets',
            'notes'           =>  $request->get('notes'),
            'address'         =>  ucfirst($request->get('address')),
            'total'           =>  $total,
            'status'          =>  $status,
        ]);

        $product->save();

        return redirect()->back();

    }

    public function orders()
    {
        $products = OrdersRadi::orderBy('id','desc')->get();

        // $products = array([
        //     'product_name'  => '1',
        //     'sku' => 'sad',
        //     'quatinty' => '1',
        //     'pricing' => '169',
        //     'shipping' => 'normal',
        //     'email' => 'chikavi@hotmail.com',
        //     'phone' => '33272742',
        //     'user_name' => 'luis rojas',
        //     'pet_name' => 'radi',
        //     'payment_id' => '2131231dsfdsafvs',
        //     'notes'=> 'momigm',
        //     'address' => 'san mateo',
        //     'total' => '169',
        //     'rating' => null,
        //     'status' => 1
        // ]
        // );


    return view('orders.index',compact('products'));


    }

    public function home()
    {
        SEO::setTitle('La plataforma para los amantes de las mascotas');
        SEO::setDescription('Encuentra lugares pet friendly, adopta a una mascota o apoya a los albergues, todo en un solo lugar.');
        SEO::opengraph()->setUrl('https://radi.pet/');
        SEO::setCanonical('https://radi.pet/');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));


        return view('welcome');

    }


    public function contact()
    {
        SEO::setTitle('Contacta a nuestro equipo');
        SEO::setDescription('Contacta a nuestro equipo de expertos para obtener ayuda y asesoramiento en cualquier tema relacionado con nuestros servicios. Estamos disponibles para responder a tus preguntas y ayudarte en lo que necesites. ¡Contáctanos hoy mismo y descubre cómo podemos ayudarte a alcanzar tus objetivos!');
        SEO::opengraph()->setUrl('https://radi.pet/contact');
        SEO::setCanonical('https://radi.pet/contact');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));
        return view('home.contact');
    }

    public function terms()
    {
        SEO::setTitle('Términos y condiciones');
        SEO::setDescription('Obtén información importante sobre tus derechos y responsabilidades al utilizar nuestros productos y servicios');
        SEO::opengraph()->setUrl('https://radi.pet/terms');
        SEO::setCanonical('https://radi.pet/terms');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));
        return view('home.terms');
    }
    public function privacy()
    {
        SEO::setTitle('Política de privacidad');
        SEO::setDescription('Lee nuestras políticas de privacidad para entender cómo manejamos la información personal que recopilamos de nuestros usuarios. Protegemos tus datos personales y nos comprometemos a mantener la confidencialidad de la información que compartes con nosotros.');
        SEO::opengraph()->setUrl('https://radi.pet/privacy');
        SEO::setCanonical('https://radi.pet/privacy');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));
        return view('home.privacy');
    }

    public function download()
    {
        SEO::setTitle('Descarga la app de Radi Pets');
        SEO::setDescription('Descubre, crea perfiles, adopta y ayuda a encontrar mascotas desaparecidas en Radi Pets. La app perfecta para amantes de las mascotas. ¡Descarga ahora!');
        SEO::opengraph()->setUrl('https://radi.pet/download');
        SEO::setCanonical('https://radi.pet/download');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));
        return view('home.download');
    }

    public function feedback()
    {
        SEO::setTitle('Regálanos tu opinión de la app');
        SEO::setDescription('Apoya a mejorar la plataforma de Radi Pets.');
        SEO::opengraph()->setUrl('https://radi.pet/feedback');
        SEO::setCanonical('https://radi.pet/feedback');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));
        return view('home.feedback');
    }


    public function petFriendly()
    {
        return view('home.pet-friendly');
    }

    public function placasdist()
    {
        SEO::setTitle('Conviértete en distribuidor');
        SEO::setDescription('Conviertete en distribuidor de placas QR y NFC en Radi Pets.');
        SEO::opengraph()->setUrl('https://radi.pet/placas-distribuidor');
        SEO::setCanonical('https://radi.pet/placas-distribuidor');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));
        return view('home.placasdist');
    }

    public function placas()
    {
        SEO::setTitle('Placas de identificación');
        SEO::setDescription('Las placas de identificación de Radi Pets son una forma segura y elegante de asegurarte de que tu mascota esté protegida en caso de que se pierda. ');
        SEO::opengraph()->setUrl('https://radi.pet/placas');
        SEO::setCanonical('https://radi.pet/placas');
        SEO::opengraph()->addProperty('type', 'articles');



        SEO::opengraph()->addImage(asset('img/placasbg.png'));
        SEO::twitter()->setImage(asset('img/placasbg.png'));


        return view('home.placas');
    }

    public function userInfo(){
        $user = User::find(1);
        return view('home.user-info',compact('user'));
    }

    public function validate_index()
    {
        SEO::setTitle('Verificación de adopción');
        SEO::setDescription('Verifica si la adopción fue en Radi Pets.');
        SEO::opengraph()->setUrl('https://radi.pet/validate_pet');
        SEO::setCanonical('https://radi.pet/validate_pet');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));
        return view('validate_pets.index');
    }

    public function discounts()
    {
        SEO::setTitle('Descuentos en Radi Pets');
        SEO::setDescription('Mira los descuentos que tenemos para ti al presentar la placa QR de tu mascota.');
        SEO::opengraph()->setUrl('https://radi.pet/discounts');
        SEO::setCanonical('https://radi.pet/discounts');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));
        return view('home.download');
    }

    public function discountbusiness()
    {
        SEO::setTitle('Descuentos en Radi Pets');
        SEO::setDescription('Mira los descuentos que tenemos para ti al presentar la placa QR de tu mascota.');
        SEO::opengraph()->setUrl('https://radi.pet/discount-business');
        SEO::setCanonical('https://radi.pet/discount-business');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));
        return view('home.download');
    }


    public function prebusiness()
    {
        SEO::setTitle('App para negocios en Radi Pets');
        SEO::setDescription('Mira los beneficios de usar Radi Pets para negocios.');
        SEO::opengraph()->setUrl('https://radi.pet/pre-business');
        SEO::setCanonical('https://radi.pet/pre-business');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/business-intro.png'));
        SEO::twitter()->setImage(asset('img/business-intro.png'));
        return view('home.prebusiness');
    }

    public function prebusinessregister(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:DiscountsCompanies'],
            'type' => ['required'],
        ]);

        $discounts = new DiscountsCompanies([
            'email'             => $request->get('email'),
            'name'              => $request->get('name'),
            'type'              => $request->get('type'),
            'status'            => 2,
        ]);

        $discounts->save();
       return redirect()->route('home.prebusiness')->with('success','Se registró exitosamente, pronto te contactaremos.');

    }



    public function business()
    {
        SEO::setTitle('App para negocios en Radi Pets');
        SEO::setDescription('Mira los beneficios de usar Radi Pets para negocios.');
        SEO::opengraph()->setUrl('https://radi.pet/business');
        SEO::setCanonical('https://radi.pet/business');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/business-intro.png'));
        SEO::twitter()->setImage(asset('img/business-intro.png'));
        return view('home.business');
    }


    public function discount()
    {
        SEO::setTitle('Descuento en Radi Pets');
        SEO::setDescription('Mira el descuento que tenemos para ti al presentar la placa QR de tu mascota.');
        SEO::opengraph()->setUrl('https://radi.pet/discount');
        SEO::setCanonical('https://radi.pet/discount');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));
        return view('home.download');
    }

    public function reportdiscount()
    {
        SEO::setTitle('Reporta el incumplimiento de descuentos');
        SEO::setDescription('Genera un reporte por el incumplimiento de descuentos');
        SEO::opengraph()->setUrl('https://radi.pet/report-discount');
        SEO::setCanonical('https://radi.pet/report-discount');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));
        return view('home.report-discount');
    }

    public function memorial(){
        SEO::setTitle('Crea un recuerdo especial para tu mascota');
        SEO::setDescription('Un espacio para compartir la tristeza y los hermosos recuerdos de nuestra mascota🐾❤️');
        SEO::opengraph()->setUrl('https://radi.pet/memorial/');
        SEO::setCanonical('https://radi.pet/memorial/');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/memorial.png'));
        SEO::twitter()->setImage(asset('img/memorial.png'));
        return view('memorial.index');
    }

    public function memorialshow($hash,Request $request){
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);
        $memorial = Memorial::findOrFail($id?$id[0]:0);

        $questions;
        if($memorial->pets){
            $questions =  json_decode($memorial->pets->randomqa, true);
        }


        // dd($memorial->comments);
        // dd($pet);
        SEO::setTitle('Recordando con amor a '.$memorial->pets->name);
        SEO::setDescription('Un espacio para compartir la tristeza y los hermosos recuerdos de nuestra mascota🐾❤️');
        SEO::opengraph()->setUrl('https://radi.pet/memorial/'.$hash);
        SEO::setCanonical('https://radi.pet/memorial/'.$hash);
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/memorial.png'));
        SEO::twitter()->setImage(asset('img/memorial.png'));
        return view('memorial.show',compact('memorial','questions','hash'));
    }

    public function memorialshowcomments($hash){
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);
        $comment = MemorialComments::where('memorial_id',$id)->where('user_id',Auth::user()->id)->get()->first();

        return view('memorial.comments',compact('comment','hash'));
    }

    public function createCommment(Request $request){
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($request->hash)[0];

        $comment = new MemorialComments([
            'user_id'           =>  Auth::user()->id,
            'text'              => $request->get('text'),
            'status'            => 1,
            'memorial_id'       =>  $id,
        ]);

        $comment->save();
        return redirect()->route('home.memorialshow',$request->hash)->with('success','Se agrego exitosamente.');

    }

    public function placasdescuento(){
        return view('home.placas-descuentos');
    }

    public function registerplacasdescuento(){
        return view('home.register-negocio-descuentos');
    }

    public function storeValidate(Request $request){
        $id = $request->get('code');
        return redirect("/validate_pet/".$id);
    }

    public function testEmail(){
        return view('mail.onBoarding');
    }

    public function validate_show(String $hash)
    {
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);
        $request = Requests::find($id)->first();
        return view('validate_pets.show',compact('request'));

    }
}
