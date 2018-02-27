<?php
/**
 * Copyright (c) 2017.
 * *
 *  * Created by PhpStorm.
 *  * User: Ara
 *  * Date: 01/3/2016
 *  * Time: 10:44 PM
 *
 */

namespace App\ExtraModules\Test;
/**
 * Created by PhpStorm.
 * User: Edo
 * Date: 8/8/2016
 * Time: 9:11 PM
 */


class Autoload
{
// this function will called only install time
    public function up($config)
    {
//        Test::migrate();
//        Test::seed();
    }

    // this function will called only uninstall time
    public function down($config)
    {
    }
}