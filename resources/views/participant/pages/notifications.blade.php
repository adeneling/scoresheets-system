@extends('participant.layouts.app')

@section('title')Notifications
@stop
@section('content')

<div class="main">
	<ul class="cbp_tmtimeline">
		@foreach($notifications as $notification)
		<!-- IF DATA EXIST  - IF NOT - DO NOT PRINT -->
		<li>
			<div class="cbp_tmlabel">
				<h2>[{{ $notification->title }} ] - {{ date('d M Y', strtotime($notification->created_at)) }}</h2>
				<p>[{{ $notification->message }}]</p>
			</div>
		</li>
		<!--ENDIF-->
		@endforeach
	</ul>
</div>

@stop