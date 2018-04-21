<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserCollage;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user_collage = new UserCollage;
        $all_collage = $user_collage->all()->where('user_id', session()->get('user_id'));

        return view('content.profile',[
            'all_collage' => $all_collage
        ]);

    }

    public function store($id)
    {
        $user_collage = new UserCollage;



//        public function download($fileId)
        $entry = Fileentry::where('file_id', '=', $fileId)->firstOrFail();
        $pathToFile=storage_path()."/app/".$entry->filename;
        return response()->download($pathToFile);

        dd($user_collage);
        $path = 'user_collage';
        return Storage::download('file.jpg');
    }
}
