@extends('page.main')
@section('content')
<div class="col-md-12">
<table class="table table-condensed">
	
	<tr>
	    <td class="default">id</td>
	    <td class="default">链接</td>
	    <td class="default">描述</td>
	    <td class="default">分享时间</td>
	    <td class="default">分享者</td>
	</tr>
	 @foreach ($shares as $index => $share)
	<tr>
	    <td class="active">{{$share->id}}</td>
	    <td class="success"><a href='{{$share->share_url}}' target="_blank">{{$share->share_url}}</a></td>
	    <td class="warning">{{$share->share_desp}}</td>
	    <td class="danger">{{$share->share_time}}</td>
	    <td class="info">{{$share->realname}}</td>
	</tr>
   @endforeach
</table>
</div>
<div align="center">
   {!! $shares->render() !!}
</div>
@stop