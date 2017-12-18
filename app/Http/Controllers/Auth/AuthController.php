<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Socialite;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Route;
use URL;
use DB;
use Illuminate\Support\Facades\Session;
use Exception;

class AuthController extends Controller
{
    protected $redirectPath = '/';
    protected $redirectTo = '/';
    protected $request;

	/**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
        } catch (Exception $e) {
    	    return redirect('auth/' . $provider);
        }

        $authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);

        return redirect('home');
    }

    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $socialUser
     * @return User
     */
    private function findOrCreateUser($socialUser)
    {
        if ($authUser = User::where('social_id', $socialUser->id)->first()) {
            return $authUser;
        }

        return User::create([
            'name' => $socialUser->nickname,
            'email' => $socialUser->email,
            'social_id' => $socialUser->id,
            'password' => '123213123',
        ]);
    }
}