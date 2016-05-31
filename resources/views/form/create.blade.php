@extends('page.main')

@section('content')
<div class="col-md-6 col-md-offset-3">
{!! Form::open(['url'=>'page/store']) !!}
	<div class="form-group">
		{!! Form::label('email','邮箱前缀：') !!}
		{!! Form::text('email',null,['class'=>'form-control']) !!}
	@if ($errors->login->first('email'))	<div class="alert alert-danger">{{ $errors->login->first('email') }}</div>
	@endif</div>
	<div class="form-group">
		{!! Form::label('share_url','链接：') !!}
		{!! Form::text('share_url',null,['class'=>'form-control']) !!}
		{{ $errors->login->first('share_url') }}
	</div>
	<div class="form-group">
		{!! Form::label('share_desp','简介') !!}
		{!! Form::textarea('share_desp',null,['class'=>'form-control','placeholder'=>'不少于5个字', 'rows'=> "5" ]) !!}
		{{ $errors->login->first('share_desp') }}
	</div>
	<div class="form-group">
		{!! Form::submit('确认添加',['class'=>'btn btn-success form-control']) !!}
	</div>
{!! Form::close() !!}
</div>
@stop