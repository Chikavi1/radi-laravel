<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReviewsPlaces;
use App\Models\Places;
use Hashids\Hashids;
use Auth;
use Carbon\Carbon;

class ReviewsController extends Controller
{
    public function show($hash){

        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);
        $place = Places::findOrFail($id?$id[0]:0);

        $review = ReviewsPlaces::where('user_id',Auth::user()->id)->where('place_id',$id[0])->first();


        return view('reviews.show',compact('hash','place','review'));
    }

    public function store(Request $request){


        // dd($request->all());

        $request->validate([
            'comments' => ['required', 'string'],
            'score' => ['required'],
        ]);


        $metadata = array();
        $metadata["parking"] = $request->parking;
        $metadata["card"] = $request->card;
        $metadata["food"] = $request->food;
        $metadata["special"] = $request->special;
        $metadata["recommend"] = $request->recommend;

        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $place_id = $hashids->decode($request->get('id'));

        $review = new ReviewsPlaces([
            'user_id'           => Auth::user()->id,
            'score'             => $request->score,
            'comments'          => $request->comments,
            'place_id'          => $place_id[0],
            'metadata'          => json_encode($metadata),
            'verified'          => 0,
            'date'              => Carbon::now()
        ]);

        $review->save();
        return redirect()->route('places.show',$request->get('id'))->with('success','Gracias por dejar tu reseña.');

    }
}
