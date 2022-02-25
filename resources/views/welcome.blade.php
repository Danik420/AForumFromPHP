@extends('layouts.master')

@section('content')
    <h1 style="color:red">Welcome to Danik Forum</h1>

    <p style="color:red">- the most useless articles of the world</p>


    <br/>
    <br/>
    <br/>
    <h3>
        <a href="{{ route('post.index') }}" class="btn btn-primary"
           style="background-color: red; color:black; border-color: red; font-weight: bold"> 두둥 등장 </a>
    </h3>
@endsection
