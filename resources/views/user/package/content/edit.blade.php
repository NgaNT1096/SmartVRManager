@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.content-management.title')</h3>
    
    {!! Form::model($content, ['method' => 'PUT', 'route' => ['admin.content.update', $content->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <div class="form-group">
                        <label>Title of Content:</label>
                        <input id="title" class="form-control" value="{{$content->title}}" name="title" placeholder="Please Enter Title name" />
                    </div>
                    <div class="form-group">
                        <label>Type Content</label>
                        <div class="dropdown">
                            <select id="type_data" class="btn btn-default dropdown-toggle"  name="type_data" type="button" data-toggle="dropdown">
                                <option value="video"> Video </option>
                                <option value="image"> Image 360</option>
                                <option value="assetbundel"> AssetBundel </option>
                            </select>
                        </div>   
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea id="description" class="form-control" name="description" rows="3">{{$content->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Price:</label>
                        <input id="price" class="form-control" value="{{$content->price}}" name="price" placeholder="Please Enter Price" />
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

