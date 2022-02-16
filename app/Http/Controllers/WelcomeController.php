<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        flash('하늘색이 참 예쁘네요.');
        // flash()->success(연두색) warning(오렌지색) danger(분홍색)

        return view('welcome');
    }
}
