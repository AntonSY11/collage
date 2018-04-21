<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class DeleteSessionImageController extends Controller
{
    public function delete()
    {

        $images_table = new Image;
        $images_table->where('session_id', session()->getId())->delete();

        return back()->with('message', 'Ваши старые загрузки удалены');
        
    }
}
