@extends('backend.layouts.app')

@section('title')Itinerary
@stop

@section('content')

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>{{ $itinerary->user->name }}</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
					<div class="profile_img">
						<div id="crop-avatar">
							<!-- Current avatar -->
							<img class="img-responsive avatar-view" src="{{ asset('img/' . ($itinerary->user->picture != null ? $itinerary->user->picture : 'picture.png' )) }}" alt="Avatar" title="Change the avatar">
						</div>
					</div>
					<h3>{{ $itinerary->user->name }}</h3>

					<ul class="list-unstyled user_data">
						<li>Category: {{ $itinerary->user->category->name }}</li>
						<li>Area: {{ $itinerary->user->area == 5 ? 'Headquarter' : $itinerary->user->area }}</li>
						<li>Region: {{ $itinerary->user->region }}</li>
						<li><center>
								<a href="{{ url('itinerary') }}" class="btn btn-primary">Kembali</a>
							</center>
						</li>
					</ul>
					<br />
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12">
					<div class="profile_title">
						<div class="col-md-6">
							<h2>@yield('title')</h2>
						</div>
					</div>
					<div class="x_content">
						<div class="row">
							<div class="form-group">
								<label class="control-label col-md-3">Booking Code</label>
								<div class="col-md-4">
									{{ $itinerary->booking_id }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label col-md-3">Detail</label>
								<div class="col-md-4">
									{{ $itinerary->detail }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label col-md-3">URL</label>
								<div class="col-md-4">
									{{ $itinerary->url }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection