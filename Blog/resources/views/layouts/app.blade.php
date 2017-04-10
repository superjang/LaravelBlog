<!DOCTYPE html>
<html>
    <head lang="ko">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
        <META name="author" content="Jae Won Jang">
        <META name="title" content="사이트이름 블라블라">
        <META name="keywords" content="키워드">
        <meta name="description" content="여행블로그 블라블라" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sue+Ellen+Francisco"/>
        <link rel="stylesheet" href="{{ asset('css/travel.css') }}"/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>

        @yield('page')

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script src="../../js/app.js"></script>
    </body>
</html>
