<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        
                            <li><a href="">О компании</a></li>
                            <li><a href="">Деятельность</a></li>
                            <li><a href="">Нормативно-правовая база</a></li>
                            <li><a href="">Раскрытие информации</a></li>
                            <li><a href="">Энергосбережение</a></li>
                            <li><a href="">Новости</a></li>
                            <li><a href="">Контакты</a></li>
                            <li><a href="">Потребителям</a></li>
                            <li><a href="">Интернет-приемная</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    
            <footer class="footer">
            <div class="container">
                <p class="pull-left">&#169; 2018 Телефон: +7 (495) 740-43-37</p>
                <p class="pull-right">Email: sinef@sinef-group.ru</p>
            </div>
        </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
