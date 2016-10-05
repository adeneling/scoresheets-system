 @extends('backend.layouts.app')

@section('title')Scoresheets
@stop

@section('content')
<!-- page content -->
<div class="row">
	<div class="col-md-12">
		<div class="x_panel">
			<div class="x_content">
				<!-- start form for validation -->
				{!! Form::open( ['url' =>'scoresheets','method' =>'get','role'=>'form','class'=>'form-horizontal form-label-left'])!!}
					<div class="form-group{{ $errors->has('q') ? ' has-error' : '' }}">
					    <label class="control-label col-md-1">Category</label>
					    <div class="col-md-4">
					        {!!Form::select('q', [''=>'']+App\Category::pluck('name','id')->all(), null, ['onchange'=>'this.form.submit()','class'=>'select2_single form-control']) !!}
					    </div>
					    @if($errors->has('q'))
					        <span class="help-block">
					            <strong>{{ $errors->first('q') }}</strong>
					        </span>
					    @endif
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
{{-- only admin can see top 3 from each category --}}
@role('admin')	
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>TOP 3 {{ isset($category) ? '- '. $category->name : '-' }}</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					@if(isset($topParticipants))
						<?php $no = 1; ?>
						@foreach($topParticipants as $top)
							<div class="animated flipInY col-lg-4">
								<div class="tile-stats">
									<center>
										<h5>
											<img class="img-responsive avatar-view" src="{{ asset('img/' . ($top->user->picture != null ? $top->user->picture : 'picture.png' )) }}" alt="Avatar" title="{{ $top->user->name }}">
											<i class="fa fa-trophy"></i> {{ $no++ }}
											<br>
											{{ $top->user->name }}
											<br>
											Area {{ $top->user->area == 5 ? 'Headquarter' : $top->user->area }}
											<br>
											{{ $top->total_coeficient_score }}
										</h5>
									</center>
								</div>
							</div>
						@endforeach
					@endif
				</div>
			</div>
		</div>
	</div>	
@endif

{{-- only coordinator can see top 3 from each category --}}
@role('coordinator')	
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>TOP 3 {{ isset($category) ? '- '. $category->name : '-' }}</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					@if(isset($topParticipants))
						<?php $no = 1; ?>
						@foreach($topParticipants as $top)
							<div class="animated flipInY col-lg-4">
								<div class="tile-stats">
									<center>
										<h5>
											<img class="img-responsive avatar-view" src="{{ asset('img/' . ($top->user->picture != null ? $top->user->picture : 'picture.png' )) }}" alt="Avatar" title="{{ $top->user->name }}">
											<i class="fa fa-trophy"></i> {{ $no++ }}
											<br>
											{{ $top->user->name }}
											<br>
											Area {{ $top->user->area == 5 ? 'Headquarter' : $top->user->area }}
											<br>
											{{ $top->total_coeficient_score }}
										</h5>
									</center>
								</div>
							</div>
						@endforeach
					@endif
				</div>
			</div>
		</div>
	</div>	
@endif

<div class="clearfix"></div>

@if(isset($scoresheets))
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2><font color="red">Scoresheets {{ isset($category) ? '- '. $category->name : '-' }}</font></h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_title">
				@role('jury')
					<a href="{{ url('participant') }}" class="btn btn-primary pull-right"> New Scoresheets</a>
				@endrole
				@role('admin')
					<a href="{{ url('participant') }}" class="btn btn-primary pull-right"> New Scoresheets</a>
					<a href="{{ url('download-scoresheets/xls') }}" class="btn btn-success pull-right"> Download Scoresheets to Excel</a>
					<a href="{{ url('winner-participant') }}" class="btn btn-danger pull-right"> The Best Participant</a>
					<a href="{{ url('winner-category') }}" class="btn btn-danger pull-right"> The Best Participant by Category</a>
					<a href="{{ url('winner-area') }}" class="btn btn-danger pull-right"> The Best Category by Area</a>
				@endrole
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table id="datatable" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Category</th>
							<th>Area</th>
							<th>Final Score</th>
							<th>Judged By</th>
							@role('jury')
							<th width="30%">Aksi</th>
							@endrole
							@role('admin')
								<th width="30%">Aksi</th>
							@endrole
							@role('coordinator')
								<th width="10%">Aksi</th>
							@endrole
							
						</tr>
					</thead>

					<tbody>
						<?php $no = 1; ?>
						@foreach($scoresheets as $scoresheet)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $scoresheet->participant_name }}</td>
							<td>{{ $scoresheet->category->name }}</td>
							<td>{{ $scoresheet->user->area == 5 ? 'Headquarter' : $scoresheet->user->area}}</td>
							<td>{{ $scoresheet->total_coeficient_score }}</td>
							<td>{{ $scoresheet->userJudgedBy->name }}</td>
							<td>
								<center>
									{!! Form::model($scoresheet, ['route' => ['scoresheets.destroy', $scoresheet], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
									<a href = "{{ route('scoresheets.show', encrypt($scoresheet->id))}}" class="btn btn-primary">Check</a>
									@role('jury')
									 | <a href = "{{ route('scoresheets.edit', encrypt($scoresheet->id))}}" class="btn btn-warning">Edit Score</a>
									 | <button type="submit" class="btn btn-danger js-submit-confirm">Delete</button>
									@endrole
									@role('admin')
									 | <a href = "{{ route('scoresheets.edit', encrypt($scoresheet->id))}}" class="btn btn-warning">Edit Score</a>
									 | <button type="submit" class="btn btn-danger js-submit-confirm">Delete</button>
									@endrole
									{!! Form::close()!!}

								</center>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@else
<center><H1><font color="red">EMPTY</font></H1></center>
@endif

@endsection
