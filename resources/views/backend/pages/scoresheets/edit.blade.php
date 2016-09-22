@extends('backend.layouts.app')

@section('title')Scoring
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
					<center><h3>{{ $participant->name }}</h3></center>

					<ul class="list-unstyled user_data">
						<li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA</li>
					</ul>
					<br />
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12">

					<div class="profile_title">
						<div class="col-md-6">
							<h2>User Activity Report</h2>
						</div>
						<div class="col-md-6">
							<div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
								<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
								<span>Scoring</span> <b class="caret"></b>
							</div>
						</div>
					</div>
					<div class="x_content">
						<!-- start form for validation -->
						{!! Form::model($participant, ['route' => ['users.update', $participant],'method' =>'put','role'=>'form','class'=>'form-horizontal form-label-left'])!!}
		        			{!! csrf_field() !!}
							@include('backend.pages.scoresheets._form')
						{!! Form::close() !!}
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
