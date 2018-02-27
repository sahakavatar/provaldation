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

use Sahak\Validator\Models\Test;
use Sahak\Validator\Models\Validations;
use Btybug\btybug\Helpers\dbhelper;
use Btybug\btybug\Helpers\helpers;
use App\Http\Controllers\Controller;
use Btybug\btybug\Models\ExtraModules\Structures;
use Btybug\btybug\Models\Routes;
use Illuminate\Http\Request;
use Btybug\btybug\Repositories\HookRepository;

/**
 * Class TestController
 * @package App\ExtraModules\Test\Http\Controllers
 */
class ProValidatorConroller extends Controller
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
        return view('AutoValidator::index');
    }

    public function getJs()
    {
        $js = \File::get(__DIR__ . '/../../Routes/libs/validator.js');
        $response = \Response::make($js);
        $response->header('Content-Type', 'text/javascript');
        return $response;
    }

    public function getValidations()
    {
        $validations = \Sahak\Validator\Models\Validations::all();
        return view('AutoValidator::lists', compact('validations'));
    }

    public function getCreateValidation()
    {
        return view('AutoValidator::create');
    }

    public function getCreateCopyValidation()
    {
        return view('AutoValidator::create_copy');
    }

    public function getSettings(HookRepository $hooks)
    {
        $cms_hooks = $hooks->getAll();
        return view('AutoValidator::settings', compact(['cms_hooks']));
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
        if (\View::exists('AutoValidator::groups' . $rule)) {
            $html = \View::make('AutoValidator::groups' . $rule)->render();
            return \Response::json(['html' => $html]);

        }

        return \Response::json(['html' => 'Rule is not configured']);
    }

    public function postGetRulesSettings(Request $request)
    {
        $rule = $request->get('rule');
        $group = $request->get('group');
        $view = "AutoValidator::settings.$group.$rule";
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
        Sahak\Validator\Models\Validations::create($data + ['code' => $result['rules']]);

        return redirect()->back()->with('message', 'Validation successfully created');
    }


}