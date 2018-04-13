<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ImageDownloadController extends Controller
{
    public function index()
    {
        return view('content.download-image');
    }

    public function store(Request $request) {
        $files = $request->file('image');

        if (is_null($files)){
            return back()->with('message', 'Нет файла');
        }
        else{

            foreach ($files as $file){
                $file->move(public_path('image'), $file->getClientOriginalName());
            }
            return back();
        }
    }
}
