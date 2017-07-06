@extends('layouts.admin')

@section('content')
        <a href="{!! url('/admin/provalidator/create-validation') !!}" class="btn btn-success pull-right">Create</a>
        <a href="{!! url('/admin/provalidator/create-copy-validation') !!}" class="btn btn-success pull-right">Create Copy</a>
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
        <tr>
            @if(count($validations))
                @foreach($validations as $validation)
                    <td scope="row">{!! $validation->id !!}</td>
                    <td>{!! $validation->title !!}</td>
                    <td>{!! $validation->code !!}</td>
                    <td>{!! $validation->description !!}</td>
                    <td>
                        <button class="btn btn-warning">Dlete</button>
                        <button class="btn btn-info">Edit</button>
                    </td>
                @endforeach
            @else
                <td colspan="5" class="text-center">
                    NO Vlidations
                </td>
            @endif
        </tr>
        </tbody>
    </table>

@stop
@section('CSS')

@stop
@section('JS')
@stop