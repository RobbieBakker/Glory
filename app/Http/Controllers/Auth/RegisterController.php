<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use View;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    protected function showRegistrationForm()
    {
        return View::make('auth.register');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => 'required|max:255',
            'namePrefix' => 'max:255',
            'lastName' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'birthday' => 'required|date|before:today',
            'voice' => 'required',
            'role' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstName' => $data['firstName'],
            'namePrefix' => $data['namePrefix'],
            'lastName' => $data['lastName'],
            'email' => $data['email'],
            'birthday' => $data['birthday'],
            'voice' => $data['voice'],
            'role' => $data['role'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
