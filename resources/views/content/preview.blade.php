@extends('layout')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col s8 offset-s2">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">

                        <span class="card-title">Как выглядит ваш макет</span>

                            <img style="width: 50%;" src="" alt="">
                            {{ $baseView }}

                            <div class="card-action">
                                <button class="btn waves-effect waves-light amber accent-3 pulse" type="submit" name="action">Предпросмотр
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection