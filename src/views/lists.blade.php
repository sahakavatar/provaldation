@extends('btybug::layouts.admin')

@section('content')
    <a href="{!! url('/admin/auto-validator/create-validation') !!}" class="btn btn-success pull-right">Create</a>
    <a href="{!! url('/admin/auto-validator/copy/create-validation') !!}" class="btn btn-success pull-right">Create
        Copy</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Code</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @if(count($validations))
            @foreach($validations as $validation)
                <tr>
                    <td scope="row">{!! $validation->id !!}</td>
                    <td>{!! $validation->title !!}</td>
                    <td>{!! $validation->code !!}</td>
                    <td>{!! $validation->description !!}</td>
                    <td>
                        <button class="btn btn-warning">Dlete</button>
                        <a href="{!! route('create_and_edit_validation',$validation->id) !!}" class="btn btn-info">Edit</a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5" class="text-center">
                    NO Vlidations
                </td>
            </tr>
        @endif
        </tbody>
    </table>
@stop
@section('CSS')
@stop
@section('JS')
@stop