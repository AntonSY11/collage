<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class ImageDownloadController extends Controller
{
    public function index()
    {
        return view('content.download-image');
    }

    public function store(Request $request) {
        $images = $request->all();

        $rules = [
            'images' => 'required|array|max:6',
            'images.*' => 'mimes:png,jpg,jpeg|max:2000'
        ];

        $validator = Validator::make($images, $rules);

        if ($validator->fails()){
            return back()->withErrors($validator);
        }
        else {
            foreach ($images as $image){

            }
            return back();
        }

    }
}
