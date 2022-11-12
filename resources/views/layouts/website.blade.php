<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title') </title>
    @include('web.include.__head')


</head>

<body>

    <!--   **********  Main Page **********  -->
    <header class="main-header">

        @include('web.include.__navigation')

    </header>

    @include('web.include.__alerts')
    @yield('content')

    <footer class="main-footer">
        @include('web.include.__footer')
    </footer>

    @include('web.include.__script')

</body>

</html>
