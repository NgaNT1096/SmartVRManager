@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.content.title')</h3>
    {!! Form::open(['method' => 'POST','enctype' => 'multipart/form-data' , 'route' => ['admin.content.store']]) !!}
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('tile'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <div class="form-group">
                        <label for="theme_id" class="control-label">Theme</label>

                        <div class="">
                            <select name="theme_id" class="form-control" required>
                                @foreach ($themes as $theme)
                                    <option value="{{ $theme->id }}">{{ $theme->name }}</option>
                                @endforeach
                            </select>
                                @if ($errors->has('theme_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('theme_id') }}</strong>
                                    </span>
                                @endif
                        </div>
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
                        <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Upload Video</label>
                        <input id="link" onclick="getTypeData();" type="file" name="link" accept="">
                    </div>
                    <div class="form-group">
                        <label>Price:</label>
                        <input id="price" class="form-control" name="price" placeholder="Please Enter Price" />
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
    <script>
    function getTypeData(){
        var type = document.getElementById("type_data");
        var value_type = type.options[type.selectedIndex].value;

        console.log(value_type);
        if(value_type == 'video'){
            document.getElementById("link").accept = ".mp4";
        }
        else if(value_type == 'image'){
            document.getElementById("link").accept = "image/*";
        }
        else{
            document.getElementById("link").accept = ".zip";
            
        }
    }
</script>
    {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop