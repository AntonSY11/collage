<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Manager\ProductCollectionMiddleware;
use Illuminate\Http\Request;
use App\Collage;
use Intervention\Image\ImageManager;
//use Intervention\Image;
use Image;


class DistributionController extends Controller
{
    public function index(Request $request)
    {

        //get images from DB by session_id
        $images = \App\Image::all()->where('session_id', session()->getId());
        if (empty($images->toArray())) {
            return redirect('download-image')->with('message', 'Мы не знаем как вы это сделали, но у вас не загружены фотографии');
        }

        //get collage data from DB, from session
        $collage = Collage::all()->where('name', session()->get('collage_name'));

        return view('content.distribution', [
            'collage' => $collage,
            'images' => $images
        ]);
    }
















    public function store(Request $request)
    {

        $images = \App\Image::all()->where('session_id', session()->getId());
        $img_arr = $request->all();
        array_shift($img_arr);




        //проверка размещенны фото или нет
        if (count($img_arr) > 0)
            foreach ($img_arr as $array_image);
        else
            return back()->with('message', "Вы не размистили ни одну фотография");


        //выборка коллажа из БД
        $collage = Collage::all()->where('name', session()->get('collage_name'));

        //переборка из коллекции в массив фотографий
        foreach ($collage as $item);

        //выводит макет коллажа
        $layout = $item->path;


        //количество размещений
        if (!empty($array_image))
            $img_count = count($array_image);
        else
            $img_count = 0;

        //количество ячеек в коллаже
        $count_field = $item->count_field;




        //проверка на размещение нескольких фотографий в одну ячейку
        if ($img_count > (count(array_count_values($array_image)))){
            return back()->with('message', "Вы пытаетесь разместить несколько фотографий в одной ячейке ");
        }
        //проверка если не поставлен не один чекбокс
        elseif ($img_count == 0){
            return back()->with('message', "Вы не размистили ни одну фотография");
        }
        //если пользователь пытается добавить слишком много
        elseif ($img_count > $count_field) {
            return back()->with('message', "В вашем коллаже может размещаться максимум $item->count_field фотографии, вы пытаетесь разместить $img_count");
        }
        else {
            //вевести изображение
            if (session()->get('collage_name') == 'collage1') {
                //поиск назнаечение фотографии в перавый отдел коллажа
                $first_arr = \App\Image::all()->where('id', array_search(1, $array_image));
                foreach ($first_arr as $first) ;
                $first = $first->name;

                //поиск назнаечение фотографии во второй отдел коллажа
                $second_arr = \App\Image::all()->where('id', array_search(2, $array_image));
                foreach ($second_arr as $second) ;
                $second = $second->name;

                //поиск назнаечение фотографии в третий отдел коллажа
                $third_arr = \App\Image::all()->where('id', array_search(3, $array_image));
                foreach ($third_arr as $third) ;
                $third = $third->name;

                //поиск назнаечение фотографии во четвертый отдел коллажа
                $fourth_arr = \App\Image::all()->where('id', array_search(4, $array_image));
                foreach ($fourth_arr as $fourth) ;
                $fourth = $fourth->name;

                //-------------ФОРМИРОВАНИЕ КОЛЛАЖА----------------
                $base_image = Image::make($layout);



                $first_insert = Image::make($first)->height();

                dd($first_insert);
                $first_insert = Image::make($first)->heighten(625)->crop(625,625);
//                $second_insert = Image::make($second)->resize(625,625);
//                $third_insert = Image::make($third)->resize(625,625);
//                $fourth_insert = Image::make($fourth)->resize(625,625);




                $base_image->insert($first_insert, 'top-right', 50, 50);
//                $base_image->insert($second_insert, 'top-right', 50, 50);
//                $base_image->insert($third_insert, 'bottom-left', 50, 50);
//                $base_image->insert($fourth_insert, 'bottom-right', 50, 50);




                return $base_image->response();

            } elseif (session()->get('collage_name') == 'collage2') {

            } elseif (session()->get('collage_name') == 'collage3') {
                echo 'good 3';
            }
        }
    }













}

