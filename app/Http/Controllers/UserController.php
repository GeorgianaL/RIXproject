<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validate;
use App\User;
use Hash;
use Auth;

class UserController extends Controller
{
    public function signup(Request $request) {
    	$this->validate($request, [
    		'fullname' => 'required',
    		'email' => 'required|email|unique:users',
    		'password' => 'required|min:6'
    		]);
    	$user = new User();
    	$user->full_name = $request->input('fullname');
    	$user->email = $request->input('email');
    	$user->password = Hash::make($request->input('password'));
    	$user->save();
    	return redirect('/');
    }
    public function login(Request $request) {
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    		]);
    	 if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return 'Login successfull!';
        }
        else return "Login fail!";
    }
    public function logout() {
    	Auth::logout();
    	return redirect('/');
    }
}
