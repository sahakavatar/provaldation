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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


//Routes
Route::get('/', 'ProValidatorConroller@getIndex',true);
Route::get('/validator.js', 'ProValidatorConroller@getJs',true)->name('auto_validate_js');
Route::get('/validator.css', 'ProValidatorConroller@getCss',true)->name('auto_validate_css');
Route::get('/lists', 'ProValidatorConroller@getValidations',true)->name('auto_validate_list');
Route::get('/create-validation', 'ProValidatorConroller@getCreateValidation',true);
Route::post('/create-validation', 'ProValidatorConroller@postCreateValidation');
Route::get('/settings', 'ProValidatorConroller@getSettings',true);
Route::post('/get-rules-groups', 'ProValidatorConroller@postGetRulesGroups');
Route::post('/get-rules-settings', 'ProValidatorConroller@postGetRulesSettings');

Route::group(['prefix' => 'copy'], function () {
    Route::get('/', 'ProValidatorCopyConroller@getIndex',true);
    Route::get('/lists', 'ProValidatorCopyConroller@getValidations',true);
    Route::get('/create-validation', 'ProValidatorCopyConroller@getCreateValidation',true);
    Route::post('/create-validation', 'ProValidatorCopyConroller@postCreateValidation');
    Route::get('/settings', 'ProValidatorCopyConroller@getSettings',true);
    Route::post('/get-rules-groups', 'ProValidatorCopyConroller@postGetRulesGroups');
    Route::post('/get-rules-settings', 'ProValidatorCopyConroller@postGetRulesSettings');
});