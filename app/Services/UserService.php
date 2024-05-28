<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UserService
{
    public function login(FormRequest $request)
    {
        //
    }

    public function register(FormRequest $request)
    {
        $data = $request->validated();
        User::create($data);
    }

    public function logout()
    {
        //
    }

    public function delete()
    {
        //
    }
}
