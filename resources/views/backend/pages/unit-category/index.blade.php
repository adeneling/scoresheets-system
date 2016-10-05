@extends('backend.layouts.app')

@section('title')Unit Category
@stop

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Parent Category</h2>
				{{-- <a href="{{ url('best-area') }}" class="btn btn-success pull-right"> Best Area</a>
				<a href="{{ url('best-of-the-best') }}" class="btn btn-success pull-right"> Best of the Best</a> --}}
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="row">					
					<div class="animated flipInY col-lg-3">
					</div>
					<div class="animated flipInY col-lg-6">
						<div class="tile-stats">
							<div class="icon"><i class="fa fa-trophy"></i>
							</div>
							<div class="count">{{ $unitCategoryParent[1]->name }}</div>
							<h3>THE BEST WINNER</h3>
						</div>
					</div>	
					<div class="animated flipInY col-lg-3">
					</div>						
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

