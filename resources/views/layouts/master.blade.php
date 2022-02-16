
<html>

<head>
    @csrf

    <title>Danik Forum</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</head>


<body>

@include('partials.navigation')

<div class="container">
    @include('flash::message')
    @yield('content')
</div>

{{-- @include('layouts.partials.footer') --}}


<script src="=https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
@yield('script')
</body>
</html>

{{-- 만약에 모든 페이지에서 같은 레이아웃이 보이는 경우에는 레이아웃 master 블레이드에 전부 떄려박아도 되지만 페이지마다 보이는 레이아웃이 다른 경우에는
     다른 레이아웃 블레이드를 만들어줘야함. --}}
