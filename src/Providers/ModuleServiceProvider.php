<?php
/**
 * Copyright (c) 2017.
 * *
 *  * Created by PhpStorm.
 *  * User: Edo
 *  * Date: 10/3/2016
 *  * Time: 10:44 PM
 *
 */

namespace Sahak\Validator\Providers;
use Illuminate\Support\ServiceProvider;


class ModuleServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../Resources/Lang', 'core_avatar');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'core_avatar');
        \Eventy::action('admin.menus', [
            "title" => "AutoValidator",
            "custom-link" => "#",
            "icon" => "fa fa-gavel",
            "is_core" => "yes",
            "children" => [
                [
                    "title" => "Settings",
                    "custom-link" => "/admin/auto-validator/settings",
                    "icon" => "fa fa-angle-right",
                    "is_core" => "yes"
                ],[
                    "title" => "Lists",
                    "custom-link" => "/admin/auto-validator/lists",
                    "icon" => "fa fa-angle-right",
                    "is_core" => "yes"
                ]
            ]]);
    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);

    }

}

