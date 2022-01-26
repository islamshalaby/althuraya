<?php

namespace App\Services;
use App\SocialFacebookAccount;
use App\User;
use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialFacebookAccountService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
        $account = User::where('facebook_id', $providerUser->getId())
        ->orWhere('email', $providerUser->getEmail())
            ->first();
		
        if ($account) {
            $account->facebook_id = $providerUser->getId();
            $account->save();
            return $account;
        } else {

            $account = new SocialFacebookAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'facebook'
            ]);

            $user = User::create([
                'email' => $providerUser->getEmail(),
                'name' => $providerUser->getName(),
                'facebook_id' => $providerUser->getId(),
                'password' => md5(rand(1,10000)),
            ]);

            $account->user()->associate($user);
            $account->save();

            return $user;
        }
    }
}
