@extends('layouts.master')
@section('content')
    <h1>All Posts</h1>



    <ul class="list-group">
        @foreach($posts as $post)
            <li class="list-group-item">
                <a href="{{  route("post.show", $post->id)  }}">{{  $post->title  }}</a>
            </li>
        @endforeach
    </ul>
    {{ $posts->links('pagination::bootstrap-5') }}
    {{-- bootstrap-4 아니면 5 둘 중에 스타일 고를 수 있음 --}}


    <h3>
        <a href="{{ route('post.create') }}" class="btn btn-primary"> 글 작성하기 </a>
        <a href="{{ route('welcome.index') }}" class="btn btn-primary"> 두둥퇴장하기 </a>
    </h3>
@endsection
