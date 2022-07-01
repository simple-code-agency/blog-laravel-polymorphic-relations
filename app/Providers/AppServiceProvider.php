<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use App\Models\Book;
use App\Models\Item;
use App\Models\Sweet;

class AppServiceProvider extends ServiceProvider
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
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Login user with id 1 automatically
        $user = User::all()->random();
        Auth::login($user);

        Relation::enforceMorphMap([
            'book' => Book::class,
            'item' => Item::class,
            'sweet' => Sweet::class,
        ]);
    }
}
