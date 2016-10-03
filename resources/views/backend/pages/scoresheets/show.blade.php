@extends('backend.layouts.app')

@section('title')Scoring
@stop

@section('content')

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>{{ $scoresheet->user->name }}</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
					<div class="profile_img">
						<div id="crop-avatar">
							<!-- Current avatar -->
							<img class="img-responsive avatar-view" src="{{ asset('img/' . ($scoresheet->user->picture != null ? $scoresheet->user->picture : 'picture.png' )) }}" alt="Avatar" title="Change the avatar">
						</div>
					</div>
					<h3>{{ $scoresheet->user->name }}</h3>

					<ul class="list-unstyled user_data">
						<li>
							@if($scoresheet->user->presentation_file != null)
                                <td>
                                    <a href="{{ asset('files/'. $scoresheet->user->presentation_file) }}" class="btn btn-danger" target="_blank">File Presentation</a>
                                </td>
                            @else
                                <td>
                                    <a href="#" class="btn btn-danger" >Presentasi belum ada</a>
                                </td>
                            @endif
                        </li>
						<li>City: {{ $scoresheet->user->city }}</li>
						<li>Category: {{ $scoresheet->user->category->name }}</li>
						<li>Area: {{ $scoresheet->user->area == 5 ? 'Headquarter' : $scoresheet->user->area}}</li>
						<li>Region: {{ $scoresheet->user->region }}</li>
					</ul>
					<br />
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12">

					<div class="profile_title">
						<div class="col-md-6">
							<h2>@yield('title') - {{ $scoresheet->user->name }}</h2>
						</div>
					</div>
					<div class="x_content">
						<div class="row">
							<div class="form-group">
								<label class="control-label col-md-3">Participant Name</label>
								<div class="col-md-4">
									{{ $scoresheet->user->name }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label col-md-3">Participant Area</label>
								<div class="col-md-4">
									{{ $scoresheet->user->area == 5 ? 'Headquarter' : $scoresheet->user->area}}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label col-md-3">Category Name</label>
								<div class="col-md-4">
									{{ $scoresheet->category->name }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label col-md-3">Room</label>
								<div class="col-md-4">
									{{ $scoresheet->room_id }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label col-md-3">Session</label>
								<div class="col-md-4">

								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label col-md-3">Presentation Material</label>
								<div class="col-md-1">
									{{ $scoresheet->presentation_material }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label col-md-3">Communication Skill</label>
								<div class="col-md-1">
									{{ $scoresheet->communication_skill }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label col-md-3">Achievement</label>
								<div class="col-md-1">
									{{ $scoresheet->achievement }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label col-md-3">Personal Value</label>
								<div class="col-md-1">
									{{ $scoresheet->personal_value }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label col-md-3">Customer Care Knowledge</label>
								<div class="col-md-1">
									{{ $scoresheet->customer_care_knowledge }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label col-md-3">Solution Skill</label>
								<div class="col-md-1">
									{{ $scoresheet->solution_skill }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label col-md-3">Inspirational Story</label>
								<div class="col-md-1">
									{{ $scoresheet->inspirational_story }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label col-md-3">Leadership</label>
								<div class="col-md-1">
									{{ $scoresheet->leadership }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label col-md-3">Notes</label>
								<div class="col-md-4">
									{{ $scoresheet->notes }}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label class="control-label col-md-3">Total Coeficient Score</label>
								<div class="col-md-4">
									<div class="label label-primary">
										{{ $scoresheet->total_coeficient_score }}
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group">
								<center>
									<a href="{{ url('scoresheets') }}" class="btn btn-primary">Kembali</a>
								</center>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection