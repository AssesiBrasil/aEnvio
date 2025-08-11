<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $isValid = User::where('email', '=', $email)->where('password', '=', $password)->first();

        if($isValid != null)
        {
            Auth::login($isValid);

            return to_route('dashboard');
        }else{
            dd('deu ruim');
        }
    }
}
