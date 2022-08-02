<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Exception;
use App\User;

class GoogleController extends Controller

{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function redirectToGoogle()

    {
        return Socialite::driver('google')->redirect();
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function handleGoogleCallback(){
        try {
			//dd(Socialite::driver('google')->stateless());
            $user = Socialite::driver('google')->stateless()->user();
            $finduser = User::where('google_id', $user->id)
            ->orWhere('email', $user->email)->first();
            
            if ($finduser) {
                $finduser->google_id = $user->id;
                $finduser->save();
                Auth::guard('user')->login($finduser);
                return redirect()->route('front.home');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('123456dummy')
                ]);
                Auth::guard('user')->login($newUser);
                return redirect()->route('front.home');
            }
        } catch (Exception $e) {
            // dd('here2');
            dd($e->getMessage());
        }
    }
}
