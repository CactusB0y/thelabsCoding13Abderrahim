<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('adminWebmaster', function(){
            return Auth::user() ->roles->role == 'admin' || Auth::user()->roles->role == 'webmaster';
        });

        Gate::define('adminWebmasterRedacteur', function(){
            return Auth::user()->roles->role == 'admin' || Auth::user()->roles->role == 'webmaster' || Auth::user()->roles->role == 'redacteur';
        });
    }
}
