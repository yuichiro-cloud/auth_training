<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

interface UserTokenProviderInterface
{
    /**
     * @param string $token
     *
     * @return \stdClass|null
     */
    public function retrieveUserByToken(string $token);
}

// class UserTokenProviderInterface extends ServiceProvider
// {
//     /**
//      * Register services.
//      *
//      * @return void
//      */
//     public function register()
//     {
//         //
//     }

//     /**
//      * Bootstrap services.
//      *
//      * @return void
//      */
//     public function boot()
//     {
//         //
//     }
// }
