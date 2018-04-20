@extends('layout')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col s8 offset-s2">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">История созданий коллажей</span>


                        <form action="{{ url('distribution') }}" method="post">

                            <p style="color: #f44336; text-align: center; margin: 0; font-size: 20px;">{{ session()->get('message') }}</p>

                            {{ csrf_field() }}

                            <table class="centered highlight">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Фотография</th>
                                    <th>Дата создания</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(empty($all_collage->toArray()))
                                    <p>К сожалению у вас еще нет коллажей, вы можете <a href="{{ url('choose-collage') }}">ПЕРЕЙТИ</a> к созданию коллажа</p>
                                @else
                                    @foreach($all_collage as $collage)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td><img style="width: 20%; margin: 0;" src="{{$collage->path}}" alt=""></td>
                                            <td><p>{{$collage->date}}</p></td>
                                            <td style="width: 200px;">
                                                <button class="btn waves-effect waves-light amber orange darken-2 pulse" type="submit">Скачать
                                                    <i class="material-icons right">send</i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif






                                </tbody>
                            </table>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

