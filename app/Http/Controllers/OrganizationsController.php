<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organizations;
use SEO;
use Hashids\Hashids;
use DB;


class OrganizationsController extends Controller
{

    public function index(Request $request)
    {
        // $orgs = DB::table("Organizations")
        // ->select("Organizations.*"
        //     ,DB::raw("55555 * acos(cos(radians(" . $latitude . "))
        //     * cos(radians(Organizations.latitude))
        //     * cos(radians(Organizations.longitude) - radians(" . $longtitude . "))
        //     + sin(radians(" .$latitude. "))
        //     * sin(radians(Organizations.latitude))) AS distance"))
        //     ->paginate(12);

        $orgs = Organizations::orderBy('createdAt','desc')->where('status',1)->paginate(12);
        SEO::setTitle('Albergues y refugios en Radi Pets');
        SEO::setDescription('Encuentra tu compañero perfecto y apoya a albergues y refugios de mascotas. ¡Adopta y salva una vida hoy!');
        SEO::opengraph()->setUrl('https://radi.pet/org/');
        SEO::setCanonical('https://radi.pet/org/');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));

        return view('org.index',compact('orgs'));

    }


    public function show(string $hash)
    {
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);

        $org = Organizations::findOrFail($id?$id[0]:0);
        $pets = $org->pets()->paginate(16);

        $social_media = json_decode($org->social_media);
        SEO::setTitle($org->name);
        SEO::setDescription('Mira el perfil de '.$org->name.' y apoyalos!');
        SEO::opengraph()->setUrl('https://radi.pet/org/'.$hash);
        SEO::setCanonical('https://radi.pet/org/'.$hash);
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage($org->photo);
        SEO::twitter()->setImage($org->photo);
        return view('org.show',compact('org','hash','social_media','pets'));
    }


}
