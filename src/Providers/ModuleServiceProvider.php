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
            "title" => "TestProvalidator",
            "custom-link" => "#",
            "icon" => "fa fa-gavel",
            "is_core" => "yes",
            "children" => [
                [
                    "title" => "Settings",
                    "custom-link" => "/admin/provalidator/settings",
                    "icon" => "fa fa-angle-right",
                    "is_core" => "yes"
                ],[
                    "title" => "Lists",
                    "custom-link" => "/admin/provalidator/lists",
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
        //

    }

}

