@extends('backend.layouts.app')

@section('title')Notification
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
							<th>Title</th>
							<th width="30%">Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $no = 1; ?>
                		@foreach($notifications as $notification)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $notification->user->name }}</td>
							<td>{{ $notification->user_nik }}</td>
							<td>{{ $notification->title }}</td>
							<td>
								<center>
									{!! Form::model($notification, ['route' => ['notification.destroy', $notification], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
	                                <a href = "{{ route('notification.show', encrypt($notification->id))}}" class="btn btn-primary">Show</a> 
	                                <a href = "{{ route('notification.edit', encrypt($notification->id))}}" class="btn btn-warning">Edit</a> 
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