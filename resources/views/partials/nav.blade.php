<nav>
    <div class="nav-wrapper grey darken-4">
        <div class="container">
            <a href="{{ url('/') }}" class="brand-logo">DoCollage</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                @guest
                    <li><a class="waves-effect waves-light btn grey darken-3" href="{{ route('login') }}">Авторизация</a></li>
                    <li><a class="waves-effect waves-light btn grey darken-3" href="{{ route('register') }}">Регистрация</a></li>
                @else
                    <li>Добро пожаловать, {{ Auth::user()->name }} !</li>
                    <li><a href="{{ url('profile') }}" aria-labelledby="navbarDropdown" class="Medium"><i style="font-size: 35px" class="material-icons right">perm_identity</i></a></li>
                    <li><a href="{{ route('logout') }}" aria-labelledby="navbarDropdown" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="waves-effect waves-light btn grey darken-3">
                            Выйти
                        </a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </ul>
        </div>
    </div>
</nav>