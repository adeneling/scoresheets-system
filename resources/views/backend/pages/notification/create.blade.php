@extends('backend.layouts.app')

@section('title')Notification
@stop

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Notification - <font color="red">{{ $user->name }}</font></h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				{!! Form::model($user, ['route' => ['notification.createnotification', $user],'method' =>'put','role'=>'form','class'=>'form-horizontal form-label-left'])!!}
        			{!! csrf_field() !!}
					@include('backend.pages.notification._form')
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection
