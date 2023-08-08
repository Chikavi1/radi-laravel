<?php

namespace App\Http\Controllers;
use App\Models\Links;

use Illuminate\Http\Request;
use SEO;
use App\Models\DiscountsCompanies;
class BusinessController extends Controller
{
    public function show($hash)
    {
        // $hash = '1';
        $id = $hash;
        $business = DiscountsCompanies::findOrFail($id);

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
