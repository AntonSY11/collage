@extends('layout')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col s8 offset-s2">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Загрузите пожалуйста фотографии</span>
                        <p>Количество загружаемых фотографий ограничено:</p>
                        <ul>
                            <li>- Максимальное количество загружаемых фотографий 6ШТ</li>
                            <li>- Размер фоторгорафии не должен превышать 2МБ</li>
                        </ul>

                            <form action="{{ url('download-image') }}" method="post" enctype="multipart/form-data">

                                <p style="color: #f44336; text-align: center; margin: 0; font-size: 20px;">{{ session()->get('message') }}</p>
                                @if($errors->any())
                                @foreach($errors->all() as $error)
                                        <p style="color: #f44336; text-align: center; margin: 0; font-size: 20px;">{{ $error }}</p>
                                @endforeach
                                @endif
                                {{ csrf_field() }}
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>File</span>
                                        <input type="file" name="images[]" multiple>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload one or more files">
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