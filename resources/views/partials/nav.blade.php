<nav>
    <div class="nav-wrapper grey darken-4">
        <div class="container">
            <a href="{{ url('/') }}" class="brand-logo">DoCollage</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="waves-effect waves-light btn grey darken-3" href="{{ route('login') }}">Авторизация</a></li>
                <li><a class="waves-effect waves-light btn grey darken-3" href="{{ route('register') }}">Регистрация</a></li>
            </ul>
        </div>
    </div>
</nav>