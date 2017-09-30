@extends('cms::layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Tag</th>
                        <th>Type</th>
                        <th>Slug</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cms_hooks as $cms_hook)
                        <tr>
                            <td>{!! $cms_hook->id !!}</td>
                            <td>{!! $cms_hook->name !!}</td>
                            <td>{!! $cms_hook->tag !!}</td>
                            <td>{!! $cms_hook->type !!}</td>
                            <td>{!! $cms_hook->slug !!}</td>
                            <td>{!! BBgetDateFormat($cms_hook->created_at) !!}</td>
                            <td>
                                <div class="btn-group">
                                    {!! BBbutton2('unit',$cms_hook->id,$cms_hook->tag,'<em class="glyphicon glyphicon-align-left"></em> Add hook',['class'=>'btn btn-default','data-id'=>$cms_hook->id]) !!}
                                    <button class="btn btn-default" type="button">
                                        <em class="glyphicon glyphicon-align-center"></em> View hook
                                    </button>
                                    <button class="btn btn-default" type="button">
                                        <em class="glyphicon glyphicon-align-justify"></em> Remove unit
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    @include('resources::assests.magicModal')
@stop
@section('CSS')

@stop
@section('JS')
    {!! HTML::script("/js/UiElements/bb_styles.js?v.5") !!}
    <script>
        $(function () {
            $('body').on('change','.bb-button-realted-hidden-input',function () {
                var data={
                    'id':$(this).attr('data-name'),
                    'variation':$(this).val()
                }
                $.ajax({
                    type: "post",
                    url: '/admin/modules/bburl/post-add-unit-to-hook',
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': $("input[name='_token']").val()
                    },
                    success: function (call_back_data) {
                        if (!call_back_data.error) {

                        }
                    }

                });

            })
        })
    </script>
@stop