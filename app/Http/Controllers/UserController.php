<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorisationRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\StatementRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $requests = $request->validated();
        $requests['password'] = Hash::make($requests['password']);
        User::create($requests);
        return redirect()->route('login');
    }

    public function authorisation(AuthorisationRequest $request)
    {
        if(Auth::attempt($request->validated())){
            $request->session()->regenerate();

            if (Auth::user()->isAdmin){
                return redirect()->route('admin_panel');
            }

            return redirect()->route('main');
        }
        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->regenerate();
        return redirect()->route('login');
    }
}
