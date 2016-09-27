@extends('participant.layouts.app')

@section('title')Notifications
@stop
@section('content')
@foreach($notifications as $notification)
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">{{ $notification->title }} - {{ date('d M Y', strtotime(Auth::user()->created_at)) }}</div>
				<div class="panel-body">
					{{ $notification->message }}
				</div>
			</div>
		</div>
	</div>
@endforeach
@stop