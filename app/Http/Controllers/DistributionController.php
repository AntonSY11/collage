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
            //Вывод коллажа №1 с выбранными картинками
            if (session()->get('collage_name') == 'collage1') {
                //поиск назнаечение фотографии в перавый отдел коллажа
                $first_arr = \App\Image::all()->where('id', array_search(1, $array_image));
                foreach ($first_arr as $first) ;
                $first = Image::make($first->name)->heighten(625)->crop(625,625);

                //поиск назнаечение фотографии во второй отдел коллажа
                $second_arr = \App\Image::all()->where('id', array_search(2, $array_image));
                foreach ($second_arr as $second) ;
                $second = Image::make($second->name)->heighten(625)->crop(625,625);

                //поиск назнаечение фотографии в третий отдел коллажа
                $third_arr = \App\Image::all()->where('id', array_search(3, $array_image));
                foreach ($third_arr as $third) ;
                $third = Image::make($third->name)->heighten(625)->crop(625,625);

                //поиск назнаечение фотографии во четвертый отдел коллажа
                $fourth_arr = \App\Image::all()->where('id', array_search(4, $array_image));
                foreach ($fourth_arr as $fourth) ;
                $fourth = Image::make($fourth->name)->heighten(625)->crop(625,625);

                //-------------ФОРМИРОВАНИЕ КОЛЛАЖА----------------
                $base_image = Image::make($layout);

                $base_image->insert($first, 'top-right', 50, 50);
                $base_image->insert($second, 'top-left', 50, 50);
                $base_image->insert($third, 'bottom-left', 50, 50);
                $base_image->insert($fourth, 'bottom-right', 50, 50);




                return $base_image->response();

            } elseif (session()->get('collage_name') == 'collage2') {


                //поиск назнаечение фотографии в перавый отдел коллажа
                $first_arr = \App\Image::all()->where('id', array_search(1, $array_image));
                foreach ($first_arr as $first) ;
                $first = Image::make($first->name)->heighten(625)->crop(625,625);

                //поиск назнаечение фотографии во второй отдел коллажа
                $second_arr = \App\Image::all()->where('id', array_search(2, $array_image));
                foreach ($second_arr as $second) ;
                $second = Image::make($second->name)->heighten(625)->crop(625,625);

                //поиск назнаечение фотографии в третий отдел коллажа
                $third_arr = \App\Image::all()->where('id', array_search(3, $array_image));
                foreach ($third_arr as $third) ;
                $third = Image::make($third->name)->heighten(1300)->crop(625,1300);


                //-------------ФОРМИРОВАНИЕ КОЛЛАЖА----------------
                $base_image = Image::make($layout);

                $base_image->insert($first, 'top-left', 50, 50);
                $base_image->insert($second, 'bottom-left', 50, 50);
                $base_image->insert($third, 'right', 50, 50);
                return $base_image->response();

            } elseif (session()->get('collage_name') == 'collage3') {
                //поиск назнаечение фотографии в перавый отдел коллажа
                $first_arr = \App\Image::all()->where('id', array_search(1, $array_image));
                foreach ($first_arr as $first) ;
                $first = Image::make($first->name)->heighten(625)->crop(625,625);

                //поиск назнаечение фотографии во второй отдел коллажа
                $second_arr = \App\Image::all()->where('id', array_search(2, $array_image));
                foreach ($second_arr as $second) ;
                $second = Image::make($second->name)->heighten(625)->crop(625,625);

                //поиск назнаечение фотографии в третий отдел коллажа
                $third_arr = \App\Image::all()->where('id', array_search(3, $array_image));
                foreach ($third_arr as $third) ;
                $third = Image::make($third->name)->heighten(625)->widen(1300)->crop(1300, 625);


                //-------------ФОРМИРОВАНИЕ КОЛЛАЖА----------------
                $base_image = Image::make($layout);

                $base_image->insert($first, 'top-left', 50, 50);
                $base_image->insert($second, 'top-right', 50, 50);
                $base_image->insert($third, 'bottom', 50, 50);
                return $base_image->response();
            }
        }
    }













}

