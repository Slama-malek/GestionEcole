<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginFormAdmin()
    {
        return view('admin.login');
    }
    public function showLoginFormUser()
    {
        return view('user.login-register');
    }
    public function showLoginFormEnseignant()
    {
        return view('Enseignant.login-register');
    }
    public function authenticate(Request $request)
    {
        
       /* $credentials = $request->only('email', 'password');
        dd(Auth::attempt($credentials));
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'usertype' => $request->usertype]))
        {
            return redirect()->intended('admin.home');
        }*/
        dd($request);
        $data = request(['email','password']);
        if(!auth()->attempt($data))
        {
            return back()->withErrors([
                'message'=>'fausse données'
            ]);
        }     
        $request->session()->put('admin', $request->get('email'));
        return redirect()->route('/'); 

    }
    
}
