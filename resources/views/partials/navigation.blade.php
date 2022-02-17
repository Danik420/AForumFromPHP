<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Danik Forum
            </a>

            <div class="collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">
                {{--style="border:1px solid #9f3e3e; 그리고 우측정렬은 flex-row-reverse!! --}}
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto" >
                    @foreach ($navbars as $navbarItem)
                        <li class="nav-item" >
                            <a class="nav-link" href="{{ route($navbarItem->route) }}">{{ $navbarItem->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>

</div>
