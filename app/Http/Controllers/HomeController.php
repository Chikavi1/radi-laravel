<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;
use App\Models\Organizations;
use Hashids\Hashids;
use App\Models\Requests;

use App\Models\User;

class HomeController extends Controller
{
    //


    public function home()
    {
        SEO::setTitle('La plataforma para los amantes de las mascotas');
        SEO::setDescription('Encuentra lugares pet friendly, adopta a una mascota o apoya a los albergues, todo en un solo lugar.');
        SEO::opengraph()->setUrl('https://radi.pet');
        SEO::setCanonical('https://radi.pet');
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
        SEO::opengraph()->setUrl('https://radi.pet');
        SEO::setCanonical('https://radi.pet');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));
        return view('home.contact');
    }

    public function terms()
    {
        SEO::setTitle('Términos y condiciones');
        SEO::setDescription('Obtén información importante sobre tus derechos y responsabilidades al utilizar nuestros productos y servicios');
        SEO::opengraph()->setUrl('https://radi.pet');
        SEO::setCanonical('https://radi.pet');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));
        return view('home.terms');
    }
    public function privacy()
    {
        SEO::setTitle('Política de privacidad');
        SEO::setDescription('Lee nuestras políticas de privacidad para entender cómo manejamos la información personal que recopilamos de nuestros usuarios. Protegemos tus datos personales y nos comprometemos a mantener la confidencialidad de la información que compartes con nosotros.');
        SEO::opengraph()->setUrl('https://radi.pet');
        SEO::setCanonical('https://radi.pet');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));
        return view('home.privacy');
    }

    public function download()
    {
        SEO::setTitle('Descarga la app de Radi Pets');
        SEO::setDescription('Descubre, crea perfiles, adopta y ayuda a encontrar mascotas desaparecidas en Radi Pets. La app perfecta para amantes de las mascotas. ¡Descarga ahora!');
        SEO::opengraph()->setUrl('https://radi.pet');
        SEO::setCanonical('https://radi.pet');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));
        return view('home.download');
    }

    public function feedback()
    {
        SEO::setTitle('Regálanos tu opinión de la app');
        SEO::setDescription('Apoya a mejorar la plataforma de Radi Pets.');
        SEO::opengraph()->setUrl('https://radi.pet');
        SEO::setCanonical('https://radi.pet');
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
        SEO::opengraph()->setUrl('https://radi.pet/placas');
        SEO::setCanonical('https://radi.pet/placas');
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
        SEO::opengraph()->setUrl('https://radi.pet/placas');
        SEO::setCanonical('https://radi.pet/placas');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));
        return view('validate_pets.index');
    }

    public function storeValidate(Request $request){
        $id = $request->get('code');
        return redirect("/validate_pet/".$id);

    }

    public function testEmail(){
        return view('mail.lost');
    }

    public function validate_show(String $hash)
    {
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);
        $request = Requests::find($id)->first();
        return view('validate_pets.show',compact('request'));

    }
}
