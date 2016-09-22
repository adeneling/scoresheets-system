@extends('backend.layouts.app')

@section('title')Scoresheets
@stop

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Scoresheets</h2>
				<a href="{{ url('category/create') }}" class="btn btn-primary pull-right"> New Scoresheets</a>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table id="datatable" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>

							<th width="20%">Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $no = 1; ?>
                		@foreach($scoresheets as $scoresheet)
						<tr>
							<td>{{ $no++ }}</td>

							<td>
								<center>
									{!! Form::model($scoresheet, ['route' => ['scoresheets.destroy', $scoresheet], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
	                                <a href = "{{ route('scoresheets.show', encrypt($scoresheet->id))}}" class="btn btn-primary">Lihat</a> | 
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
