<?php

namespace App\Http\Controllers;
use App\Models\Links;

use Illuminate\Http\Request;
use SEO;

class BusinessController extends Controller
{
    public function show()
    {
        $hash = '1';
        $business='cac';
        SEO::setTitle('La manada de Leo');
        SEO::setDescription('Ayudar a las personas a que puedan entender a sus perros y asi educarlos correctamente para poder tener una sana convivencia entre las dos especies y fortalecer el vínculo de la relación humano - perro.');
        SEO::opengraph()->setUrl('https://radi.pet/business/'.$hash);
        SEO::setCanonical('https://radi.pet/business/'.$hash);
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage('https://i.ibb.co/VYFgGTs/313415142-528083012658977-8498527970720641866-n.png');
        SEO::twitter()->setImage('https://i.ibb.co/VYFgGTs/313415142-528083012658977-8498527970720641866-n.png');


       return view('business.show',compact('business','hash'));
    }
}
