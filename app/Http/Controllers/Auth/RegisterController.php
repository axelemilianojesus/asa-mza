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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
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
            'id'=>['unique:users'],
            'name' => ['required', 'string', 'max:50'],
            'lastName'=>['required', 'string', 'max:50'],
            'userName'=>['required', 'string', 'min:6','max:50'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'date'=> ['required','date'],
            'provincia'=>['required','string', 'max:50'],
            'phone'=>['required','numeric'],
            'level'=>['numeric'],
            'avatar'=>['image'],-
            'cargo'=>['string','max:50']
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
        // para guardar la img del avatar vamos a guardarla en public y la ruta la vamos a guardar en la BD
      $route = $data["avatar"] -> store("public\img\avatar");

      $fileName = basename($route);
  dd($fileName);
      // creamos el usuario
        $user= User::create([
            'name' => $data['name'],
            'lastName'=> $data['lastName'],
            'userName'=> $data['userName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'birthday'=> $data['date'],
            'provincia'=> $data['provincia'],
            'phone'=> $data['phone'],
            'level'=> $data['level'],
            'avatar'=> $fileName, // aca solo guardamos la ruta de la img
            'cargo'=> $data['cargo']
        ]);
        dd($user);
        return $user;
    }
}
