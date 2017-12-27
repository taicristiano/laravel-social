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
use App\Library\IpHelper;
use App\Library\StringHelper;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    protected $redirectPath = '/';
    protected $redirectTo = '/';
    protected $request;
    
	/**
     * Redirect the user to the provider authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.
     *
     * @return Response
     */
    public function handleProviderCallback(Request $request, $provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
            Log::info($provider);
            Log::info(print_r($user, true));
            $lang = StringHelper::formatStringLanguage($user, $provider);

            $authUser = User::findOrCreateUser($user, $lang, $request->ip(), $provider);

            Auth::login($authUser, true);
            return redirect()->route('home', ['lang' => $lang]);
        } catch (Exception $e) {
            return redirect('auth/' . $provider);
        }

    }
}