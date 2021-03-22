<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('IsAdmin', function($user){
            return $user->level_id == '1';
        });

        $gate->define('IsWaiter', function($user){
            return $user->level_id == '2';
        });

        $gate->define('IsCashier', function($user){
            return $user->level_id == '3';
        });

        $gate->define('IsCustomer', function($user){
            return $user->level_id == '4';
        });

        $gate->define('IsOwner', function($user){
            return $user->level_id == '5';
        });

        $gate->define('IsGuest', function($user){
            return $user->level_id == '6';
        });

        //
    }
}
