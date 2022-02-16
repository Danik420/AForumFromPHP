<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required | email',
            'password' => 'required | min:6',
        ]);

        if (! auth()->attempt($request->only('email', 'password'), $request->has('remember')))
        {
            //flash('이메일 또는 비밀번호가 맞지 않습니다.');

            //return back()->withInput();

            return $this->respondError('이메일 또는 비밀번호가 맞지 않아용ㅠㅠ ');
        }

        if (! auth()->user()->activated)
        {
            auth()->logout();
            flash('가입을 확인해주세요.');

            return back()->withInput();
        }

        flash(auth()->user()->name . '님. 환영해용~~ ');

        return redirect()->intended('welcome.index');
        // redirect()->intended() = 로그인 이전에 방문했던 페이지로 되돌아가게 해주는 것. intended(여기 안에 공백으로 넣어도 되는지 확인)
    }

    protected function respondError($message)
    {
        flash()->error($message);

        return back()->withInput();
    }

    public function destroy()
    {
        auth()->logout();
        flash('기다릴게... ');

        return redirect('/');
    }
}
