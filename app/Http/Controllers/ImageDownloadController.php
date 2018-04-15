<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Image;




class ImageDownloadController extends Controller
{
    public function index()
    {
        return view('content.download-image');
    }

    public function store(Request $request) {
        $images = $request->all();



        $rules = [
            'images' => 'required|array',
            'images.*' => 'mimes:png,jpg,jpeg|max:2000'
        ];

        $validator = Validator::make($images, $rules);

        if ($validator->fails()){
            return back()->withErrors($validator);
        }
        else {

            foreach ($request->file('images') as $image) {
                $filename = $image->move(('images'), time().'_'.$image->getClientOriginalName());

                //downloading image into DB
                $image = new Image;
                $image->user_id = session()->get('user_id');
                $image->name = $filename;
                $image->session_id = session()->getId();
                $image->save();
            }
            return back();


        }
    }
}
