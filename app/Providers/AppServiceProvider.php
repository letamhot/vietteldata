<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Categories;
use App\Models\Product;
use App\Models\Comment;
use App\Models\Tags;
use App\Models\User;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('totalCategory', Categories::count());
        View::share('totalTag', Tags::count());
        View::share('totalProduct', Product::count());
        View::share('totalComments', Comment::count());
        View::share('totalUsers', User::count());
        View::share('totalReplies', Comment::whereNotNull('parent_id')->count());
    }
}
