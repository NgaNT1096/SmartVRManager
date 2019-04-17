@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.device.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.device.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <div class="form-group">
                        <label>@lang('global.device.des')</label>
                        <div class="dropdown">
                            <select class="btn btn-default dropdown-toggle"  name="description" type="button" data-toggle="dropdown">
                                <option value="oculus"> Oculus Go </option>
                                <option value="samsung"> Samsung Gear VR </option>
                            </select>
                        </div>   
                    </div>
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop