<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\TestResult;
use App\Policies\TestResultPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        TestResult::class => TestResultPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('is-user', function(User $user) {
            return $user->role == 'User';
        });

        Gate::define('is-hrd', function(User $user) {
            return $user->role == 'HRD';
        });

        Gate::define('is-admin', function(User $user) {
            return $user->role == 'Admin';
        });
    }
}
