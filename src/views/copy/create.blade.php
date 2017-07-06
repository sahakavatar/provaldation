@extends('layouts.admin')

@section('content')
    <div class="col-md-12">
    </div>
    <div class="col-md-12">
        <hr>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- Select Basic -->
            <div class="form-group m-t-10">
                <div class="col-md-12">
                    <div class="col-md-12 m-b-10">
                        <label class="col-md-3 control-label label-bold" for="selectbasic">Type Input</label>
                        <div class="col-md-9">
                            <select id="pro_validation_rules_groups" name="pro_validation_rule" class="form-control">
                                <option value="0">Select Rule</option>
                                <option value="alpha">Alpha</option>
                                <option value="alpha_dash">Alpha Dash</option>
                                <option value="alpha_numeric">Alpha Numeric</option>
                                <option value="array">Array</option>
                                <option value="boolean">Boolean</option>
                                <option value="date">Date</option>
                                <option value="digits">Digits</option>
                                <option value="digits_between">Digits Between</option>
                                <option value="dimensions">Dimensions (Image Files)</option>
                                <option value="email">Email</option>
                                <option value="file">File</option>
                                <option value="image">Image</option>
                                <option value="in">In Array</option>
                                <option value="integer">Integer</option>
                                <option value="ip">Ip Address</option>
                                <option value="json">JSON</option>
                                <option value="mimetypes">MIME Types</option>
                                <option value="mimes">MIME Type By File Extension</option>
                                <option value="numeric">Numeric</option>
                                <option value="size">Size</option>
                                <option value="string">String</option>
                                <option value="timezone">Timezone</option>
                                <option value="unique">Unique(database)</option>
                                <option value="url">Url</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 m-b-10 pro_validation_rules_group_place">

                    </div>
                </div>
                <div class="col-md-12" style="">
                    <div  class="m-b-10 pro_validator_settings_area" id="pro_validator_settings_area">

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
        <div class="col-md-6">

            {!! Form::open() !!}
            <div class="form-group  m-b-10 clearfix">
                <label class="col-md-3 control-label label-bold" for="title">Title</label>
                <div class="col-md-9"><input type="text" class="form-control" name="title" id="title"></div>
            </div>
            <div class="form-group  m-b-10 clearfix">
                <label class="col-md-3 control-label label-bold" for="description">Description</label>
                <div class="col-md-9"><textarea name="description" class="form-control" id="description" style="min-height: 148px;"></textarea></div>
            </div>
            <div class="form-group m-b-10 clearfix">
                <label class="col-md-3 control-label label-bold" for="code">Code</label>
                <div class="col-md-9"><input type="text" class="form-control" name="rules" readonly></div>
            </div>
            <div class="form-group  m-b-10 clearfix text-right">
                <button type="submit" class="btn submit-btn btn-submit-pro m-r-15"><i class="fa fa-floppy-o" aria-hidden="true"></i>Remember</button>
            </div>

            {!! Form::close() !!}
        </div>
        <hr>

    </div>



@stop
@section('CSS')
    {!! Html::style('/resources/assets/css/jquery.tagit.css') !!}
    {!! Html::style('/public/css/validator.css') !!}
@stop
@section('JS')
    {!! Html::script('/public/js/tag-it.js') !!}
    {!! Html::script('/public/js/validator_copy.js') !!}
@stop