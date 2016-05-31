@extends('page.main')

@section('content')
	<form class="form-horizontal" role="form" action="{{action($controller . "@update", $model->id)}}" method='POST'>
      	<input type="hidden" name="_method" value="PUT">
        @foreach ($fields_edit as $field => $field_info)
        <div class="form-group">
          <label class="col-sm-2 control-label">{{$field_info['show']}}</label>
          <div class="col-sm-10">
            <input name="{{$field}}" type="text" class="form-control" placeholder="" value="{{$model->$field}}">
          </div>
        </div>
        <div class="line line-dashed line-lg pull-in"></div>
        @endforeach
        <div class="col-sm-4 col-sm-offset-2">
          <button type="submit" class="btn btn-primary">提交</button>
        </div>
    </form>
@stop
