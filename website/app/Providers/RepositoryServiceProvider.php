<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts;
use App\Repositories\Eloquent;

/**
 * Description of RepositoryServiceProvider
 *
 * @author Luca
 */
class RepositoryServiceProvider extends ServiceProvider {
    public function register()
    {
        $this->app->singleton(Contracts\AlbumRepository::class, Eloquent\EloquentAlbum::class);
        $this->app->singleton(Contracts\UserRepository::class, Eloquent\EloquentUser::class);
    }
}
