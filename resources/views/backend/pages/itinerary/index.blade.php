@extends('backend.layouts.app')

@section('title')Itinerary
@stop

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Itinerary List</h2>
				<br>
				<br>
			</div>
			<div class="x_content">
				<table id="datatable" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>NIK</th>
							<th>Booking Code</th>
							<th width="30%">Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $no = 1; ?>
                		@foreach($itinerarys as $itinerary)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $itinerary->user->name }}</td>
							<td>{{ $itinerary->user_nik }}</td>
							<td>{{ $itinerary->booking_id }}</td>
							<td>
								<center>
									{!! Form::model($itinerary, ['route' => ['itinerary.destroy', $itinerary], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
	                                <a href = "{{ route('itinerary.show', encrypt($itinerary->id))}}" class="btn btn-primary">Show</a> 
	                                <a href = "{{ route('itinerary.edit', encrypt($itinerary->id))}}" class="btn btn-warning">Edit</a> 
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