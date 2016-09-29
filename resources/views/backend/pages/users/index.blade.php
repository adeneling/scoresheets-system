@extends('backend.layouts.app')

@section('title')Users
@stop

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>User List</h2>
				<a href="{{ url('notification/create') }}" class="btn btn-danger pull-right"> Send notification to all</a>
				<a href="{{ url('users/create') }}" class="btn btn-primary pull-right"> Create user</a>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table id="datatable" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>NIK</th>
							<th>Name</th>
							<th>Active</th>
							<th>File</th>
							<th>Category</th>
							<th>Area</th>
							<th width="50%">Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $no = 1; ?>
                		@foreach($users as $user)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $user->nik }}</td>
							<td>{{ $user->name }}</td>
							<td>
								@if($user->activated == 1)
								<i class="fa fa-check"></i>
								@endif
							</td>
							<td>
								@if($user->presentation_file != null)
									<i class="fa fa-check"></i>
								@endif
							</td>
							<td>{{ isset($user->category->name)  ? $user->category->name : $user->category_id }}</td>
							<td>{{ $user->area }}</td>
							<td>
								<center>
									{!! Form::model($user, ['route' => ['users.destroy', $user], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
	                                <a href = "{{ route('notification.createnotification', encrypt($user->id))}}" class="btn btn-danger">Notification</a>
	                                <a href = "{{ route('itinerary.createitinerary', encrypt($user->id))}}" class="btn btn-danger">Itinerary</a> |
	                                <a href = "{{ route('users.show', encrypt($user->id))}}" class="btn btn-primary">Show</a> 
	                                <a href = "{{ route('users.edit', encrypt($user->id))}}" class="btn btn-warning">Edit</a> 
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
