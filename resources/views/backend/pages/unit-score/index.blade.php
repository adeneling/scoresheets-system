@extends('backend.layouts.app')

@section('title')Unit Score
@stop

@section('content')

<!-- page content -->
<div class="row">
	<div class="col-md-12">
		<div class="x_panel">
			<div class="x_content">
				<!-- start form for validation -->
				{!! Form::open( ['url' =>'unit-score','method' =>'get','role'=>'form','class'=>'form-horizontal form-label-left'])!!}
					<div class="form-group{{ $errors->has('q') ? ' has-error' : '' }}">
					    <label class="control-label col-md-2">Best Unit Category</label>
					    <div class="col-md-5">
					        {!!Form::select('q', [''=>'']+App\UnitCategory::pluck('name','id')->all(), null, ['class'=>'select2_single form-control']) !!}
					    </div>
					    @if($errors->has('q'))
					        <span class="help-block">
					            <strong>{{ $errors->first('q') }}</strong>
					        </span>
					    @endif
					    <div class="col-md-4">
					    	<button type="submit" class="btn btn-danger"> Find </button> 
					    </div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Top 3</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<?php $no = 1; ?>
				@foreach($topCategory as $top)
					<div class="animated flipInY col-lg-4">
						<div class="tile-stats">
							<center>
								<h5>
									<i class="fa fa-trophy"></i> {{ $no++ }}
									<br>
									{{ $top->unitCategory->name }}
									<br>
									{{ $top->type }}
									<br>
									Area {{ $top->area }}
									<br>
									{{ $top->total_score }}
								</h5>
							</center>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Winner for the Best Area</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<?php $no = 1; ?>
				@for($no; $no<=4;$no++)
				<div class="animated flipInY col-lg-3">
					<div class="tile-stats">
						<center>								
								<i class="fa fa-trophy"></i> {{ $no }}
								<br>
								Area
						</center>
					</div>
				</div>
				@endfor
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>List all unit score</h2>
				<a href="{{ url('unit-score/create') }}" class="btn btn-primary pull-right"> New unit</a>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table id="datatable" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Category</th>
							<th>Type</th>
							<th>Area</th>
							<th>Location</th>
							<th>Score</th>
							<th width="30%">Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $no = 1; ?>
                		@foreach($unitScore as $unit)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $unit->unitCategory->name }}</td>
							<td>{{ $unit->type }}</td>
							<td>{{ $unit->area }}</td>
							<td>{{ $unit->location }}</td>
							<td>{{ $unit->total_score }}</td>
							<td>
								<center>
									{!! Form::model($unit, ['route' => ['unit-score.destroy', $unit], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
	                                <a href = "{{ route('unit-score.edit', encrypt($unit->id))}}" class="btn btn-warning">Edit Score</a> | 
	                                <button type="submit" class="btn btn-danger js-submit-confirm">Delete</button>
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
@endsection
