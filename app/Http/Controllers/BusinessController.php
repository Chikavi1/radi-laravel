<?php

namespace App\Http\Controllers;
use App\Models\Links;

use Illuminate\Http\Request;
use SEO;
use App\Models\DiscountsCompanies;
use Hashids\Hashids;


class BusinessController extends Controller
{
    public function show($hash)
    {

        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        $id = $hashids->decode($hash);
        $business = DiscountsCompanies::findOrFail($id?$id[0]:0);

        SEO::setTitle($business->name);
        SEO::setDescription($business->description);
        SEO::opengraph()->setUrl('https://radi.pet/business/'.$hash);
        SEO::setCanonical('https://radi.pet/business/'.$hash);
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage($business->image);
        SEO::twitter()->setImage($business->image);


       return view('business.show',compact('business','hash'));
    }
}
