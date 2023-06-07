<?php

namespace App\Http\Controllers;
use App\Models\Links;

use Illuminate\Http\Request;

class LinksController extends Controller
{

    public function index()
    {
        abort(404);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $link = Links::where('code',$id)->first();
        if($link){
            if($link->url){
                return redirect()->away($link->url);
            }else{
                dd('Esta mal configurado el link');
            }
        }else{
            abort(404);
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
