@extends('layout')


@section('content')

<div class="container">
    <div class="row">
        <div class="col s8 offset-s2">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Регистрация</span>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <div class="row">
                            <div class="input-field col s6">
                                <input id="name" type="text" data-length="10" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                <label class="active" for="name">{{ __('Name') }}</label>

                                @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <input id="email" type="email" data-length="10" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                <label class="active" for="email">{{ __('E-Mail Address') }}</label>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>












                        <div class="row">
                            <div class="input-field col s6">
                                <input id="password" type="password" data-length="30" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <label for="password">{{ __('Password') }}</label>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>






                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                            </div>
                        </div>









                        <div class="row">
                            <div class="input-field col s6">

                                <button class="btn waves-effect waves-light" type="submit" name="action">{{ __('Register') }}
                                    <i class="material-icons right">send</i>
                                </button>


                            </div>
                        </div>










                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection