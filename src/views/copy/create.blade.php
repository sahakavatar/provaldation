@extends('btybug::layouts.admin')

@section('content')
    {!! Form::model($validation) !!}
    <div class="bb-form-header">
        <div class="row">
            <div class="col-md-7">
                <label>Title</label>
                {!! Form::text('title',null,['class' => 'form-name', 'placeholder' => 'title']) !!}
            </div>
            <div class="col-md-5">
                <button type="submit" class="form-save pull-right">Save</button>
            </div>
        </div>
    </div>

    <div class="form-group  m-b-10 clearfix">
        <label class="col-md-3 control-label label-bold" for="description">Description</label>
        <div class="col-md-9">
            {!! Form::textarea('description',null,['class'=>'form-control','id'=>'description']) !!}
            </div>
    </div>
    <div class="form-group  m-b-10 clearfix">
        <label class="col-md-3 control-label label-bold" for="description">Validation</label>
        <div class="col-md-9">
            {!! Form::text('rule',($validation)?$validation->code:null,['class'=>'form-control','readonly']) !!}
    </div>
    {!! Form::close() !!}
    <br>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <!-- Select Basic -->
            <div class="form-group m-t-10">
                <div class="col-md-12">
                    <div class="col-md-12 m-b-10">
                        <label class="col-md-3 control-label label-bold" for="selectbasic">Select Validations</label>
                        <div class="col-md-9">
                            <select id="pro_validation_rules_groups" name="pro_validation_rule" class="form-control">
                                <option value="0">Select Rule</option>
                                <option value="number_of_input">Number of input</option>
                                <option value="input_types">Input types</option>
                                <option value="text_rules">Text Rules</option>
                                <option value="date">Date</option>
                                <option value="required">Required Options</option>
                                <option value="files">File</option>
                                <option value="ip">IP Address</option>
                                <option value="universal">Universal</option>
                                <option value="must_contain">Must contain</option>
                                <option value="starts_with">Starts with</option>
                                <option value="ends_with">Ends with</option>
                                <option value="custom">Custom</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 m-b-10 pro_validation_rules_group_place">

                    </div>
                </div>
                <div class="col-md-12" style="">
                    <div class="m-b-10 pro_validator_settings_area" id="pro_validator_settings_area">

                    </div>
                </div>

            </div>

            <div class="form-group m-b-10 clearfix">
                <div class="form-group m-t-10">
                    <div class="col-md-12 m-b-10">
                        <ul id="myTags">
                            <!-- Existing list items will be pre-added to the tags -->
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-2"></div>
    </div>



@stop
@section('CSS')
    {!! Html::style('/public/css/tag-it/jquery.tagit.css') !!}
    {!! Html::style(route('auto_validate_css')) !!}
    {!! Html::style("public/css/form-builder/form-builder.css") !!}
@stop
@section('JS')
    {!! Html::script('/public/js/tag-it/tag-it.js') !!}
    {!! Html::script(route('auto_validate_js_copy')) !!}
@stop