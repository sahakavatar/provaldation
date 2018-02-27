@extends('btybug::layouts.admin')

@section('content')
    {!! Form::open() !!}
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
    <div class="hide">
        <div class="col-md-9"><input type="text" class="form-control" name="rules" readonly></div>
    </div>
    {!! Form::close() !!}
    <br>
    <div class="row">
        <div class="col-md-6 row" id="v-add-place">
            <div class="col-md-12 "><button class="btn btn-info pull-right " id="v-add-button"><i class="fa fa-plus-circle"></i></button></div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <!-- Select Basic -->
                    <div class="form-group m-t-10">
                        <div class="col-md-12">
                            <div class="col-md-12 m-b-10">
                                <label class="col-md-3 control-label label-bold" for="selectbasic">Select
                                    Validations</label>
                                <div class="col-md-9">
                                    <select id="pro_validation_rules_groups" name="pro_validation_rule"
                                            class="form-control">
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
            </div>
        </div>

    </div>


<script type="template" id="v-component-1">
    <div class="col-md-12" data-parent="{id}">
        <fieldset>
            <div class="form-group">
                <div class="col-md-8">
                    <div class="input-group">
                        <input   class="form-control" placeholder="title" type="text">
                        <span class="btn btn-danger input-group-addon" data-delete="{id}"><i class="fa fa-minus"></i></span>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>

</script>
@stop
@section('CSS')
    {!! Html::style('/public/css/tag-it/jquery.tagit.css') !!}
    {!! Html::style(route('auto_validate_css')) !!}
    {!! Html::style("public/css/form-builder/form-builder.css") !!}
@stop
@section('JS')
    {!! Html::script('/public/js/tag-it/tag-it.js') !!}
    {!! Html::script(route('auto_validate_js')) !!}
    {!! Html::script(route('auto_validate_js_new')) !!}
@stop