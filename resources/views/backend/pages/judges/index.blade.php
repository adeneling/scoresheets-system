@extends('backend.layouts.app')

@section('title')Judges
@stop

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Judges List</h2>
				<a href="{{ url('judges/create') }}" class="btn btn-primary pull-right"> Create Judges</a>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table id="datatable" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th width="5%">No</th>
							<th width="20%">Name</th>
							<th width="20%">E-Mail</th>
							<th width="10%">Handled</th>
							<th width="20%">Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $no = 1; ?>
                		@foreach($roles->users as $user)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>
								<?php $handle = explode(',', $user->category_handled); ?>
								@foreach($handle as $category)
                                    @if($category != 0)
                                        Category {{ $category }}
                                        <br>
                                    @endif
                                @endforeach
							</td>
							<td>
								<center>
									{!! Form::model($user, ['route' => ['judges.destroy', $user], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
	                                <a href = "{{ route('judges.show', encrypt($user->id))}}" class="btn btn-primary">Show</a> 
	                                <a href = "{{ route('judges.edit', encrypt($user->id))}}" class="btn btn-warning">Edit</a> 
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
