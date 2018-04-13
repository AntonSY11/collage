@extends('layout')

@section('content')



<div class="container">
    <div class="row">
        <div class="col s8 offset-s2">
            <div class="card blue-grey darken-1">
                <form action="{{ url('choose-collage') }}" method="post">
                    @csrf
        <p style="color: #f44336; text-align: center; margin: 0; font-size: 20px;">{{ session()->get('message') }}</p>
                    <div class="card-content white-text">
                        <span class="card-title">Выберите коллаж</span>

                        <div class="row image">
                            @foreach($collages as $collage)
                            <div class="col s4">
                                <img src="{{ $collage->path }}" alt="">
                                <p>
                                    <label>
                                        <input name="collage" value="{{ $collage->name }}" type="radio"/>
                                        <span>{{ $collage->title }}</span>
                                    </label>
                                </p>
                            </div>
                            @endforeach


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
@endsection