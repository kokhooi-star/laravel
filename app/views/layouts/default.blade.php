<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lunch Go Where?</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        @include('layouts.partials.flash')

        @yield('content')
    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    {{ HTML::script('js/laravel.js') }}
     @yield('js')
</body>
</html>