@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.content-management.title')</h3>
    <p>
        <a href="{{ route('admin.content.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($contents) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>@lang('global.content.title')</th>
                        <th>@lang('global.content.topic')</th>
                        <th>@lang('global.content.user_name')</th>
                        <th>@lang('global.content.price')</th>
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($contents) > 0)
                        @foreach ($contents as $content)
                            <tr data-entry-id="{{ $content->id }}">
                                <td></td>
                                <td>{{ $content->title }}</td>
                                <td>
                                    @foreach ($content->themes()->pluck('name') as $theme)
                                        <span class="label label-info label-many">{{ $theme }}</span>
                                    @endforeach
                                </td>
                                <td>{{$user_model->name}}</td>
                                <td>{{ $content->price }}</td>
                                
                                <td>
                                    <a href="{{url('$content->link')}}" download="{{$content->link}}" class="btn btn-xs btn-success" target="_blank" >Download</a>
                                    <a href="{{ route('admin.content.edit',[$content->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.content.destroy', $content->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('admin.theme.mass_destroy') }}';
    </script>
@endsection