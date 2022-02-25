@extends('layouts.master')

@section('content')
    <h2 style="color: red">글을 쓰는 것이다</h2>
    <form method="post" action="{{ route('post.index') }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label name="title" for="title" style="color: red">제목이다</label>
            <input type="text" name="title" class="form-control" value=""
                   style="background-color: red; border-color: red"/>
        </div>
        <br/>
        <div class="form-group">
            <label name="file" for="file" style="color: red">파일임</label>
            <br/>
            <input class="form-control" type="file" name="thumbnail" value=""
                   style="background-color: red; border-color: red"/>
        </div>
        <br/>
        <div class="form-group">
            <label name="body" for="body" style="color: red">내용일듯</label>
            <textarea name="body" class="form-control"
                      style="background-color: red; border-color: red"></textarea>
        </div>
        <br/>
        <div class="form-group">
            <input type="submit" value="다 썼다" class="btn btn-primary"
                   style="background-color: red; color:black; border-color: red; font-weight: bold">
        </div>
    </form>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            @foreach($errors->all() as $messages)
                {{ $messages }}
            @endforeach
        </div>
    @endif
@endsection
