<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<section>
    <nav>
        <div class="nav-wrapper grey darken-4">
            <div class="container">
                <a href="index.php" class="brand-logo">DoCollage</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a class="waves-effect waves-light btn grey darken-3" href="#">Авторизация</a></li>
                    <li><a class="waves-effect waves-light btn grey darken-3" href="#">Регистрация</a></li>
                </ul>
            </div>
        </div>
    </nav>




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

</section>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>