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
Route::get('/', 'ProValidatorConroller@getIndex');
Route::get('/validator.js', 'ProValidatorConroller@getJs')->name('auto_validate_js');
Route::get('/lists', 'ProValidatorConroller@getValidations');
Route::get('/create-validation', 'ProValidatorConroller@getCreateValidation');
Route::post('/create-validation', 'ProValidatorConroller@postCreateValidation');
Route::get('/settings', 'ProValidatorConroller@getSettings');
Route::post('/get-rules-groups', 'ProValidatorConroller@postGetRulesGroups');
Route::post('/get-rules-settings', 'ProValidatorConroller@postGetRulesSettings');
Route::group(['prefix'=>'copy'],function (){
    Route::get('/', 'ProValidatorCopyConroller@getIndex');
    Route::get('/lists', 'ProValidatorCopyConroller@getValidations');
    Route::get('/create-validation', 'ProValidatorCopyConroller@getCreateValidation');
    Route::post('/create-validation', 'ProValidatorCopyConroller@postCreateValidation');
    Route::get('/settings', 'ProValidatorCopyConroller@getSettings');
    Route::post('/get-rules-groups', 'ProValidatorCopyConroller@postGetRulesGroups');
    Route::post('/get-rules-settings', 'ProValidatorCopyConroller@postGetRulesSettings');
});