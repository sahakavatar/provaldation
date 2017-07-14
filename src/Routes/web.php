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
Route::get('/', 'Http\Controllers\ProValidatorConroller@getIndex');
Route::get('/validator.js', 'Http\Controllers\ProValidatorConroller@getJs')->name('auto_validate_js');
Route::get('/lists', 'Http\Controllers\ProValidatorConroller@getValidations');
Route::get('/create-validation', 'Http\Controllers\ProValidatorConroller@getCreateValidation');
Route::post('/create-validation', 'Http\Controllers\ProValidatorConroller@postCreateValidation');
Route::get('/settings', 'Http\Controllers\ProValidatorConroller@getSettings');
Route::post('/get-rules-groups', 'Http\Controllers\ProValidatorConroller@postGetRulesGroups');
Route::post('/get-rules-settings', 'Http\Controllers\ProValidatorConroller@postGetRulesSettings');
Route::group(['prefix'=>'copy'],function (){
    Route::get('/', 'Http\Controllers\ProValidatorCopyConroller@getIndex');
    Route::get('/lists', 'Http\Controllers\ProValidatorCopyConroller@getValidations');
    Route::get('/create-validation', 'Http\Controllers\ProValidatorCopyConroller@getCreateValidation');
    Route::post('/create-validation', 'Http\Controllers\ProValidatorCopyConroller@postCreateValidation');
    Route::get('/settings', 'Http\Controllers\ProValidatorCopyConroller@getSettings');
    Route::post('/get-rules-groups', 'Http\Controllers\ProValidatorCopyConroller@postGetRulesGroups');
    Route::post('/get-rules-settings', 'Http\Controllers\ProValidatorCopyConroller@postGetRulesSettings');
});