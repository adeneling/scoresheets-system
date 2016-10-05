 @extends('backend.layouts.app')

@section('title')The Best Participant by Category
@stop

@section('content')

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>TOP 3 FROM CATEGORY</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				@if(isset($category1))
					<?php $no = 1; ?>
					@foreach($category1 as $top)
						<div class="animated flipInY col-lg-4">
							<div class="tile-stats">
								<center>
									<h5>
										<i class="fa fa-trophy"></i> {{ $no++ }}
										<br>
										{{ $top->user->name }}
										<br>
										Area {{ $top->user->area == 5 ? 'Headquarter' : $top->user->area }}
										<br>
										{{ $top->total_coeficient_score }}
										<br>
										{{ $top->user->category->name }}
									</h5>
								</center>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>TOP 3 FROM CATEGORY</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				@if(isset($category2))
					<?php $no = 1; ?>
					@foreach($category2 as $top)
						<div class="animated flipInY col-lg-4">
							<div class="tile-stats">
								<center>
									<h5>
										<i class="fa fa-trophy"></i> {{ $no++ }}
										<br>
										{{ $top->user->name }}
										<br>
										Area {{ $top->user->area == 5 ? 'Headquarter' : $top->user->area }}
										<br>
										{{ $top->total_coeficient_score }}
										<br>
										{{ $top->user->category->name }}
									</h5>
								</center>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
</div>
{{--  --}}
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>TOP 3 FROM CATEGORY</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				@if(isset($category3))
					<?php $no = 1; ?>
					@foreach($category3 as $top)
						<div class="animated flipInY col-lg-4">
							<div class="tile-stats">
								<center>
									<h5>
										<i class="fa fa-trophy"></i> {{ $no++ }}
										<br>
										{{ $top->user->name }}
										<br>
										Area {{ $top->user->area == 5 ? 'Headquarter' : $top->user->area }}
										<br>
										{{ $top->total_coeficient_score }}
										<br>
										{{ $top->user->category->name }}
									</h5>
								</center>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>TOP 3 FROM CATEGORY</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				@if(isset($category4))
					<?php $no = 1; ?>
					@foreach($category4 as $top)
						<div class="animated flipInY col-lg-4">
							<div class="tile-stats">
								<center>
									<h5>
										<i class="fa fa-trophy"></i> {{ $no++ }}
										<br>
										{{ $top->user->name }}
										<br>
										Area {{ $top->user->area == 5 ? 'Headquarter' : $top->user->area }}
										<br>
										{{ $top->total_coeficient_score }}
										<br>
										{{ $top->user->category->name }}
									</h5>
								</center>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>TOP 3 FROM CATEGORY</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				@if(isset($category5))
					<?php $no = 1; ?>
					@foreach($category5 as $top)
						<div class="animated flipInY col-lg-4">
							<div class="tile-stats">
								<center>
									<h5>
										<i class="fa fa-trophy"></i> {{ $no++ }}
										<br>
										{{ $top->user->name }}
										<br>
										Area {{ $top->user->area == 5 ? 'Headquarter' : $top->user->area }}
										<br>
										{{ $top->total_coeficient_score }}
										<br>
										{{ $top->user->category->name }}
									</h5>
								</center>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>TOP 3 FROM CATEGORY</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				@if(isset($category6))
					<?php $no = 1; ?>
					@foreach($category6 as $top)
						<div class="animated flipInY col-lg-4">
							<div class="tile-stats">
								<center>
									<h5>
										<i class="fa fa-trophy"></i> {{ $no++ }}
										<br>
										{{ $top->user->name }}
										<br>
										Area {{ $top->user->area == 5 ? 'Headquarter' : $top->user->area }}
										<br>
										{{ $top->total_coeficient_score }}
										<br>
										{{ $top->user->category->name }}
									</h5>
								</center>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>TOP 3 FROM CATEGORY</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				@if(isset($category7))
					<?php $no = 1; ?>
					@foreach($category7 as $top)
						<div class="animated flipInY col-lg-4">
							<div class="tile-stats">
								<center>
									<h5>
										<i class="fa fa-trophy"></i> {{ $no++ }}
										<br>
										{{ $top->user->name }}
										<br>
										Area {{ $top->user->area == 5 ? 'Headquarter' : $top->user->area }}
										<br>
										{{ $top->total_coeficient_score }}
										<br>
										{{ $top->user->category->name }}
									</h5>
								</center>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>TOP 3 FROM CATEGORY</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				@if(isset($category8))
					<?php $no = 1; ?>
					@foreach($category8 as $top)
						<div class="animated flipInY col-lg-4">
							<div class="tile-stats">
								<center>
									<h5>
										<i class="fa fa-trophy"></i> {{ $no++ }}
										<br>
										{{ $top->user->name }}
										<br>
										Area {{ $top->user->area == 5 ? 'Headquarter' : $top->user->area }}
										<br>
										{{ $top->total_coeficient_score }}
										<br>
										{{ $top->user->category->name }}
									</h5>
								</center>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>TOP 3 FROM CATEGORY</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				@if(isset($category9))
					<?php $no = 1; ?>
					@foreach($category9 as $top)
						<div class="animated flipInY col-lg-4">
							<div class="tile-stats">
								<center>
									<h5>
										<i class="fa fa-trophy"></i> {{ $no++ }}
										<br>
										{{ $top->user->name }}
										<br>
										Area {{ $top->user->area == 5 ? 'Headquarter' : $top->user->area }}
										<br>
										{{ $top->total_coeficient_score }}
										<br>
										{{ $top->user->category->name }}
									</h5>
								</center>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>TOP 3 FROM CATEGORY</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				@if(isset($category10))
					<?php $no = 1; ?>
					@foreach($category10 as $top)
						<div class="animated flipInY col-lg-4">
							<div class="tile-stats">
								<center>
									<h5>
										<i class="fa fa-trophy"></i> {{ $no++ }}
										<br>
										{{ $top->user->name }}
										<br>
										Area {{ $top->user->area == 5 ? 'Headquarter' : $top->user->area }}
										<br>
										{{ $top->total_coeficient_score }}
										<br>
										{{ $top->user->category->name }}
									</h5>
								</center>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>TOP 3 FROM CATEGORY</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				@if(isset($category11))
					<?php $no = 1; ?>
					@foreach($category11 as $top)
						<div class="animated flipInY col-lg-4">
							<div class="tile-stats">
								<center>
									<h5>
										<i class="fa fa-trophy"></i> {{ $no++ }}
										<br>
										{{ $top->user->name }}
										<br>
										Area {{ $top->user->area == 5 ? 'Headquarter' : $top->user->area }}
										<br>
										{{ $top->total_coeficient_score }}
										<br>
										{{ $top->user->category->name }}
									</h5>
								</center>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>TOP 3 FROM CATEGORY</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				@if(isset($category12))
					<?php $no = 1; ?>
					@foreach($category12 as $top)
						<div class="animated flipInY col-lg-4">
							<div class="tile-stats">
								<center>
									<h5>
										<i class="fa fa-trophy"></i> {{ $no++ }}
										<br>
										{{ $top->user->name }}
										<br>
										Area {{ $top->user->area == 5 ? 'Headquarter' : $top->user->area }}
										<br>
										{{ $top->total_coeficient_score }}
										<br>
										{{ $top->user->category->name }}
									</h5>
								</center>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>TOP 3 FROM CATEGORY</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				@if(isset($category13))
					<?php $no = 1; ?>
					@foreach($category13 as $top)
						<div class="animated flipInY col-lg-4">
							<div class="tile-stats">
								<center>
									<h5>
										<i class="fa fa-trophy"></i> {{ $no++ }}
										<br>
										{{ $top->user->name }}
										<br>
										Area {{ $top->user->area == 5 ? 'Headquarter' : $top->user->area }}
										<br>
										{{ $top->total_coeficient_score }}
										<br>
										{{ $top->user->category->name }}
									</h5>
								</center>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>TOP 3 FROM CATEGORY</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				@if(isset($category14))
					<?php $no = 1; ?>
					@foreach($category14 as $top)
						<div class="animated flipInY col-lg-4">
							<div class="tile-stats">
								<center>
									<h5>
										<i class="fa fa-trophy"></i> {{ $no++ }}
										<br>
										{{ $top->user->name }}
										<br>
										Area {{ $top->user->area == 5 ? 'Headquarter' : $top->user->area }}
										<br>
										{{ $top->total_coeficient_score }}
										<br>
										{{ $top->user->category->name }}
									</h5>
								</center>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div class="row">
	<div class="form-group">
		<center>
			<a href="{{ url('scoresheets') }}" class="btn btn-primary">BACK</a>
		</center>
	</div>
</div>
@endsection
