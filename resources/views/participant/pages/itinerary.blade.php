@extends('participant.layouts.app')

@section('title')Itinerary
@stop
@section('content')

@foreach($itinerarys as $itinerary)
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Booking Code: {{ $itinerary->booking_id }}</div>
				<div class="panel-body">
					NIK: {{ $itinerary->user_nik }}<br>
					Booking Code: {{ $itinerary->booking_id }}<br>
					Detail: {{ $itinerary->booking_id }} <br>
					URL: {{ $itinerary->booking_id }}<br>
				</div>
			</div>
		</div>
	</div>
@endforeach
@stop