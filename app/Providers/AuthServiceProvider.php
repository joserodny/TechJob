<?php

namespace App\Providers;

use App\Domains\Listing\Models\Listing;
use App\Policies\ListingPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Listing::class => ListingPolicy::class,
        App\Models\Domains\Listing\Listing::class => \App\Policies\Domains\Listing\ListingPolicy::class,
        App\Models\Listing::class => ListingPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
