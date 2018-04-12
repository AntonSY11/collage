@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s8 offset-s2">
            <div class="card blue-grey darken-1">
                <form action="main.php" method="GET">
                    <div class="card-content white-text">
                        <span class="card-title">Выберите коллаж</span>
                        <div class="row image">

                            <div class="col s4">
                                <img src="img/layout1.png" alt="">
                                <p>
                                    <label>
                                        <input name="group1" type="radio"/>
                                        <span>Коллаж №1</span>
                                    </label>
                                </p>
                            </div>

                            <div class="col s4">
                                <img src="img/layout2.png" alt="">
                                <p>
                                    <label>
                                        <input name="group1" type="radio"/>
                                        <span>Коллаж №2</span>
                                    </label>
                                </p>
                            </div>


                            <div class="col s4">
                                <img src="img/layout3.png" alt="">
                                <p>
                                    <label>
                                        <input name="group1" type="radio"/>
                                        <span>Коллаж №3</span>
                                    </label>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn waves-effect waves-light amber accent-3 pulse" type="submit" name="action">Дальше
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection