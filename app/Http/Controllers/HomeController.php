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

class HomeController extends Controller
{
    //


    public function home()
    {
        SEO::setTitle('La plataforma para los amantes de las mascotas');
        SEO::setDescription('Encuentra lugares pet friendly, adopta a una mascota o apoya a los albergues, todo en un solo lugar.');
        SEO::opengraph()->setUrl('https://radi.pet/');
        SEO::setCanonical('https://radi.pet/');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));

        $orgs = Organizations::latest()->take(2)->get();

        return view('welcome',compact('orgs'));

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
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));
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
