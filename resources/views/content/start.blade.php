@extends('layout')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col s8 offset-s2">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Добро пожаловать!</span>
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut commodi,
                            delectus dolorum eius eum exercitationem magnam molestias quibusdam quod soluta.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet asperiores at
                            aut blanditiis commodi consequatur consequuntur delectus doloribus eos error facere
                            facilis hic illum inventore ipsam, ipsum iusto minima molestias nesciunt odio officia optio
                            porro quaerat quam quasi qui quibusdam quis quod recusandae repellat repudiandae sint sit temporibus, ullam vero voluptas. Doloremque eius error eveniet facilis incidunt iste, iure iusto, laboriosam magni maiores modi molestias placeat quas quasi quis ratione repellat repellendus reprehenderit sed tempora temporibus ullam ut veniam veritatis vero! Aliquam atque delectus fuga id, illo inventore labore nulla pariatur quas
                            i qui repellendus, similique totam ullam ut vero!</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('choose-collage') }}" class="waves-effect waves-light btn  amber accent-3 pulse"><i class="material-icons left">send</i>Создать коллаж</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection