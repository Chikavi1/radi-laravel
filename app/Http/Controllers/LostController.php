<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Validator;
use Stripe;
use App\Models\Pets;
use App\Models\Losts;
use Auth;
use Carbon\Carbon;
use Hashids\Hashids;
use SEO;

use Ladumor\OneSignal\OneSignal;


class LostController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except('index','show','thumbnail');
    }

    public function index(){
        $losts = Pets::where('status',3)->orderBy('id','DESC')->paginate(12);
        return view('lost.index',compact('losts'));
    }

    public function finish(string $hash){
    return view('lost.finish',compact('hash'));
    }

    public function thumbnail()
    {

        $lost = Losts::findOrFail(1);
        $img = Image::make(public_path('img/back-rip.png'))->resize(1280,720);
        $watermark = Image::make(public_path('img/logo-white.png'))->resize(55, 55);
        $rip = Image::make(public_path('img/ribbon.png'))->resize(100, 130);

        $petImage = Image::make($lost->pet->photo)->greyscale()->resize(450, 370);


        // lost
        $img->insert($watermark, 'bottom-left', -10, 0);
        $img->insert($petImage, 'center-right', 30, 10);

        $img->text('Mascota Desaparecida', 273, 150, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Bold.ttf'));
            $font->size(40);
            $font->color('#f2b63c');
            $font->align('center');
            $font->valign('bottom');
            $font->angle(0);
        });
        $img->text($lost->pet->name, 60, 240, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Bold.ttf'));
            $font->size(70);
            $font->color('#FFFF');
            $font->angle(0);
        });
        if($lost->rewards){
            $img->text('Recompensa de '.$lost->rewards.' MXN', 60, 340, function($font) {
                $font->file(public_path('fonts/Roboto/Roboto-Regular.ttf'));
                $font->size(35);
                $font->color('#FFFF');
                $font->angle(0);
            });
        }
        $img->text($lost->cellphone, 60, 420, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Regular.ttf'));
            $font->size(35);
            $font->color('#FFFF');
            $font->angle(0);
        });
        $img->text('Haz click para saber más', 60, 470, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Regular.ttf'));
            $font->size(35);
            $font->color('#FFFF');
            $font->angle(0);
        });


        // DEAD
        // $img->insert($rip, 'left-top', 350, 150);
        // $img->insert($petImage, 'center-right', 100, 80);
        // $img->insert($watermark, 'bottom-left', 130, 120);

        // $img->text('En memoria de nuestro amado', 420, 300, function($font) {
        // $font->file(public_path('fonts/Roboto/Roboto-Bold.ttf'));
        // $font->size(40);
        // $font->color('#f2b63c');
        // $font->align('center');
        // $font->valign('bottom');
        // $font->angle(0);
        //  });
        // $img->text('Radiador', 145, 390, function($font) {
        // $font->file(public_path('fonts/Roboto/Roboto-Bold.ttf'));
        // $font->size(70);
        // $font->color('#FFFF');
        // $font->angle(0);
        // });
        // $img->text('28 de mayo del 2029', 145, 480, function($font) {
        //             $font->file(public_path('fonts/Roboto/Roboto-Regular.ttf'));
        //             $font->size(35);
        //             $font->color('#FFFF');
        //             $font->angle(0);
        //         });
        // return $img->response('jpg');
    }

    public function create()
    {
        $months = array('01'=>'Enero','02' => 'Febrero','03'=>'Marzo','04'=>'Abril','05'=>'Mayo','06'=>'Junio','07'=>'Julio','08'=>'Agosto','09'=>'Septiembre','10'=>'Octubre','11'=>'Noviembre','12'=>'Diciembre');
        $years = array('2023'=>'2023','2024' => '2024','2025'=>'2025','2026'=>'2026','2027'=>'2027','2028'=>'2028','2029'=>'2029','2030'=>'2030');
        $pets  = Pets::where('id_user',Auth::user()->id)->where('status',1)->pluck('name','id');
        return view('lost.create',compact('pets','months','years'));

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'card_no' => 'required',
            'ccExpiryMonth' => 'required',
            'ccExpiryYear' => 'required',
            'cvvNumber' => 'required',
            'id_pet' => 'required',

        ]);

        if($validator->passes()){

            $stripe = Stripe::setApiKey(env('STRIPE_ID'));

            try{
                $token = $stripe->tokens()->create([
                    'card' => [
                        'number' => $request->get('card_no'),
                        'exp_month' => $request->get('ccExpiryMonth'),
                        'exp_year' => $request->get('ccExpiryYear'),
                        'cvc' => $request->get('cvvNumber'),
                    ],
                  ]);

                  if (!isset($token['id'])) {
                    return redirect()->route('stripe.add.money');
                }

                $charge = $stripe->charges()->create([
                    'card' => $token['id'],
                    'currency' => 'MXN',
                    'amount' => 49.99,
                    'description' => 'Radi Reporte de desaparición',
                ]);

                if($charge['status'] == 'succeeded'){
                    // dd($charge);
                    $lost = new Losts([
                        'id_user_report'    =>  Auth::user()->id,
                        'latitude'          => $request->get('latitude'),
                        'longitude'         => $request->get('longitude'),
                        'status'            => 1,
                        'id_pet'            => $request->get('id_pet'),
                        'date'              => Carbon::now(),
                        'note'              => ucfirst($request->get('description')),
                        'id_payment'        => $charge['id'],
                        'rewards'           => $request->get('rewards'),
                        'cellphone'         => $request->get('cellphone'),
                    ]);

                    $lost->save();

                    $pet = Pets::find($request->get('id_pet'));
                    $pet->status = 3;
                    $pet->update();

                    $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');

                    $headers = [
                        'Accept' => 'application/json',
                        'Authorization' => 'Bearer ZGY1NTcwMzEtNGMxMS00N2Q4LTg0ZTktYmVkZDM3Yjg4NjE3'
                    ];

                    $GetOrder = [
                            'app_id' => 'e15689c2-569b-482f-9364-a8fca5641826',
                            'data' =>  [
                                'lost' => $hashids->encode($lost->id),
                            ],
                            'headings' =>  [
                                'en' => 'Pet Lost',
                                'es' => 'Mascota desaparecida',
                            ],
                            'contents' =>  [
                                'en' => 'A pet near you has disappeared.',
                                'es' => 'Ha desaparecido una mascota cerca de ti.',
                            ],
                            "filters" => [
                               [
                                    "field"  => "location",
                                    "lat"    => $request->get('latitude'),
                                    "long"   => $request->get('longitude'),
                                    "radius" => "100"
                               ]
                            ],

                    ];

                    $client = new \GuzzleHttp\Client();
                    $res = $client->post('https://onesignal.com/api/v1/notifications', [
                        'headers' => $headers,
                        'json' => $GetOrder,
                    ]);





                    return redirect()->route('lost.show',$hashids->encode($lost->id))->with('success','Se creo exitosamente.');
                } else {
                    return redirect()->route('lost.create')->with('error','Error, sin fondos, intente con otra.');
                }

            }catch (Exception $e) {
                return redirect()->route('lost.create')->with('error',$e->getMessage());
            } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
                return redirect()->route('lost.create')->with('error','Tarjeta declinada, intente con otra.');
            } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
                return redirect()->route('lost.create')->with('error','Información incorrecta, verifica tus datos');
            }

        }else{
            dd('no pasa');
        }
    }

    public function show(string $hash)
    {
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);
        $lost = Losts::findOrFail($id?$id[0]:0);
        SEO::opengraph()->addImage( url('losts/thumbnail') );
        SEO::twitter()->setImage( url('losts/thumbnail') );

        SEO::opengraph()->addProperty('type', 'articles');
        SEO::setTitle('Ayúdanos a encontrar a '.$lost->pet->name);
        SEO::setDescription('Ayúdanos a encontrar a las mascotas con Radi Pets.');
        SEO::opengraph()->setUrl('https://radi.pet/lost/'.$hash);
        SEO::setCanonical('https://radi.pet/lost/'.$hash);

        $age=20;
        return view('lost.show',compact('lost','age','hash'));
    }

    public function edit(string $id)
    {
       return view('lost.edit');
    }
    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Request $request,string $hash)
    {
        $data =  array();
        $data['functional'] = $request->get('functional');
        $data['feedback']   = $request->get('feedback');
        $data['from']       = 'web';
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);
        $lost = Losts::findOrFail($id?$id[0]:0);
        $lost->finish_latitude = $request->get('finish_latitude');
        $lost->finish_longitude = $request->get('finish_longitude');
        $lost->meta_data = json_encode($data);
        $lost->pets->status = 1;

        $lost->status = 2;
        $lost->update();

        return redirect()->route('lost.show',$hash)->with('success','Se creo exitosamente.');


    }
}
