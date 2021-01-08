<?php 

namespace App\Http\Controllers;
use Auth;
// use App\Models\User;

class AuthController extends Controller{
	function showLogin(){
		return view('login');
	}
	function loginProcess(){
		if(Auth::attempt(['username' => request('username'), 'password' => request('password')])){
			return redirect('beranda')->with('success', 'Selamat Datang ...');
		} else{
			return back()->with('danger', 'Login Gagal, Silahkan Coba Lagi');
		}
	}
	function logout(){
		Auth::logout();
		return redirect('login');
	}
	function showRegister(){
		return view('register');
	}
	function forgotPassword(){
		// return view('login');
	}
}