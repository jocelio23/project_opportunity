<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function log()
    {
        return view('Auth/login');
    }

    public function logar()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) 
        {
            return back()->withErrors([
                'message' => 'Email ou senha está incorreta'
            ]);
        }
        return redirect()->route('vaga.createList');
        
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login.show');
    } 

}
