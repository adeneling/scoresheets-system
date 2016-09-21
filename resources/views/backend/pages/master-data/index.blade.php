@extends('backend.layouts.app')

@section('title')Master Data
@stop

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Master Data Member</h2>
				<a href="{{ url('master-data/create') }}" class="btn btn-primary pull-right"> New Master Data</a>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table id="datatable" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>NIK</th>
							<th>E-Mail</th>
							<th width="20%">Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $no = 1; ?>
                		@foreach($masterData as $data)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $data->nik }}</td>
							<td>{{ $data->email }}</td>
							<td>
								<center>
									{!! Form::model($data, ['route' => ['master-data.destroy', $data], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
	                                <a href = "{{ route('master-data.edit', encrypt($data->id))}}" class="btn btn-warning">Edit</a> | 
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
