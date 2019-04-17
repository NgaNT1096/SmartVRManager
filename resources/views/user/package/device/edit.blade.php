@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.device-management.title')</h3>
    
    {!! Form::model($device, ['method' => 'PUT', 'route' => ['admin.device.update', $device->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <div class="form-group">
                        <label>@lang('global.device.name')</label>
                        <input id="name" class="form-control" value="{{$device->name}}" name="name" placeholder="Please Enter name device" />
                    </div>
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

    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

