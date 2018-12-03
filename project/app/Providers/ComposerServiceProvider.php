<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Using Closure based composers
        view()->composer('partials.header', function ($view) {
            $headerCategories = \DB::table('categories')->where('isdeleted',false)->get();
            $view->headerCategories = $headerCategories;
        });
        view()->composer('products.manage', function ($view) {
            $selectCategories = \DB::table('categories')->where('isdeleted',false)->get();
            $view->selectCategories = $selectCategories;
        });
    }
}
