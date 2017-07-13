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
        \Eventy::action('admin.menus', [
            "title" => "ProValidator",
            "custom-link" => "#",
            "icon" => "fa fa-folder-open",
            "is_core" => "yes",
            "main" => true,
            "children" => []
        ]);
    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

    }

}

