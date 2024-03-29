<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pets;
use App\Models\Identifications;

use SEO;
use Hashids\Hashids;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\Memorial;
use Mail;

use PDF;

class PetsController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except('index','show','qrCode','deathpdf');
    }

    public function qrCode(string $hash){


        $pet = Pets::where('code',$hash)->first();

        $textTitle = '';
        if($pet){
            if($pet->status == 0){
                $textTitle = 'Recordando a ';
            }elseif($pet->status == 1){
                $textTitle = 'Descubre el perfil de ';
            }elseif($pet->status == 2){
                $textTitle = 'Adopta a ';
            }
            elseif($pet->status == 3){
                $textTitle = 'Ayúdanos a encontrar a ';
            }
            SEO::setTitle($textTitle.''.$pet->name);
            SEO::setDescription($pet->description);
            SEO::opengraph()->setUrl('https://radi.pet');
            SEO::setCanonical('https://radi.pet');
            SEO::opengraph()->addProperty('type', 'articles');
            // SEO::opengraph()->addImage($pet->photo);
            // SEO::twitter()->setImage($pet->photo);
            SEO::opengraph()->addImage(asset('img/pets.png'));
            SEO::twitter()->setImage(asset('img/pets.png'));
            $age = Carbon::parse($pet->birthday)->diffForHumans();
            $breedData = [];
            return view('pets.show',compact('pet','age','hash','breedData'));
        }else{
            SEO::setTitle('Vincula a tu mascota');
            SEO::setDescription('Este link no se ha vinculado con ninguna mascota.');
            SEO::opengraph()->setUrl('https://radi.pet');
            SEO::setCanonical('https://radi.pet');
            SEO::opengraph()->addProperty('type', 'articles');
            SEO::opengraph()->addImage(asset('img/pets.png'));
            SEO::twitter()->setImage(asset('img/pets.png'));
            abort(404);

        }

    }

    public function index()
    {
        SEO::setTitle('Mascotas en adopción');
        SEO::setDescription('Encuentra tu compañero perfecto ¡Adopta y salva una vida hoy!');
        SEO::opengraph()->setUrl('https://radi.pet/adoptions');
        SEO::setCanonical('https://radi.pet/adoptions');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));

        $pets = Pets::where('status',2)->paginate();
        return view('adoptions.index',compact('pets'));
    }

    public function create(){
        return view('pets.create');

    }

    public function edit(string $hash)
    {
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);
        $pet = Pets::findOrFail($id?$id[0]:0);
        return view('pets.edit',compact('pet'));
    }

    public function store(Request $request)
    {

        $image = 'https://radi-images.s3.us-west-1.amazonaws.com/pet-default.jpeg';

        if($request->get('base') && $request->get('base') != 'data:,'){
            $baseImage = $request->base;
            list($type, $baseImage) = explode(';', $baseImage);
            list(, $baseImage)      = explode(',', $baseImage);
            $baseImage = base64_decode($baseImage);

            $filePath = 'radi-web/' .  Str::random(14).'_'.'radi-pet-clients';
            $path = Storage::disk('s3')->put($filePath,$baseImage);
            $path = Storage::disk('s3')->url($path);
            $image   = 'https://radi-images.s3.us-west-1.amazonaws.com/'.$filePath;
        }

        $pet = new Pets([
            'name'              => ucfirst($request->get('name')),
            'photo'             => $image,
            'birthday'          => $request->get('birthday'),
            'description'       => ucfirst($request->get('description')),
            'chronic_disease'   => ucfirst($request->get('chronic_disease')),
            'gender'            => $request->get('gender'),
            'specie'            => $request->get('specie'),
            'sterelized'        => $request->get('sterilized'),
            'sterelized_date'   => $request->get('datesterilized'),
            'breed'             => $request->get('breed'),
            'size'              => $request->get('size'),
            'color_necklace'    => $request->get('neclacke_color'),
            'weight'            => $request->get('weight'),
            'id_user'           => Auth::user()->id,
            'status'            => 1
        ]);

        $pet->save();
        return redirect('/pet/'.$pet->setHiddenId())->with('success', 'Se ha creado correctamente.');
    }

    public function deathpdf($hash){
        ini_set('max_execution_time', 180); //3 minutes

        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        // dd($hashids->encode($hash));

        $id = $hashids->decode($hash);
        $memorial = Memorial::findOrFail($id?$id[0]:0);
        $data = [
            'memorial' => $memorial,
        ];

        // $pdf =
        return PDF::loadView('pdf.death1', $data)->stream('prueba.pdf');

        if($memorial->photo2){
            $pdf = PDF::loadView('pdf.death4', $data);
        }else{
            $pdf = PDF::loadView('pdf.death1', $data);
        }

        $data["email"] = "chikavi10@gmail.com";
        $data["title"] = "Memorial";
        $data["body"] = "Te enviamos el memorial";

        Mail::send('mail.died', $data, function($message)use($data, $pdf) {
            $message->to($data["email"])
                    ->subject($data["title"]);
            $message->attachData($pdf->output(), 'Memorial.pdf');

        });

        echo "Mail successfully sent!";

    }

    public function myPets()
    {
        $pets = Pets::where('id_user',Auth::user()->id)->orderBy('createdAt','DESC')->get();
        return view('pets.my-pets',compact('pets'));
    }

    public function update(Request $request, string $id)
    {
        // dd($id);
        $pet = Pets::find($id);

        if($request->get('base') && $request->get('base') != 'data:,'){
            $baseImage = $request->base;
            list($type, $baseImage) = explode(';', $baseImage);
            list(, $baseImage)      = explode(',', $baseImage);
            $baseImage = base64_decode($baseImage);


            $filePath = 'web/' .  Str::random(14).'_'.'radi-pet-shelters';
            $path = Storage::disk('s3')->put($filePath,$baseImage);
            $path = Storage::disk('s3')->url($path);
            $image   = 'https://radi-images.s3.us-west-1.amazonaws.com/'.$filePath;
            $pet->photo                  = $image;
        }

        $pet->name               = $request->get('name');
        $pet->birthday               = $request->get('birthday');
        $pet->description            = $request->get('description');
        $pet->chronic_disease        = $request->get('chronic_disease');
        $pet->gender                 = $request->get('gender');
        $pet->specie                 = $request->get('specie');
        $pet->sterelized             = $request->get('sterelized');
        $pet->sterelized_date        = $request->get('sterelized_date');
        $pet->breed                  = $request->get('breed');
        $pet->size                   = $request->get('size');
        $pet->color_necklace         = $request->get('color_necklace');
        $pet->weight                 = $request->get('weight');
        $pet->update();

        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->encode($id);
        return redirect('/pet/'.$id)->with('success', 'Se ha actualizado correctamente.');
    }


    public function show(string $hash)
    {
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);
        $pet = Pets::findOrFail($id?$id[0]:0);

        $textTitle = '';
        SEO::setDescription($pet->description);

        if($pet->status == 0){
            $textTitle = 'Recordando a ';
        }elseif($pet->status == 1){
            $textTitle = 'Descubre el perfil de ';
        }elseif($pet->status == 2){
            $textTitle = 'Adopta a ';
            SEO::setDescription('Descubre el perfil de '. $pet->name .' completo para obtener más información sobre su personalidad, historia y cómo puedes adoptarlo. ¡No te pierdas la oportunidad de brindarle un hogar lleno de amor y felicidad!');

        }
        elseif($pet->status == 3){
            $textTitle = 'Ayúdanos a encontrar a ';
            // return redirect('/lost/'.$pet->losts->setHiddenId());
        }

        SEO::setTitle($textTitle.''.$pet->name);
        SEO::opengraph()->setUrl('https://radi.pet/pet/'.$hash);
        SEO::setCanonical('https://radi.pet/pet/'.$hash);
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/pets.png'));
        SEO::twitter()->setImage(asset('img/pets.png'));
        $age = Carbon::parse($pet->birthday)->diffForHumans();

        $breedData = [];
        return view('pets.show',compact('pet','age','hash','breedData'));
    }


    public function adoptionsPdf(Request $request){
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($request->id);
        $pet = Pets::findOrFail($id?$id[0]:0);
        $data = [
            'pet' => $pet,
            'age' => Carbon::parse($pet->birthday)->diffForHumans()
        ];
        return  PDF::loadView('pdf.adoptions', $data)->setPaper('a4', 'landscape')->stream('Adopta a '.$pet->name.'.pdf');
    }


    public function destroy(string $id)
    {

        $pet = Pets::findOrFail($id);
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->encode($id);

        $pet->status = 0;
        $pet->date_death = Carbon::now();
        $pet->update();
        return redirect('/pet/'.$id);
    }

}
