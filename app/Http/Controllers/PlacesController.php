<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;
use App\Models\Places;
use Hashids\Hashids;
use DB;

class PlacesController extends Controller
{

    public function index()
    {


        SEO::setTitle('Buscador Pet Friendly');
        SEO::setDescription('Descubre los mejores lugares pet friendly para ti y tu mascota. Encuentra restaurantes, hoteles, parques y más donde tu compañero peludo es bienvenido. Planifica tus próximas aventuras con tu mascota y disfruta de un tiempo inolvidable juntos.');
        SEO::opengraph()->setUrl('https://radi.pet');
        SEO::setCanonical('https://radi.pet');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));

        // $places = Places::all();
        // dd($places);
        return view('places.index');
    }


    public function result(Request $request)
    {
        $latitude = 20.6109151;
        $longitude = -103.3009833;
        $distance = 10;
        // $results = DB::select(DB::raw('SELECT id, ( 3959 * acos( cos( radians(' . $lat . ') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(' . $lng . ') ) + sin( radians(' . $lat .') ) * sin( radians(lat) ) ) ) AS distance FROM Places HAVING distance < ' . $distance . ' ORDER BY distance') );

        if($request->lat && $request->lng){
            $latitude = $request->lat;
            $longitude = $request->lng;
            $type = $request->type;
            $places =  Places::select(DB::raw("*, ( 3959 * acos( cos( radians('$latitude') ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians('$longitude') ) + sin( radians('$latitude') ) * sin( radians( latitude ) ) ) ) AS distance"))->havingRaw('distance < 20');
            if($type){
                $places =  $places->where('place',$type);
            }
            $places =  $places->orderBy('distance')->get();
            // dd($latitude,$longitude ,$places);
        }else{
            $places = Places::paginate(10);
        }


        SEO::setTitle('Lugares Pet Friendly');
        SEO::setDescription('Descubre los mejores lugares pet friendly para ti y tu mascota. Encuentra restaurantes, hoteles, parques y más donde tu compañero peludo es bienvenido. Planifica tus próximas aventuras con tu mascota y disfruta de un tiempo inolvidable juntos.');
        SEO::opengraph()->setUrl('https://radi.pet/results');
        SEO::setCanonical('https://radi.pet/results');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));

        // $places = Places::all();
        // dd($places);
        return view('places.result',compact('places','latitude','longitude'));
    }

    public function register(){
        return view('places.register');

    }

    public function show(string $hash)
    {
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);
        $place = Places::findOrFail($id?$id[0]:0);
        SEO::setTitle($place->title);
        SEO::setDescription($place->description);
        SEO::opengraph()->setUrl('https://radi.pet/places/'.$hash);
        SEO::setCanonical('https://radi.pet/places/'.$hash);
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage($place->image);
        SEO::twitter()->setImage($place->image);

        $schedule = json_decode($place->schedule, true);
        return view('places.show',compact('place','hash','schedule'));

    }

}
