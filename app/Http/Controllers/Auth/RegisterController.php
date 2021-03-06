<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'prenom' => ['required', 'string', 'max:128'],
            'tel' => ['required', 'string', 'max:16'],
            'ref' => ['required', 'string', 'max:255'],
            'adr_no' => ['required', 'string', 'max:8'],
            'adr_rue' => ['required', 'string', 'max:128'],
            'adr_postal' => ['required', 'string', 'max:8'],
            'adr_ville' => ['required', 'string', 'max:128'],
            'type' => ['required', 'string', 'max:4'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'prenom' => $data['prenom'],
            'tel' => $data['tel'],
            'ref' => $data['ref'],
            'adr_no' => $data['adr_no'],
            'adr_rue' => $data['adr_rue'],
            'adr_postal' => $data['adr_postal'],
            'adr_ville' => $data['adr_ville'],
            'type' => $data['type'],
        ]);
    }
}
