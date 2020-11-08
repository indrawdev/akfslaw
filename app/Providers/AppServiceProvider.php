<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;


use App\Partner;
use App\Post;
use App\Profile;

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
        Schema::defaultStringLength(191);

        $menuPartner   = Partner::all();
        $menuCategory  = Post::select('en_title', 'id_title', 'slug')->where('category_id', '=', 1)->get();
        $introProfile  = Profile::findOrFail(1);
        View::share(['menuPartner' => $menuPartner, 'menuCategory' => $menuCategory, 'introProfile' => $introProfile]);
    }
}
