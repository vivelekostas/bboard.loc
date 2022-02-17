<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="/styles/main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <a href="{{ route('index') }}" class="navbar-brand mr-auto">Главная</a>

        @auth
        <a href="#" class="nav-link disabled">{{ Auth::user()->name }}</a>
        @endauth

        <a href="{{ route('register') }}" class="nav-item nav-link">Регистрация</a>
        <a href="{{ route('login') }}" class="nav-item nav-link">Вход</a>
        <a href="{{ route('home') }}" class="nav-item nav-link">Мои Объявления</a>
        <form action="{{ route('logout') }}" method="POST" class="form-inline">
            @csrf
            <input type="submit" class="btn btn-danger" value="Выход">
        </form>
    </nav>

    <div class="container">
        <h1 class="my-3 text-center">Объявления</h1>
        @yield('main')
    </div>
</body>

</html>