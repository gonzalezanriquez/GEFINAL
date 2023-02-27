<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\LevelsController;
use App\Models\Post;
use App\Models\Subject;
use App\Models\User;
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
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function (User $user) {
            return $user->username === 'AdminUser';
        });




        // create_user, create_post, create_subject, create_level, update_user, update_post, update_subject, update_classroom, destroy_user, destroy_post, destroy_role, destroy_subject, destroy_classroom, show_user, show_post, show_postUser, show_subject, show_classroom

    }
}
