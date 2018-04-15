<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collage;

class DistributionController extends Controller
{
    public function index(Request $request)
    {

        $collage = Collage::where('name', session()->get('collage_name'))->value('path');
;


//        dd($collage);
//        dd(session()->get('collage_name'));
        return view('content.distribution', [
            'collage' => $collage
        ]);
    }
}
