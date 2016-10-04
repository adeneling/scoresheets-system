 @extends('backend.layouts.app')

@section('title')The Best Participant
@stop

@section('content')

@if(isset($scoresheets))
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_content">
				<table id="datatable" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Category</th>
							<th>Area</th>
							<th>Final Score</th>
						</tr>
					</thead>

					<tbody>
						<?php $no = 1; ?>
						@foreach($scoresheets as $scoresheet)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $scoresheet->user->name }}</td>
							<td>{{ $scoresheet->user->category->name }}</td>
							<td>{{ $scoresheet->user->area == 5 ? 'Headquarter' : $scoresheet->user->area}}</td>
							<td>{{ $scoresheet->total_coeficient_score }}</td>
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

<div class="clearfix"></div>
<div class="row">
	<div class="form-group">
		<center>
			<a href="{{ url('scoresheets') }}" class="btn btn-primary">BACK</a>
		</center>
	</div>
</div>
@endsection
