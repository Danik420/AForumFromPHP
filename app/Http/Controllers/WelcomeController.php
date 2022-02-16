<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        flash('이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다
         이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다
         이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다
         이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다 이것은 하늘색이다
         이것은 하늘색이다 ㅇㅋ?');
        // flash()->success(연두색) warning(오렌지색) danger(분홍색)

        return view('welcome');
    }
}
