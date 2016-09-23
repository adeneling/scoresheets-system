@extends('backend.layouts.app')

@section('title')Unit Score
@stop

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Unit Score</h2>
				<a href="{{ url('unit-score/create') }}" class="btn btn-primary pull-right"> New Score</a>
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
	                                <button type="submit" class="btn btn-danger">Delete</button>
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
