<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
	//menampilkan halaman login
    public function showLoginForm()
    {
    	return view("login-form");
    }

    public function login(Request $request)
    {
    	$credential = $request->only("username", "password");
    	if (Auth::attempt($credential))
    	{
    		// Meneruskan ke halaman daftar mahasisswa ketika sukses
    		return redirect()->route("biodata.index");
    	} else 
    	{
    		// Mengembalikan ke halaman login ketika gagal
    		return redirect()->back();
    	}
    }

    public function logout()
    {
        Auth::logout(); //logout user

        return redirect()->route("login.index");
    }

}
