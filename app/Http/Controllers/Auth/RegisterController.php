<?php

namespace TestLaravel\Http\Controllers\Auth;

use TestLaravel\User;
use TestLaravel\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
//ここのuse先にメソッドの処理が書いてある
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller{
    use RegistersUsers;

    protected $redirect_To = '/home';

    public function __construct(){

        $this->middleware('guest');
    }
    protected function validator(array $data){
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    protected function create(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}

