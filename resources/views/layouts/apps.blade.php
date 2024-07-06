<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Shinjiru')</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome-5.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/unicons.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/master.css">
</head>
<body>
    @include('partials.headers')
    @include('partials.sidebar')

    <div class="content">
        @yield('content')
    </div>
    @include('partials.script')
    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
