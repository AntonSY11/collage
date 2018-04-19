<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Image;
use App\Collage;




class ImageDownloadController extends Controller
{
    public function index()
    {

        $images = \App\Image::all()->where('session_id', session()->getId());

        return view('content.download-image',[
            'images' => $images
        ]);
    }

    public function store(Request $request) {

        $images_from_db = \App\Image::all()->where('session_id', session()->getId())->toArray();
        $collage = Collage::all()->where('name', session()->get('collage_name'));
        foreach ($collage as $item);


        if(!empty($images_from_db)){
            if (count($request->file('images')) < $item->count_field)
                return back()->with('message', 'Вы пытаетесь загрузить меньше фотографий чем у вас полей в коллаже');
            else
                return redirect('distribution');
        }
        else{


            if (count($request->file('images')) < $item->count_field){
                return back()->with('message', 'Вы пытаетесь загрузить меньше фотографий чем у вас полей в коллаже');
            }
            else {
                $images = $request->all();

                $rules = [
                    'images' => 'required|array',
                    'images.*' => 'mimes:png,jpg,jpeg|max:2000'
                ];

                //выборка коллажа из БД

                //переборка из коллекции в массив фотографий
    //            dd(count($request->file('images')));

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
                    return redirect('distribution');
                }

            }



        }
    }
}
