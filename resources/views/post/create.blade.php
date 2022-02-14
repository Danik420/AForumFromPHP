@extends('layouts.master')

@section('content')
    <h2>글 생성하기</h2>
    <form method="post" action="{{ route('post.index') }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label name="title" for="title">제목</label>
            <input type="text" name="title" class="form-control" value=""/>
        </div>
        <br/>
        <div class="form-group">
            <label name="file" for="file">파일</label>
            <br/>
            <input type="file" name="thumbnail" value=""/>
        </div>
        <br/>
        <div class="form-group">
            <label name="body" for="body">내용</label>
            <textarea name="body" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <input type="submit" value="생성하기" class="btn btn-primary">
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
