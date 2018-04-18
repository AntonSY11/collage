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
                        @foreach($collage as $maket)
                            <img style="width: 50%;" src="{{ url($maket->path) }}" alt="">
                        @endforeach

                        <form action="{{ url('distribution') }}" method="post">

                            <p style="color: #f44336; text-align: center; margin: 0; font-size: 20px;">{{ session()->get('message') }}</p>

                            {{ csrf_field() }}

                            <table class="centered highlight">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Фотография</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($images as $image)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td><img style="width: 20%; margin: 0;" src="{{ $image->name }}" alt=""></td>
                                        <td style="width: 200px;">
                                                @for($i = 1; $i <= $maket->count_field; $i++)
                                                    <label>
                                                            <input name="position[{{ $image->id }}]" value="{{ $i }}" type="radio">
                                                            <span>Секция № {{ $i }}</span>
                                                    </label>
                                                @endfor
                                        </td>
                                    </tr>
                                @endforeach



                                </tbody>
                            </table>


                            <div class="card-action">
                                <button class="btn waves-effect waves-light amber accent-3 pulse" type="submit">Предпросмотр
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

