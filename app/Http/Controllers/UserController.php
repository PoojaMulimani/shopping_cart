<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

use App\Http\Requests;

class UserController extends Controller
{
    public function getSignup(){
    	return view('user.signup');
    }

    public function postSignup(Request $request){
    	$this->validate($request, [
    		'name' =>'required|min:1',
    		'email' => 'email|required|unique:users',
    		'password' => 'required|min:4'
    	]);

    	$user = new User([
    		'name' => $request->input('name'),
    		'email' => $request->input('email'),
    		'password' => bcrypt ($request->input('password'))
    	]);
    	$user->save();

    	return redirect()->route('product.index');
    }

    public function getSignin(){
    	return view('user.signin');
    }

    public function getLogout(){
    	Auth::logout();
    	return redirect()->route('user.signup');
    }
}
