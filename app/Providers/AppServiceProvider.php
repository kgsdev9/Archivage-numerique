<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Departement;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Paginator::useBootstrap();

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('departement_display', function(User $user, Departement $departement) {
            return $user->departement_id === $departement->id;
        });

        // Gate::define('liste-doc-par-single-departement', function(User $user, Departement $departement) {
        //     return $user->departement_id === $departement->id;
        // });

        // Gate::define('update-post', function (User $user, Post $post) {
        //     return $user->id === $post->user_id;
        // });
    }
}
