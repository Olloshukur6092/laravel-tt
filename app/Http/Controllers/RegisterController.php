<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Services\UserService;

class RegisterController extends Controller
{
    public function __construct(protected UserService $service)
    {
    }
    public function registerPage()
    {
        return view('auth.register');
    }

    public function registerStore(RegisterRequest $request)
    {
        $this->service->register($request);

        return to_route('auth.login');
    }
}
