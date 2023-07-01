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
use Mail;
use PDF;


use Ladumor\OneSignal\OneSignal;


class LostController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except('index','show','thumbnail');
    }

    public function index(Request $request){


        SEO::setTitle('Mascotas desaparecidas');
        SEO::setDescription('Sé un héroe, Ayuda a las demás personas a encontrar a su mascota.');
        SEO::opengraph()->setUrl('https://radi.pet/lost');
        SEO::setCanonical('https://radi.pet/lost');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage(asset('img/default.png'));
        SEO::twitter()->setImage(asset('img/default.png'));
        $losts = Losts::where('status',1)->groupBy('id_pet')->orderBy('id','DESC')->paginate(12);
        return view('lost.index',compact('losts'));
    }

    public function finish(string $hash){
    return view('lost.finish',compact('hash'));
    }

    public function thumbnail(Request $request)
    {
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($request->id);
        $lost = Losts::findOrFail($id?$id[0]:0);
        // $img = Image::make(public_path('img/back-rip.png'))->resize(1280,720);
        // $watermark = Image::make(public_path('img/logo-white.png'))->resize(55, 55);
        // $rip = Image::make(public_path('img/ribbon.png'))->resize(100, 130);
        $img = Image::make(public_path('img/thumbnail.png'))->resize(1280,720);

        $petImage = Image::make($lost->pet->photo)->resize(535, 345);
        $img->insert($petImage, 'center-right', 30, 10);


        // // lost
        // $img->insert($watermark, 'bottom-left', -10, 0);
        // $img->insert($petImage, 'center-right', 30, 10);

        $img->text('Radi Pets', 80, 100, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Bold.ttf'));
            $font->size(40);
            $font->color('#0000');
            $font->align('left');
            $font->valign('bottom');
            $font->angle(0);
        });


        $img->text('Mascota', 80, 220, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Light.ttf'));
            $font->size(80);
            $font->color('#cc0202');
            $font->align('left');
            $font->valign('bottom');
            $font->angle(0);
        });

        $img->text('Desaparecida', 80, 320, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Light.ttf'));
            $font->size(80);
            $font->color('#cc0202');
            $font->align('left');
            $font->valign('bottom');
            $font->angle(0);
        });

        $img->text(ucfirst($lost->pet->name), 75, 420, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Bold.ttf'));
            $font->size(70);
            $font->color('#cc0202');
            $font->align('left');
            $font->valign('bottom');
            $font->angle(0);
        });

        if($lost->rewards){
            $img->text('Se ofrece recompensa', 80, 560, function($font) {
                $font->file(public_path('fonts/Roboto/Roboto-Light.ttf'));
                $font->size(40);
                $font->color('#0000');
                $font->align('left');
                $font->valign('bottom');
                $font->angle(0);
            });
        }

        $img->text('Haz clic para saber más', 80, 630, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Light.ttf'));
            $font->size(60);
            $font->color('#0000');
            $font->align('left');
            $font->valign('bottom');
            $font->angle(0);
        });
        // $img->text($lost->pet->name, 60, 240, function($font) {
        //     $font->file(public_path('fonts/Roboto/Roboto-Bold.ttf'));
        //     $font->size(70);
        //     $font->color('#FFFF');
        //     $font->angle(0);
        // });
        // if($lost->rewards){
        //     $img->text('Recompensa de '.$lost->rewards.' MXN', 60, 340, function($font) {
        //         $font->file(public_path('fonts/Roboto/Roboto-Regular.ttf'));
        //         $font->size(35);
        //         $font->color('#FFFF');
        //         $font->angle(0);
        //     });
        // }
        // $img->text($lost->cellphone, 60, 420, function($font) {
        //     $font->file(public_path('fonts/Roboto/Roboto-Regular.ttf'));
        //     $font->size(35);
        //     $font->color('#FFFF');
        //     $font->angle(0);
        // });
        // $img->text('Haz click para saber más', 60, 470, function($font) {
        //     $font->file(public_path('fonts/Roboto/Roboto-Regular.ttf'));
        //     $font->size(35);
        //     $font->color('#FFFF');
        //     $font->angle(0);
        // });


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
        // return $img->response();
            // dd($img->encode('data-url'));
        // return response()->download($img->encode('data-url'));

        // return response()->download($img);
        return $img->response('jpg');

    }

    public function poster(Request $request){
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($request->id);
        $lost = Losts::findOrFail($id?$id[0]:0);

        //  $img = Image::make(public_path('img/lost-bg.png'))->resize(1728,2304);
        //  $img->text('Mascota Desaparecida', 840, 150, function($font) {
        //     $font->file(public_path('fonts/Roboto/Roboto-Bold.ttf'));
        //     $font->size(120);
        //     $font->color('#fffff');
        //     $font->align('center');
        //     $font->valign('top');
        //     $font->angle(0);
        // });

        // $img->text('¡Comparte para llegar a más personas!', 840, 280, function($font) {
        //     $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
        //     $font->size(50);
        //     $font->color('#fffff');
        //     $font->align('center');
        //     $font->valign('top');
        //     $font->angle(0);
        // });

        // $petImage = Image::make($lost->pet->photo)->resize(900, 600);

        // $img->insert($petImage, 'left-left', 100, 450);

        // $qrcode = Image::make("https://qrcg-free-editor.qr-code-generator.com/main/assets/images/websiteQRCode_noFrame.png")->resize(600, 600);
        // $img->insert($qrcode, 'left-left', 40, 1180);


        // if($lost->rewards){
        //     $img->text('SE OFRECE', 1370, 700, function($font) {
        //         $font->file(public_path('fonts/Roboto/Roboto-Bold.ttf'));
        //         $font->size(100);
        //         $font->color('#ef5421');
        //         $font->align('center');
        //         $font->valign('top');
        //         $font->angle(0);
        //     });
        // }else{
        //     $img->text('SIN', 1370, 700, function($font) {
        //         $font->file(public_path('fonts/Roboto/Roboto-Bold.ttf'));
        //         $font->size(100);
        //         $font->color('#ef5421');
        //         $font->align('center');
        //         $font->valign('top');
        //         $font->angle(0);
        //     });
        // }


        // $img->text('Recompensa', 1370, 795, function($font) {
        //     $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
        //     $font->size(60);
        //     $font->color('#ef5421');
        //     $font->align('center');
        //     $font->valign('top');
        //     $font->angle(0);
        // });


        // $img->text(ucfirst($lost->pet->name), 100, 1120, function($font) {
        //     $font->file(public_path('fonts/Roboto/Roboto-Bold.ttf'));
        //     $font->size(90);
        //     $font->color('#eb2411');
        //     $font->align('left');
        //     $font->valign('top');
        //     $font->angle(0);
        // });



        // $width       = 1728;
        // $height      = 2304;
        // $center_x    = 680;
        // $center_y    = 1450;
        // $max_len     = 45;
        // $font_size   = 45;
        // $font_height = 30;

        // $text = $lost->note;


        // $lines = explode("\n", wordwrap($text, $max_len));
        // $y     = $center_y - ((count($lines) - 1) * $font_height);

        // foreach ($lines as $line)
        // {
        //     $img->text($line, $center_x, $y, function($font) use ($font_size){
        //         $font->file(public_path('fonts/Roboto/Roboto-Light.ttf'));
        //         $font->size($font_size);
        //         $font->color('#00000');
        //         $font->align('left');
        //         $font->valign('center');
        //     });

        //     $y += $font_height * 2;
        // }

        // $img->text('Escanea el código QR', 100, 1850, function($font) {
        //     $font->file(public_path('fonts/Roboto/Roboto-Bold.ttf'));
        //     $font->size(60);
        //     $font->color('#0000');
        //     $font->align('left');
        //     $font->valign('top');
        //     $font->angle(0);
        // });

        // $img->text('Contacta', 1660, 2050, function($font) {
        //     $font->file(public_path('fonts/Roboto/Roboto-Bold.ttf'));
        //     $font->size(60);
        //     $font->color('#ffff');
        //     $font->align('right');
        //     $font->valign('top');
        //     $font->angle(0);
        // });

        // $img->text($lost->cellphone, 1660, 2130, function($font) {
        //     $font->file(public_path('fonts/Roboto/Roboto-Bold.ttf'));
        //     $font->size(130);
        //     $font->color('#ffff');
        //     $font->align('right');
        //     $font->valign('top');
        //     $font->angle(0);
        // });


        // $img->text('Radi Pets', 100, 2080, function($font) {
        //     $font->file(public_path('fonts/Roboto/Roboto-Light.ttf'));
        //     $font->size(80);
        //     $font->color('#ffff');
        //     $font->align('left');
        //     $font->valign('top');
        //     $font->angle(0);
        // });

        // $img->text('www.radi.pet', 100, 2160, function($font) {
        //     $font->file(public_path('fonts/Roboto/Roboto-Light.ttf'));
        //     $font->size(50);
        //     $font->color('#ffff');
        //     $font->align('left');
        //     $font->valign('top');
        //     $font->angle(0);
        // });
        // return $img->response('jpg');
        $data = [
            'lost' => $lost,
        ];
        return  PDF::loadView('pdf.lost', $data)->setPaper('a4', 'landscape')->stream('Ayúdanos a encontrar a '.$lost->pet->name.'.pdf');
    }

    public function create()
    {
        SEO::setTitle('Reporta la desaparición de tu mascota');
        SEO::opengraph()->setUrl('https://radi.pet/lost/create');

        SEO::setDescription('Genera un reporte de desaparación en Radi Pets.');
        SEO::opengraph()->addImage(asset('img/default.png'));

        $months = array('01'=>'Enero','02' => 'Febrero','03'=>'Marzo','04'=>'Abril','05'=>'Mayo','06'=>'Junio','07'=>'Julio','08'=>'Agosto','09'=>'Septiembre','10'=>'Octubre','11'=>'Noviembre','12'=>'Diciembre');
        $years = array('2023'=>'2023','2024' => '2024','2025'=>'2025','2026'=>'2026','2027'=>'2027','2028'=>'2028','2029'=>'2029','2030'=>'2030');
        $pets  = Pets::where('id_user',Auth::user()->id)->where('status',1)->pluck('name','id');
        return view('lost.create',compact('pets','months','years'));

    }

    public function store(Request $request)
    {

        // $validator = Validator::make($request->all(),[
        //     'card_no' => 'required',
        //     'ccExpiryMonth' => 'required',
        //     'ccExpiryYear' => 'required',
        //     'cvvNumber' => 'required',
        //     'id_pet' => 'required',
        // ]);

        // if($validator->passes()){

            // $stripe = Stripe::setApiKey(env('STRIPE_ID'));

            // try{
            //     $token = $stripe->tokens()->create([
            //         'card' => [
            //             'number' => $request->get('card_no'),
            //             'exp_month' => $request->get('ccExpiryMonth'),
            //             'exp_year' => $request->get('ccExpiryYear'),
            //             'cvc' => $request->get('cvvNumber'),
            //         ],
            //       ]);

            //       if (!isset($token['id'])) {
            //         return redirect()->route('stripe.add.money');
            //     }

            //     $charge = $stripe->charges()->create([
            //         'card' => $token['id'],
            //         'currency' => 'MXN',
            //         'amount' => 49.99,
            //         'description' => 'Radi Reporte de desaparición',
            //     ]);

            //     if($charge['status'] == 'succeeded'){

                    // dd();
                    // se envia correo

                    // dd('envio');

                    $lost = new Losts([
                        'id_user_report'    =>  Auth::user()->id,
                        'latitude'          => $request->get('latitude'),
                        'longitude'         => $request->get('longitude'),
                        'status'            => 1,
                        'id_pet'            => $request->get('id_pet'),
                        'date'              => Carbon::now(),
                        'note'              => ucfirst($request->get('description')),
                        // 'id_payment'        => $charge['id'],
                        'rewards'           => $request->get('rewards'),
                        'cellphone'         => $request->get('cellphone'),
                    ]);

                    $lost->save();

                    $pet = Pets::find($request->get('id_pet'));
                    $pet->status = 3;
                    $pet->update();

                    // crear contact detail


                    $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');

                    // $headers = [
                    //     'Accept' => 'application/json',
                    //     'Authorization' => 'Bearer ZGY1NTcwMzEtNGMxMS00N2Q4LTg0ZTktYmVkZDM3Yjg4NjE3'
                    // ];

                    // $GetOrder = [
                    //         'app_id' => 'e15689c2-569b-482f-9364-a8fca5641826',
                    //         'data' =>  [
                    //             'lost' => $hashids->encode($lost->id),
                    //         ],
                    //         'headings' =>  [
                    //             'en' => 'Pet Lost',
                    //             'es' => 'Mascota desaparecida',
                    //         ],
                    //         'contents' =>  [
                    //             'en' => 'A pet near you has disappeared.',
                    //             'es' => 'Ha desaparecido una mascota cerca de ti.',
                    //         ],
                    //         "filters" => [
                    //            [
                    //                 "field"  => "location",
                    //                 "lat"    => $request->get('latitude'),
                    //                 "long"   => $request->get('longitude'),
                    //                 "radius" => "1"
                    //            ]
                    //         ],

                    // ];

                    // $client = new \GuzzleHttp\Client();
                    // $res = $client->post('https://onesignal.com/api/v1/notifications', [
                    //     'headers' => $headers,
                    //     'json' => $GetOrder,
                    // ]);

                    $data["email"] = Auth::user()->email;
                    $data["title"] = "Reporte de desaparación";
                    $data["body"]  = "Lamentamos la situación.";

                    Mail::send('mail.lost', $data, function($message)use($data) {
                        $message->to($data["email"])
                                ->subject($data["title"]);
                    });

                    return redirect()->route('lost.show',$hashids->encode($lost->id))->with('success','Se creo exitosamente.');

                // } else {
                //     return redirect()->route('lost.create')->with('error','Error, sin fondos, intente con otra.');
                // }

                // }catch (Exception $e) {
                //     return redirect()->route('lost.create')->with('error',$e->getMessage());
                // } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
                //     return redirect()->route('lost.create')->with('error','Tarjeta declinada, intente con otra.');
                // } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
                //     return redirect()->route('lost.create')->with('error','Información incorrecta, verifica tus datos');
                // }

        // }else{
        //     dd('no pasa');
        // }
    }

    public function show(string $hash)
    {
        // $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        // $id = $hashids->decode($hash);
        // $lost = Losts::findOrFail($id?$id[0]:0);

        // SEO::setTitle('Ayúdanos a que '. $lost->pet->name.' regrese a casa');
        // SEO::setDescription($lost->note);
        // SEO::opengraph()->setUrl('https://radi.pet/lost/'.$hash);
        // SEO::setCanonical('https://radi.pet/lost/'.$hash);
        // SEO::opengraph()->addProperty('type', 'articles');
        // SEO::opengraph()->addImage(asset('img/default.png'));
        // SEO::twitter()->setImage(asset('img/default.png'));
        // $age = Carbon::parse($lost->pet->birthday)->diffForHumans();
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);
        $lost = Losts::findOrFail($id?$id[0]:0);
        $pet = $lost->pet;

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
        SEO::opengraph()->setUrl('https://radi.pet/lost/'.$hash);
        SEO::setCanonical('https://radi.pet/lost/'.$hash);
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage($pet->photo);
        SEO::twitter()->setImage($pet->photo);
        $age = Carbon::parse($pet->birthday)->diffForHumans();


        return view('lost.show',compact('lost','pet','age','hash'));
    }

    public function edit(string $id)
    {
       return view('lost.edit');
    }
    public function update(Request $request, string $id)
    {
        //
    }

    public function free()
    {
        return view('lost.free');
    }

    public function freeStore()
    {

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

        $pet = Pets::find($lost->id_pet);

        $lost->finish_latitude = $request->get('finish_latitude');
        $lost->finish_longitude = $request->get('finish_longitude');
        $lost->meta_data = json_encode($data);

        $pet->status = 1;
        $pet->update();
        $lost->status = 2;
        $lost->update();

        return redirect()->route('lost.show',$hash)->with('success','Se creo exitosamente.');
    }
}
