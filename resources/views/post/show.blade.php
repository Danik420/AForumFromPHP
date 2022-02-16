@extends('layouts.master')

@section('content')
    <br/>
    <h2>{{ $post->title }}</h2>

    <article>
        {{ $post->body }}
    </article>

    <article>
        <img src=" {{ $post->thumbnail }}">

    </article>
    <br/>

    <h3>
        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary"> 글 수정하기 </a>
        <br/>
        <br/>

        <form method="POST" action="{{route('post.destroy', $post->id)}}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <div class="form-group">
                <input type="submit" value="삭제하기" class="btn btn-danger">
            </div>
        </form>

        <a href="{{ route('post.index') }}" class="btn btn-primary"> 글 목록으로 </a>
    </h3>

@endsection
