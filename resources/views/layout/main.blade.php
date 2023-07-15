<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{asset('css/app.min.css')}}">
</head>
<body>
    <header class="container">
        <span class="logo">Blog Spot</span>
        <nav>
            <a href="/">Главная</a>
            <a href="/about">Про нас</a>

            <a href="/blog">Блог</a>
            <a href="/public/shop">Магазин</a>
             <a href="/contacty">Контакты</a>
             @guest
                {{-- @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif --}}
                <a href="/login" class="btn btn-outline-info">Войти</a>
                <a href="/register" class="btn btn-outline-info">Регистрация</a>

                {{-- @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif --}}
         @else
         <a href="/article/add">Добавить статью</a>
         <a href="/user" class="btn btn-outline-info">{{ Auth::user()->name }}</a>
         {{-- /home -стандартная ссылка на кабинет пользователя --}}


            <form  action="/logout" method="POST" >
                @csrf
                <button type="submit" class="btn btn-outline-danger ms-1">Выйти</button>
            </form>


         @endguest

        </nav>
    </header>

    <main class="container">
        @include('blocks/messages')
        @yield('content')
    </main>
    <footer>
        Все права защищены
    </footer>


</body>
</html>
