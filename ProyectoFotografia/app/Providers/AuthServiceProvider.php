<?php

namespace App\Providers;

use App\Models\Cuenta;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [

    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        $this->registerPolicies();

        //Gates
        Gate::define('admin-listar',function(Cuenta $cuenta){
            return $cuenta->perfil_id==1;
        });
    }
}
