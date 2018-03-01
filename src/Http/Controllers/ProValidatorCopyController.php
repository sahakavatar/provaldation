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
class ProValidatorCopyController extends Controller
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
        return view('AutoValidator::copy.index');
    }

    public function getJs()
    {
        $js = \File::get(__DIR__ . '/../../Routes/libs/validator_copy.js');
        $response = \Response::make($js);
        $response->header('Content-Type', 'text/javascript');
        return $response;
    }
    public function getCss()
    {
        $js = \File::get(__DIR__ . '/../../Routes/libs/validator.css');
        $response = \Response::make($js);
        $response->header('Content-Type', 'text/css');
        return $response;
    }

    public function getValidations()
    {
        $validations = \Sahak\Validator\Models\Validations::all();
        return view('AutoValidator::copy.lists', compact('validations'));
    }

    public function getCreateValidation($id=null)
    {
        $validation=null;
        if($id){
            $validation=\Sahak\Validator\Models\Validations::find($id);
        }
        return view('AutoValidator::copy.create',compact('validation'));
    }

    public function getCreateCopyValidation()
    {
        return view('AutoValidator::copy.create_copy');
    }

    public function getSettings(HookRepository $hooks)
    {
        $cms_hooks = $hooks->getAll();
        return view('AutoValidator::copy.settings', compact(['cms_hooks']));
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
        if (\View::exists('AutoValidator::copy.groups' . $rule)) {
            $html = \View::make('AutoValidator::copy.groups' . $rule)->render();
            return \Response::json(['html' => $html]);

        }

        return \Response::json(['html' => 'Rule is not configured']);
    }

    public function postGetRulesSettings(Request $request)
    {
        $rule = $request->get('rule');
        $group = $request->get('group');
        $view = "AutoValidator::copy.settings.$group.$rule";
        if (\View::exists($view)) {
            $html = \View::make($view)->render();
            return \Response::json(['html' => $html]);

        }

        return \Response::json(['html' => 'Rule is not configured']);
    }

    public function postCreateValidation(Request $request,$id=null)
    {
        $result = $request->except('_token');
        $validator = \Validator::make($result, [
            'title' =>'required|unique:pro_validator,title'.(($id)?(','.$id):null),
            'code' => 'required'
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator->errors());

        $data = $request->except(['_token']);
        if($id){
            $validation=Validations::find($id);
            $validation->update($data);
            $message='Validation successfully updated';
        }else{
            $message='Validation successfully created';
            Validations::create($data);
        }
        return redirect()->route('auto_validate_list')->with('message', $message);
    }


}