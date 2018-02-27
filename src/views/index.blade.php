@extends('btybug::layouts.admin')

@section('content')

    <div class="main_lay_cont">
        <div class="row for_title_row">
            <h1 class="text-center">ARA module</h1>
        </div>
        <div class="row layouts_row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 items_links">
                <a href="{!! url('admin/ara/profile') !!}" class="ly_items">
                    <h3>Profile</h3>
                    <h2><i class="fa fa-user" aria-hidden="true"></i></h2>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 items_links">
                <a href="{!! url('admin/ara/portfolio') !!}" class="ly_items">
                    <h3>Portfolio</h3>
                    <h2><i class="fa fa-briefcase" aria-hidden="true"></i></h2>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 items_links">
                <a href="{!! url('admin/ara/news') !!}" class="ly_items">
                    <h3>News</h3>
                    <h2><i class="fa fa-newspaper-o" aria-hidden="true"></i></h2>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 items_links">
                <a href="{!! url('admin/ara/blog') !!}" class="ly_items">
                    <h3>Blog</h3>
                    <h2><i class="fa fa-weixin" aria-hidden="true"></i></h2>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 items_links">
                <a href="{!! url('admin/ara/services') !!}" class="ly_items">
                    <h3>Services</h3>
                    <h2><i class="fa fa-money" aria-hidden="true"></i></h2>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 items_links">
                <a href="{!! url('admin/ara/magic') !!}" class="ly_items">
                    <h3>Magic</h3>
                    <h2><i class="fa fa-magic" aria-hidden="true"></i></h2>
                </a>
            </div>
        </div>
    </div>

@stop
@section('CSS')
    {!! HTML::style('resources/assets/css/backend_layouts_style.css') !!}
    <style>
        .pages.col-md-5 {
            border: 1px solid black;
            border-radius: 8px;
            text-align: center;
            height: 200px;
            background: antiquewhite;
            padding-top: 72px;
            margin: 7px;
            font-size: xx-large;
            font-family: fantasy;
        }
    </style>
@stop
@section('JS')
@stop