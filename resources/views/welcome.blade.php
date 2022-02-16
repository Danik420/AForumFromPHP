@extends('layouts.master')
@section('content')
    <h1>Welcome to Danik Forum</h1>

    <p>- the most useless articles of the world</p>



    <h3>
        <a href="{{ route('post.index') }}" class="btn btn-primary"> 두둥등장하기 </a>
    </h3>
@endsection
