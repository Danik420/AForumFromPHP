@extends('layouts.master')

@section('content')
    <br/>
    <h2 style="color: red">Nuclear Wastes</h2>



    <ul class="list-group">
        @forelse($posts as $post)

            <li class="list-group-item" style="background-color: black; color:red; border-color: red">
                <a href="{{  route("post.show", $post->id)  }}" style="color: black">
                    @if ($post->thumbnail==null)
                        <img src="http://localhost:8000/storage/1645592764-nuclear.png" style="max-width: 150;">
                    @else
                        <img src="{{ $post->thumbnail }}" style="max-width: 150;">
                    @endif
                </a>
                <a href="{{  route("post.show", $post->id)  }}"
                   style="color: red; font-weight: bold; text-decoration: none; vertical-align: center">
                    &nbsp&nbsp&nbsp&nbsp&nbsp{{  $post->title  }}</a>
            </li>
        @empty
            <li>
                정보가 없습니다.
            </li>
        @endforelse
    </ul>

    <br/>
    <style>
        [aria-current] .page-link {
            background-color: black !important;
            border-color: black !important;
            color: red !important;
        }

        [rel='prev'], [rel='next'] {
            background-color: red !important;
            border-color: red !important;
            color: black !important;
        }

        .pagination > li :not([rel='prev'],[rel='next'],[aria-current] .page-link) {
            background-color: red !important;
            border-color: red !important;
            color: black !important;
        }
    </style>
    {{ $posts->links('pagination::bootstrap-4')  }}
    {{-- bootstrap-4 아니면 5 둘 중에 스타일 고를 수 있음 --}}

    <br/>
    <h3>
        <a href="{{ route('post.create') }}" class="btn btn-primary"
           style="background-color: red; color:black; border-color: red; font-weight: bold"> 글 쓴다 </a>
        <a href="{{ route('welcome.index') }}" class="btn btn-primary"
           style="background-color: red; color:black; border-color: red; font-weight: bold"> 두둥 퇴장 </a>
    </h3>
@endsection
