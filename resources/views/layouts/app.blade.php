<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Trang chủ') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/modal.css">
    <link rel="stylesheet" href="/css/grid.css">
    <link rel="stylesheet" href="/css/user-list.css">
    <link rel="stylesheet" href="/css/edit-user.css">

    <link rel="stylesheet" href="/css/edit-user.css">
    <link rel="stylesheet" href="/css/jobs.css">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light dshadow-sm my-header">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Trang chủ
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <ul class="navbar-nav menu">
                                <li class="nav-item">
                                    <a class="navbar-brand" href="{{ url('/jobs') }}">
                                        Việc làm
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="navbar-brand" href="{{ url('/') }}">
                                        Mức lương
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="navbar-brand" href="{{ url('/') }}">
                                        Công ty
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="navbar-brand" href="/users">
                                        Người dùng
                                    </a>
                                </li>


                            </ul>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 main">
            @yield('content')
            @yield('test')
            @yield('users')
            @yield('edit-user')
            @yield('jobs')
        </main>
    </div>
</body>

</html>
