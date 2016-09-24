@extends('backend.layouts.app')

@section('title')Category
@stop

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Category</h2>
				<a href="{{ url('category/create') }}" class="btn btn-primary pull-right"> New Category</a>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table id="datatable" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Communication Skill</th>
							<th>Achievement</th>
							<th>Personal</th>
							<th>Solution Skill</th>
							<th width="25%">Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $no = 1; ?>
                		@foreach($categories as $category)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $category->name }}</td>
							<td>{{ $category->communication_skill }}</td>
							<td>{{ $category->achievement }}</td>
							<td>{{ $category->personal_value }}</td>
							<td>{{ $category->solution_skill }}</td>
							<td>
								<center>
									{!! Form::model($category, ['route' => ['category.destroy', $category], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
	                                <a href = "{{ route('category.show', encrypt($category->id))}}" class="btn btn-primary">Check</a> | 
	                                <a href = "{{ route('category.edit', encrypt($category->id))}}" class="btn btn-warning">Edit</a> | 
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
