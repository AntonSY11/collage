<?php

namespace App\Http\Controllers;

use App\Collage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CollageController extends Controller
{

    //view start page

    public function index()
    {
        return view('content.start');

    }


    //view page choosing collage and deduces all collage from DB

    public function choose_collage()
    {
        $collages = Collage::all();
        return view('content.choose-collage', [
            'collages' => $collages
        ]);
    }





    //handler for chhose-collage
    public function store(Request $request)
    {

        $user = Auth::user()->id;
        $collage_name = $request->collage;

        $request->session()->put([
            'user_id' => $user,
            'collage_name' => $collage_name
        ]);

        dd($request->session()->all());

        return view('content.choose-collage');
    }
}
