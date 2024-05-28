<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\UserService;

class LoginController extends Controller
{
    public function __construct(protected UserService $service)
    {
    }
    
    public function loginPage()
    {
        return view('auth.login');
    }

    public function checkLogin(LoginRequest $request)
    {
        //
    }
}
