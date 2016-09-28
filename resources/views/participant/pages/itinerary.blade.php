@extends('participant.layouts.app')

@section('title')Itinerary
@stop
@section('content')

@foreach($itinerarys as $itinerary)

<div class="main">
	<ul class="cbp_tmtimeline" >
		<li >
			<div class="cbp_tmicon cbp_tmicon-clock"></div>
			<div class="cbp_tmlabel">
				<h2>Your Flight Detail</h2>
				<p>BOOKING CODE</p>
				<h3>[{{ $itinerary->booking_id }}]</h3>
				<p>[DETAIL]<br>{{ $itinerary->detail }}</p>
				<br>
				<p>[URL]<br>{{ $itinerary->url }}</p>
			</div>
		</li>

	</ul>
</div>
<p>Have a pleasant trip!</p>
@endforeach
@stop