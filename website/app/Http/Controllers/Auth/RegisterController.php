<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Token;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::LOGIN;

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
            'username' => ['required', 'string', 'max:255', 'unique:users,username'],
            'email' => ['required', 'string', 'email', 'max:255', 'confirmed', 'unique:users,email'], //confirmed under email_confirmation
            'password' => ['required', 'string', 'min:8', 'confirmed'], //confirmed under password_confirmation
            'token' => ['required', 'string', 'size:20', 'exists:tokens,value'], //20 char long token
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // Search token in db
        $token = Token::where('value', $data['token'])->first();
        // Error if wrong token needs to be more pretty actually.
        if($token === null)
            throw new \BadMethodCallException("Token already taken or invalid");
        // delete the token
        Token::where('value', $data['token'], 0)->delete();
        // give back the user
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'admin' => false,
            'password' => Hash::make($data['password']),
        ]);
    }
}
