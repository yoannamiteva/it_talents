<?php

namespace App\Http\Controllers\Auth;


use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    
    public function redirectToProvider()
    {
    	return Socialite::driver('facebook')->redirect();
    }
    
    public function handleProviderCallback()
    {
    	
    	//$user = Socialite::with('facebook')->user();
    	//dd($user);
    	try {
    		$user = Socialite::with('facebook')->user();
    	} catch (Exception $e) {
    		return redirect('/login/facebook');
    	}
    	
    	dd($user);	
    	$authUser = $this->findOrCreateUser($user);
    	Auth::login($authUser, true);
    	return redirect('/home');
    	//        // OAuth Two Providers
    	//        $token = $user->token;
    	//
    	//// OAuth One Providers
    	//        $token = $user->token;
    	//        $tokenSecret = $user->tokenSecret;
    	//
    	//// All Providers
    	//        $user->getId();
    	//        $user->getNickname();
    	//        $user->getName();
    	//        $user->getEmail();
    	//        $user->getAvatar();
    	//
    }
    
    
    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $facebookUser
     * @return User
     */
    
    private function findOrCreateUser($facebookUser)
    {
    	$authUser = User::where('facebook_id', $facebookUser->id)->first();
    
    	if ($authUser){
    		return $authUser;
    	}
    
    	return User::create([
    			'name' => $facebookUser->name,
    			'email' => $facebookUser->email,
    			'password' => bcrypt($this->randomPassword()),
    			'facebook_id' => $facebookUser->id,
    	]);
    	
    }
    
    private function randomPassword( $length = 8 ) {
    	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    	$password = substr( str_shuffle( $chars ), 0, $length );
    	return $password;
    }
    
}
