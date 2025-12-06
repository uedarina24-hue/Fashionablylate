<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common3.css') }}" />
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__utilities">
                <a class="header__logo" href="/admin">
                FashionablyLate
                </a>
                <nav>
                    <form class="form" action="/logout" method="post">
                        @csrf
                        <ul class="header-nav">
                            @if (Auth::check())
                            <li class="header-nav__item">
                                <button class="header-nav__button" href="/logout">logout</button>
                            </li>
                            @endif
                        </ul>
                    </form>
                </nav>
            </div>
        </div>
    </header>

    <main>
    @yield('content')
    </main>
</body>

</html>