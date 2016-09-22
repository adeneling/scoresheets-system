@extends('backend.layouts.app')

@section('title')Unit Category
@stop

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Parent Category</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="row">
					@foreach($unitCategoryParent as $unit)
					<div class="animated flipInY col-lg-4">
						<div class="tile-stats">
							<div class="icon"><i class="fa fa-certificate"></i>
							</div>
							<div class="count">{{ $unit->name }}</div>
							<h3>Parent Category</h3>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Category</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="row">
					@foreach($unitCategory as $unit)
					<div class="animated flipInY col-lg-6">
						<div class="alert alert-danger" role="alert">
							<i class="fa fa-star"></i> {{ $unit->name }}
						</div>						
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

