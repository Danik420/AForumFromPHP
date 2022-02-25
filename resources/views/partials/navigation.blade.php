<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-black shadow-sm">
        {{--        <nav class="navbar navbar-expand-md navbar-dark @auth bg-blue @endauth @guest bg-black @endguest ">--}}

        <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}" style="color: red">
                Danik Forum
            </a>


            <div class="collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">
            {{--style="border:1px solid #9f3e3e; 그리고 우측정렬은 flex-row-reverse!! --}}
            <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto" >
                    <li class="nav-item" >
                        <a href="{{ route('post.index')}}" class="btn btn-primary-outline"
                           style="color: red">Posts</a>
                        <a href="{{ route('about.us')}}" class="btn btn-primary-outline"
                           style="color: red">About US</a>
                        @if(auth())
                        {{-- 로그아웃, 마이페이지 --}}
{{--                        @elseif(admin)--}}
                        {{-- 로그아웃, 관리자페이지 --}}
                        @else
                            <a href="{{ route('login')}}" class="btn btn-primary-outline"
                               style="color: red">Sign In</a>
                            <a href="{{ route('register-user')}}" class="btn btn-primary-outline"
                               style="color: red">Sign UP</a>
                        @endif


                        {{--<a class="nav-link" href="/{{ $navbarItem->route }}">{{ $navbarItem->name }}</a>--}}
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div>
