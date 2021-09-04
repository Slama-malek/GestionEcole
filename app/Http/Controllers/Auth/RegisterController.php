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
       //dd ($data['usertype']);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'usertype' => $data['usertype'],
            'password' => bcrypt($data['password']),
        ]);
    }
  
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Parents
     */
   
    public function registerUser(Request $request)
    {
        $this->validation($request);
       // dd($request->all());
       
        $user = new User();
        $user->usertype=$request->get('usertype');
        $user->name=$request->get('_name');
        $user->email=$request->get('_email');
        $user->password=bcrypt($request->get('_password'));
        $user->save();
        return redirect('/login-user');
        
    }
    
  
    public function validation($request)
    {
        return $this->validate($request,[
            '_name'=>'required|max:255',
            '_email'=>'required|max:255',
            '_password'=>'required|confirmed|max:255',
        ]);
    }
    public function showLogin_register()
    {
        return view("user.login-register");
    }
    public function showRegistrationAdmin()
    {
        return view("admin.register");
    }
    public function handleProviderCallback($provider)
    {
        try
        {
            $socialUser = Socialite::driver($provider)->user();
        }
        catch(\Exception $e)
        {
            return redirect('/');
        }
        //check if we have logged provider
        $socialProvider = SocialProvider::where('provider_id',$socialUser->getId())->first();
        if(!$socialProvider)
        {
            //create a new user and provider
            $user = User::firstOrCreate(
                ['email' => $socialUser->getEmail()],
                ['name' => $socialUser->getName()]
            );

            $user->socialProviders()->create(
                ['provider_id' => $socialUser->getId(), 'provider' => $provider]
            );

        }
        else
            $user = $socialProvider->user;

        auth()->login($user);

        return redirect('/');

    }
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
}
