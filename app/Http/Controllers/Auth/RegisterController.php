<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

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
            'password' => ['required', 'string', 'min:4', 'confirmed'],
            'image' => ['image','file','mimes:jpeg,png,jpg,gif,svg','max:1999'],
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

        $request = app('request');
//        dd($request->hasfile('image'));
        if($request->hasfile('image')){
            $avatar = $request->file('image');
            $filename = time() . '.' . $avatar->extension();
            $request->file('image')->move(public_path('uploads/profiles'), $filename);
            $image = Image::make(public_path('uploads\profiles\\' . $filename))->fit(300,300);
            $image->save();
        }else{
            $filename = 'default.png';
        }


        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'image' => $filename,
            'password' => Hash::make($data['password']),
        ]);


    }
}
