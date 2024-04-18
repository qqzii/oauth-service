<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Passport::hashClientSecrets();

        //        Passport::tokensExpireIn(now()->addDays(40));
        //        Passport::refreshTokensExpireIn(now()->addDays(40));
        //        Passport::personalAccessTokensExpireIn(now()->addDays(40));

        //        Passport::useTokenModel(Token::class);
        //        Passport::useRefreshTokenModel(RefreshToken::class);
        //        Passport::useAuthCodeModel(AuthCode::class);
        //        Passport::useClientModel(Client::class);
        //        Passport::usePersonalAccessClientModel(PersonalAccessClient::class);
    }
}
