<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_login()
    {
        return view('login');
        //login ke register
    }


    public function login(Request $request)
    {
        //
        $credential = $request->validate([
    
            'email' => 'required|email',
            'password' => 'required|min:5|max:20'
        
        ]);

        if (!Auth::attempt($credential, $request->input('remember'))){
            return redirect()->back()->withErrors('Invalid Credential!');
        }

        return redirect()->route('index_home');
    }

    public function register(Request $request)
    {
        //
    
        $request->validate([
            'inputEmail' => 'required|email',
            'inputUsername' => 'required',
            'inputPassword' => 'required|min:5|max:20', 
        ]);

        $newUser = new User();
        $newUser->email = $request->input('inputEmail');
        $newUser->username = $request->input('inputUsername');
        $newUser->password = Hash::make($request->input('inputPassword'));
        
        $newUser->save();

        return redirect()->route('index_login');

    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
    

    public function index_register(Request $request)
    {
        //register ke login
        return view('register');

    }

}