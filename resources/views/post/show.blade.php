@extends('layouts.master')

@section('content')
    <br/>
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-8" style="width: 100%">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $post->title }}</h4>
                    </div>
                    <div class="card-body">
                        <p>
                        <article>
                            {{ $post->body }}
                        </article>
                        <br/>
                        <article>
                            <img src="{{ $post->thumbnail }}" style="max-width: 805">
                        </article>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
