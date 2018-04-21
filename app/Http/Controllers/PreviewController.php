<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreviewController extends Controller
{
    public function index()
    {
        $collage = Collage::all()->where('name', session()->get('collage_name'));
        return view('content.preview', [
            'collage' => $collage
        ]);
    }

}
