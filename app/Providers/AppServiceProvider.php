<?php

namespace App\Providers;

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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.master', function($view){
            // $footer_menus=\App\FooterMenu::withTranslation(\App::getLocale())->orderBy('order', 'ASC')->get();
            // $str=file_get_contents("http://cbu.uz/ru/arkhiv-kursov-valyut/json/");
            // $json=json_decode($str, true);
            // $top_ad=\App\Advert::where('position', 'top')->first();
            $menus=\App\Category::orderBy('order', 'ASC')->get();
            $view->with(compact(
                // 'top_ad',
                'menus', 
                // 'footer_menus'
            ));
        });
    }
}
