<?php

namespace App\Services;

use App\Mail\VerifyEmail;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Mail;

class UserService
{
    public function login(FormRequest $request)
    {
        //
    }

    public function register(FormRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->remember_token = Str::random(40);

        $user->save();
        
        Mail::to($user->email)->send(new VerifyEmail($user));
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
