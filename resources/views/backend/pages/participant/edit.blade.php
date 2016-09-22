@extends('backend.layouts.app')

@section('title')Scoring Participant
@stop

@section('content')

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>{{ $participant->name }}</h2>
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
					<h3>{{ $participant->name }}</h3>

					<ul class="list-unstyled user_data">
						<li><a href="#" class="btn btn-danger">Presentation file</a></li>
						<li>City: {{ $participant->city }}</li>
						<li>Category: {{ $participant->category->name }}</li>
						<li>Area: {{ $participant->area }}</li>
						<li>Region: {{ $participant->region }}</li>
					</ul>
					<br />
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12">

					<div class="profile_title">
						<div class="col-md-6">
							<h2>@yield('title') - {{ $participant->name }}</h2>
						</div>
					</div>
					<div class="x_content">
						<!-- start form for validation -->
						{!! Form::model($participant, ['route' => ['participant.update', $participant],'method' =>'put','role'=>'form','class'=>'form-horizontal form-label-left'])!!}
		        			{!! csrf_field() !!}
							@include('backend.pages.participant._form')
						{!! Form::close() !!}
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
