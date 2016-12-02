<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Cache;

class LoginController extends Controller
{
    use AuthenticatesUsers;


    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getLogin(){

        return view('public.login');
    }


    public function postLogin(Request $request){
        dd($request->all());
    }
}
