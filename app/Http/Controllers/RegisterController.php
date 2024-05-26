<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Services\UserService;

class RegisterController extends Controller
{
    public function __construct(UserService $service)
    {
    }
    public function registerPage()
    {
        return view('');
    }

    public function registerStore(RegisterRequest $request)
    {
        //
    }
}
