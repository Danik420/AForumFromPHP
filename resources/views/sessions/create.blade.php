@extends('layouts.master')

@section('content')
    <form action="{{ route('sessions.store') }}" method="POST" class="form__auth">
        @csrf

        <div clas="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" value="{{ old('remember', 1) }}" checked>

                    로그인 기억하기 <span class="text-danger">(개인 PC에서만 사용하세용)</span>
                </label>
            </div>
        </div>

        <div>
            <p class="text-center">회원이 아니라면?
            <a href="{{ route('users.create') }}">
                가입하세요!
            </a>
            </p>

            <p class="text-center">
                <a href=""{{ route('remind.create') }}>
                    비밀번호를 잊으셨나요?
                </a>
            </p>
        </div>
    </form>
@endsection
