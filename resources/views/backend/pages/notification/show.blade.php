@extends('backend.layouts.app')

@section('title')Notification
@stop

@section('content')

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>{{ $notification->user->name }}</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
					<div class="profile_img">
						<div id="crop-avatar">
							<!-- Current avatar -->
							<img class="img-responsive avatar-view" src="{{ asset('backend/images/picture.png') }}" alt="Avatar" title="Change the avatar">
						</div>
					</div>
					<h3>{{ $notification->user->name }}</h3>

					<ul class="list-unstyled user_data">
						<li>Category: {{ $notification->user->category->name }}</li>
						<li>Area: {{ $notification->user->area }}</li>
						<li>Region: {{ $notification->user->region }}</li>
						<li><center>
								<a href="{{ url('notification') }}" class="btn btn-primary">Kembali</a>
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
								<label class="control-label col-md-3">Title</label>
								<div class="col-md-4">
									{{ $notification->title }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label col-md-3">Message</label>
								<div class="col-md-4">
									{{ $notification->message }}
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