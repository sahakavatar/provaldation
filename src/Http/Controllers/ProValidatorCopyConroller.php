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

namespace Sahak\Validator\Http\Controllers;

use App\ExtraModules\Test\Models\Test;
use App\ExtraModules\Test\Models\Validations;
use App\helpers\dbhelper;
use App\helpers\helpers;
use App\Http\Controllers\Controller;
use App\Models\ExtraModules\Structures;
use App\Modules\Modules\Models\Routes;
use Illuminate\Http\Request;

/**
 * Class TestController
 * @package App\ExtraModules\Test\Http\Controllers
 */
class ProValidatorCopyConroller extends Controller
{
    /**
     * TestController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        return view('ProValidator::copy.index');
    }

    public function getValidations()
    {
        $validations = \App\ExtraModules\ProValidator\Models\Validations::all();
        return view('ProValidator::copy.copy.lists', compact('validations'));
    }
    public function getCreateValidation()
    {
        return view('ProValidator::copy.create');
    }
    public function getCreateCopyValidation()
    {
        return view('ProValidator::copy.create_copy');
    }

    public function getSettings()
    {
        return view('ProValidator::copy.settings');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function postGetRulesGroups(Request $request)
    {
        $rule = $request->get('rule');
        if ($rule) {
            $rule = '.' . $rule;
        }
        if (\View::exists('ProValidator::copy.groups' . $rule)) {
            $html = \View::make('ProValidator::copy.groups' . $rule)->render();
            return \Response::json(['html' => $html]);

        }

        return \Response::json(['html' => 'Rule is not configured']);
    }

    public function postGetRulesSettings(Request $request)
    {
        $rule = $request->get('rule');
        $group = $request->get('group');
        $view = "ProValidator::copy.settings.$group.$rule";
        if (\View::exists($view)) {
            $html = \View::make($view)->render();
            return \Response::json(['html' => $html]);

        }

        return \Response::json(['html' => 'Rule is not configured']);
    }

    public function postCreateValidation(Request $request)
    {
        $result = $request->except('_token');

        $validator = \Validator::make($result, [
            'title' => 'required',
            'rules' => 'required'
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator->errors());

        $data = $request->except(['rules', '_token']);
        \App\ExtraModules\ProValidator\Models\Validations::create($data + ['code' => $result['rules']]);

        return redirect()->back()->with('message', 'Validation successfully created');
    }


}