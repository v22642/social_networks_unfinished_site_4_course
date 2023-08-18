<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Providers\RouteServiceProvider;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $path=$request->file('avatar')->store('uploads','public');
        // return view('logo',['path'=>$path]);
        $validated = $request->validate([
            'first_name'=>['required', 'string', 'max:50'],
            'lest_name'=>['required', 'string', 'max:50'],
            
            'email' => ['required', 'string', 'max:50', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:7', 'max:50', 'confirmed'],
            'birthday'=>[],
            'avatar'=>[],
            'agreement' => ['accepted'],
        ]);
        // dd($v);
        $user = User::query()->create([
            
            'first_name'=>$validated['first_name'],
            'lest_name'=>$validated['lest_name'],
            'birthday'=>$validated['birthday'],
            'avatar'=>$path,
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        Auth::login($user);
        return redirect()->route('home');
    }
    public function v()
    {
        return view('logo');
    }

    public function logo(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ]);

        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);

        

        
    }
}
