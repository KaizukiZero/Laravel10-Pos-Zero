<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env("APP_NAME")}}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('css-master')
</head>

<body>
    <div class="master">
        @auth
        @include('layouts.sidebar')
        @endauth
        <div class="container">
            <div class="searchbar">
                <input type="text" class="search-form" placeholder="Search..">
            </div>
                @yield('contents')
        </div>
    </div>
</body>
@stack('js-master')

</html>
