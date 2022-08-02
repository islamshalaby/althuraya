<?php

namespace App\Http\Controllers\Front;

use App\Services\SocialFacebookAccountService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;

class SocialAuthFacebookController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function callback(SocialFacebookAccountService $service, Request $request)
    {
		if(!$request->has('code') || $request->has('denied')) {
			return redirect()->route('front.home');
		}else {
			//dd(Socialite::driver('facebook')->stateless()->user());
			$user = $service->createOrGetUser(Socialite::driver('facebook')->stateless()->user());
			
			auth()->guard('user')->login($user);
			
			return redirect()->route('front.home');
		}
    }
}
