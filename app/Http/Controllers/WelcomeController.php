<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        flash()->warning('<br/><br/> this is a yellow rounded box <br/><br/><br/>');
        // flash()->success(연두색) warning(오렌지색) danger(분홍색)

        return view('welcome');
    }
}
