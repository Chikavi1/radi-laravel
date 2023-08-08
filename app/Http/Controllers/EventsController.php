<?php

namespace App\Http\Controllers;
use App\Models\Links;

use Illuminate\Http\Request;
use SEO;
use App\Models\Events;

class EventsController extends Controller
{
    public function show($hash)
    {
        // $hash = '1';
        $id = $hash;
        $event = Events::findOrFail($id);

        SEO::setTitle($event->name);
        SEO::setDescription($event->description);
        SEO::opengraph()->setUrl('https://radi.pet/event/'.$hash);
        SEO::setCanonical('https://radi.pet/event/'.$hash);
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->addImage($event->image);
        SEO::twitter()->setImage($event->image);


       return view('events.show',compact('event','hash'));
    }
}
