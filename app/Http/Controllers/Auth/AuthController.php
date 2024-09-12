<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	public function index()
    {
        return view('user.login');
    }
	
	public function authenticate(Request $request)
	{
		
		 $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect(route('dashboard.main'));
        }
        return redirect(route('login'))->withErrors(['email' => 'Пользователь не найден']);
	}

    public function logout(Request $request)
    {
        Auth::logout();
 
		$request->session()->invalidate();
 
		$request->session()->regenerateToken();
 
		return redirect('/');
    }
}
