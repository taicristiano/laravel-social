<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Exception;
use App\Library\StringHelper;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    protected $redirectPath = '/';
    protected $redirectTo = '/';
    protected $request;
    
	/**
     * Redirect the user to the provider authentication page.
     * @param  Request $request
     * @param  string  $provider
     * @return Response
     */
    public function redirectToProvider(Request $request, $provider)
    {
        if (Session::has('lang')) {
            Session::forget('lang');
        }
        if ($request->has('lang')) {
            $lang  = $request->query('lang');
            Session::push('lang', $lang);
        }
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.
     * @param  Request $request
     * @param  string  $provider
     * @return Response
     */
    public function handleProviderCallback(Request $request, $provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
            Log::info($provider);
            Log::info(print_r($user, true));
            $langSession = null;
            if (Session::has('lang')) {
                $langSession = Session::get('lang')[0];
                Session::forget('lang');
            }
            $lang = StringHelper::formatStringLanguage($user, $provider, $langSession);

            $authUser = User::findOrCreateUser($user, $lang, $request->ip(), $provider);

            Auth::login($authUser, true);
            return redirect()->route('home', ['lang' => $lang]);
        } catch (Exception $e) {
            return redirect('auth/' . $provider);
        }

    }
}