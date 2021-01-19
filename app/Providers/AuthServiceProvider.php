<?php

namespace App\Providers;

use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {
        // Here you may define how you wish users to be authenticated for your Lumen
        // application. The callback which receives the incoming request instance
        // should return either a User instance or null. You're free to obtain
        // the User instance via an API token or any other method necessary.
        $this->app['auth']->viaRequest('api', function ($request) {   
            
            if ( $request->header('authorization') ){

                $user = Users::where('email', $request->header('php-auth-user') )
                        ->where('status',1)->first();
             
                if ( $user AND app('hash')->check(  $request->header('php-auth-pw') , $user->password ) ){                  
                    return $user;     
                }
            }
        });

    }
}
