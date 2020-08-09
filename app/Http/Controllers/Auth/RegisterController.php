<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Role;
use Image;


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
<<<<<<< HEAD
    protected $redirectTo = '/';
=======
    protected $redirectTo = '/home';
>>>>>>> 4d6bcb37afdb70ff1d2016991077f42d5eeeb318

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
<<<<<<< HEAD
        'name' => ['required', 'string', 'max:255'],
=======
            'name' => ['required', 'string', 'max:255'],
>>>>>>> 4d6bcb37afdb70ff1d2016991077f42d5eeeb318
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
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
<<<<<<< HEAD

=======
        $request = app('request');
        if ($request->hasFile('imagen')) {
            $file = $request->imagen('imagen');
            $filename = time() . '.' . $file->getClientOriginalName();
           Image::make($file)->resize(300, 300)->save(public_path('/imagenes' . $filename) );
        }
>>>>>>> 4d6bcb37afdb70ff1d2016991077f42d5eeeb318

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        
<<<<<<< HEAD
        if(request()->hasFile('imagen')){
            $imagen = $request()->file('imagen')->getClientOriginalName();
            $request()->file('imagen')->storeAs('imagen', $user->id . '/' .$imagen, '');
            $user->update(['imagen' => $imagen]);
        }
            

        $user->asignar(2);
        $user->asignarArea(3);

        return $user;
        }
=======

            

        $user->asignar(1);
        $user->asignarArea(3);

        return $user;
    }
>>>>>>> 4d6bcb37afdb70ff1d2016991077f42d5eeeb318


    protected function registered(Request $request, $user)
    {
        $user->generateToken();

        return response()->json(['data' => $user->toArray()], 201);
    }
}
