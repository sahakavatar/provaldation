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
Route::get('/', 'ProValidatorController@getIndex',true);
Route::get('/validator.js', 'ProValidatorController@getJs',true)->name('auto_validate_js');
Route::get('/validator_copy.js', 'ProValidatorCopyController@getJs',true)->name('auto_validate_js_copy');
Route::get('/validator.css', 'ProValidatorController@getCss',true)->name('auto_validate_css');
Route::get('/lists', 'ProValidatorController@getValidations',true)->name('auto_validate_list');
Route::get('/create-validation', 'ProValidatorController@getCreateValidation',true);
Route::post('/create-validation', 'ProValidatorController@postCreateValidation');
Route::get('/settings', 'ProValidatorController@getSettings',true);
Route::post('/get-rules-groups', 'ProValidatorController@postGetRulesGroups');
Route::post('/get-rules-settings', 'ProValidatorController@postGetRulesSettings');

Route::group(['prefix' => 'copy'], function () {
    Route::get('/', 'ProValidatorCopyController@getIndex',true);
    Route::get('/lists', 'ProValidatorCopyController@getValidations',true);
    Route::get('/create-validation/{id?}', 'ProValidatorCopyController@getCreateValidation',true)->name('create_and_edit_validation');
    Route::post('/create-validation', 'ProValidatorCopyController@postCreateValidation');
    Route::get('/settings', 'ProValidatorCopyController@getSettings',true);
    Route::post('/get-rules-groups', 'ProValidatorCopyController@postGetRulesGroups');
    Route::post('/get-rules-settings', 'ProValidatorCopyController@postGetRulesSettings');
});