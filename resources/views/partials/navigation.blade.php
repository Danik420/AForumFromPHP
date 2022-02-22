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
                        <li class="nav-item" >
                            <a href="{{ route('post.index')}}" class="btn btn-primary-outline">Posts</a>
                            <a href="{{ route('about.us')}}" class="btn btn-primary-outline">About US</a>
{{--                            <a href="{{ route('sign.in')}}" class="btn btn-primary-outline">Sign In</a>
                            <a href="{{ route('users.create')}}" class="btn btn-primary-outline">Sign UP</a>--}}
                            {{--<a class="nav-link" href="/{{ $navbarItem->route }}">{{ $navbarItem->name }}</a>--}}
                        </li>
                </ul>
            </div>
        </div>
    </nav>

</div>
