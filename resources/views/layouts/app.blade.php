<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @csrf

    <title>Danik Forummmmmmmmmmm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</head>
</br>
<body style="background-color: black">
    <div id="app">
        @include('partials.navigation')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
