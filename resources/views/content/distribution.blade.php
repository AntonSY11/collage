@extends('layout')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col s8 offset-s2">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Расстановка фотографий в макет</span>
                        <ul>
                            <li>- Отметьте галочкой где и какая фотография будет находится</li>
                            <li>- Вы можете нажать кнопку "Предпросмотр" и посмотреть как будет выглядить ваш коллаж</li>
                        </ul>
                        <span class="card-title">Ваш выбранный макет</span>
                        <img style="width: 50%;" src="{{ url($collage) }}" alt="">

                        <form action="{{ url('distribution') }}" method="post">

                            <p style="color: #f44336; text-align: center; margin: 0; font-size: 20px;">{{ session()->get('message') }}</p>

                            {{ csrf_field() }}



                            <div class="col s12 m8 offset-m2 l6 offset-l3">
                                <div class="card-panel grey lighten-5 z-depth-1">
                                    <div class="row valign-wrapper">
                                        <div class="col s2">
                                            <img src="{{ url('image/1523787464_5DM30314.png') }}" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                                        </div>
                                        <div class="col s10">
                                        <span class="black-text">
                                            This is a square image. Add the "circle" class to it to make it appear circular.
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card-action">
                                <button class="btn waves-effect waves-light amber accent-3 pulse" type="submit" name="action">Загрузить фотографии
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
