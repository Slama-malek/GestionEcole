<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use App\Enseignant;

class RegisterController extends Controller
{
    public function showRegisterFormAdmin()
    {
        return view('admin.register');
    }
    public function register(Request $request)
    {
        $this->validation($request);
       // dd($request->all());
       
        $user = new User();
        $user->usertype="admin";
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->password=bcrypt($request->get('password'));
        $user->save();
        return redirect('/login-admin');
        
    }
    public function registerUser(Request $request)
    {
        $this->validationUser($request);
       // dd($request->all());
        $mail=DB::table('users')->where('users.email','=',$request->get('_email'))->first();
        
        if($mail!=null){
            return redirect('/login-parent')->with('err_reg','adresse mail déja utilisé');
        }
        $user = new User();
        $user->usertype=$request->get('usertype');
        $user->name=$request->get('_name');
        $user->email=$request->get('_email');
        $user->password=bcrypt($request->get('_password'));
        $user->save();
        return redirect('/login-parent')->with('ok_reg','ajout effectué !!');
        
    }
    public function registerEnseignant(Request $request)
    {
       
        $this->validationUser($request);
       // dd($request->all());
        $mail=DB::table('users')->where('users.email','=',$request->get('_email'))->first();
        
        if($mail!=null){
            return redirect('/login-enseignant')->with('err_reg','adresse mail déja utilisé');
        }
        $user = new User();
        $user->usertype=$request->get('usertype');
        $user->name=$request->get('_name');
        $user->email=$request->get('_email');
        $user->password=bcrypt($request->get('_password'));
        $user->save();
        
        
        return redirect('/login-enseignant')->with('success','votre inscription est effectuée avec succées !
        Votre demande  sera traitée dans les plus brefs délais...');
        
    }
    public function validationUser($request)
    {
        return $this->validate($request,[
            '_name'=>'required|max:255',
            '_email'=>'required|max:255',
            '_password'=>'required|required_with:password_confirm|same:password_confirm|max:255',
        ]);
    }
    public function validation($request)
    {
        return $this->validate($request,[
            'name'=>'required|max:255',
            'email'=>'required|max:255',
            'password'=>'required|confirmed|max:255',
        ]);
    }
    public function admins()
    {
        
        $admins=DB::table('users')->where('users.usertype','=','admin')->orWhere('users.usertype','=','pending')->get();
        return view('admin.Administrateurs')->with(compact('admins'));
    }
    public function changeStateAdmins(Request $request){
        $user=User::find($request->id);
        $user->usertype=$request->ns;
        $user->save();
    }
}