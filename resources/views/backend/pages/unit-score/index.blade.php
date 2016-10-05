@extends('backend.layouts.app')

@section('title')Unit Score
@stop

@section('content')

<!-- page content -->
<div class="row">
	<div class="col-md-12">
		<div class="x_panel">
			<div class="x_content">
				<!-- start form for validation -->
				{!! Form::open( ['url' =>'unit-score','method' =>'get','role'=>'form','class'=>'form-horizontal form-label-left'])!!}
					<div class="form-group{{ $errors->has('q') ? ' has-error' : '' }}">
					    <label class="control-label col-md-2">Best Unit Category</label>
					    <div class="col-md-6">
					        {!!Form::select('q', [''=>'']+App\UnitCategory::pluck('name','id')->all(), null, ['onchange'=>'this.form.submit()','class'=>'select2_single form-control']) !!}
					    </div>
					    @if($errors->has('q'))
					        <span class="help-block">
					            <strong>{{ $errors->first('q') }}</strong>
					        </span>
					    @endif
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>TOP 3</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<?php $no = 1; ?>
				@foreach($topCategory as $top)
					<div class="animated flipInY col-lg-4">
						<div class="tile-stats">
							<center>
								<h5>
									<i class="fa fa-trophy"></i> {{ $no++ }}
									<br>
									{{ $top->unitCategory->name }}
									<br>
									{{ $top->type }}
									<br>
									Area {{ $top->area == 5 ? 'Headquarter' : $top->area }}
									<br>
									{{ $top->total_score }}
								</h5>
							</center>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>BEST AREA</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="animated flipInY col-lg-12">
					<div class="tile-stats">
						<center>
							@if($bestAreaWinnerResultValue != 0)
								<h1><font color="red">{{ 'AREA ' . $bestAreaWinnerName}}</font></h1>
								<br>
								<h1>{{ 'IS THE BEST AREA WINNER'}}</h1>
							@endif
						</center>
					</div>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th width="40%">Category</th>
							<th>AREA 1</th>
							<th>AREA 2</th>
							<th>AREA 3</th>
							<th>AREA 4</th>
						</tr>
					</thead>
					<tbody>
						{{-- TIER 1 --}}
						<tr>
							<th class="red"><font color="white">THE BEST GRAPARI</font></th>
							<td>{{$resultCategori1[0] }}</td>
							<td>{{$resultCategori1[1] }}</td>
							<td>{{$resultCategori1[2] }}</td>
							<td>{{$resultCategori1[3] }}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST GRAPARI MITRA</font></th>
							<td>{{$resultCategori3[0] }}</td>
							<td>{{$resultCategori3[1] }}</td>
							<td>{{$resultCategori3[2] }}</td>
							<td>{{$resultCategori3[3] }}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST SERVICE DIFFERENTIATION CUSTOMER EXPERIENCE</font></th>
							<td>{{$resultCategori2[0] }}</td>
							<td>{{$resultCategori2[1] }}</td>
							<td>{{$resultCategori2[2] }}</td>
							<td>{{$resultCategori2[3] }}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST INBOUND CALL CENTER</font></th>
							<td>{{$resultCategori7[0] }}</td>
							<td>{{$resultCategori7[1] }}</td>
							<td>{{$resultCategori7[2] }}</td>
							<td>{{$resultCategori7[3] }}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST OUTBOUND CALL CENTER</font></th>
							<td>{{$resultCategori6[0] }}</td>
							<td>{{$resultCategori6[1] }}</td>
							<td>{{$resultCategori6[2] }}</td>
							<td>{{$resultCategori6[3] }}</td>
						</tr>			

						{{-- TIER 2 --}}
						<tr>
							<th class="red"><font color="white">THE BEST FRONT OFFICE SUPPORT</font></th>
							<td>{{$resultCategori4[0] }}</td>
							<td>{{$resultCategori4[1] }}</td>
							<td>{{$resultCategori4[2] }}</td>
							<td>{{$resultCategori4[3] }}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST COMPLAINT HANDLING OFFICER</font></th>
							<td>{{$resultCategori8[0] }}</td>
							<td>{{$resultCategori8[1] }}</td>
							<td>{{$resultCategori8[2] }}</td>
							<td>{{$resultCategori8[3] }}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST TRAINED CALL CENTER</font></th>
							<td>{{$resultCategori9[0] }}</td>
							<td>{{$resultCategori9[1] }}</td>
							<td>{{$resultCategori9[2] }}</td>
							<td>{{$resultCategori9[3] }}</td>
						</tr>

						{{-- TIER 3 --}}
						<tr>
							<th class="red"><font color="white">THE BEST BILLING COLLECTION AREA</font></th>
							<td>{{ $resultCategori10[0] }}</td>
							<td>{{ $resultCategori10[1] }}</td>
							<td>{{ $resultCategori10[2] }}</td>
							<td>{{ $resultCategori10[3] }}</td>
						</tr>

						{{-- TIER 4 --}}
						<tr>
							<th class="red"><font color="white">THE BEST BACK END SUPPORT</font></th>
							<td>{{$resultCategori5[0] }}</td>
							<td>{{$resultCategori5[1] }}</td>
							<td>{{$resultCategori5[2] }}</td>
							<td>{{$resultCategori5[3] }}</td>
						</tr>						
						
						<tr >
							<th colspan="1">TOTAL</th>
							<th>{{ $bestAreaResult[0] }}</th>
							<th>{{ $bestAreaResult[1] }}</th>
							<th>{{ $bestAreaResult[2] }}</th>
							<th>{{ $bestAreaResult[3] }}</th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>



<div class="row">
	<div class="col-md-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>THE BEST CALL CENTER</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="animated flipInY col-lg-12">
					<div class="tile-stats">
						<center>
							@if($callCenterWinnerResultValue != 0)
								<h1><font color="red">{{ 'AREA ' . $callCenterWinnerName}}</font></h1>
								<br>
								<h1>{{ 'IS THE BEST CALL CENTER WINNER'}}</h1>
							@endif
						</center>
					</div>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th width="40%">Category</th>
							<th>AREA 1</th>
							<th>AREA 2</th>
							<th>AREA 3</th>
							<th>AREA 4</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th class="red"><font color="white">THE BEST INBOUND CALL CENTER</font></th>
							<td>{{ $resultCategori7[0] }}</td>
							<td>{{ $resultCategori7[1] }}</td>
							<td>{{ $resultCategori7[2] }}</td>
							<td>{{ $resultCategori7[3] }}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST OUTBOUND CALL CENTER</font></th>
							<td>{{ $resultCategori6[0] }}</td>
							<td>{{ $resultCategori6[1] }}</td>
							<td>{{ $resultCategori6[2] }}</td>
							<td>{{ $resultCategori6[3] }}</td>
						</tr>						
						<tr>
							<th class="red"><font color="white">THE BEST COMPLAINT HANDLING</font></th>
							<td>{{ $resultCategori8[0] }}</td>
							<td>{{ $resultCategori8[1] }}</td>
							<td>{{ $resultCategori8[2] }}</td>
							<td>{{ $resultCategori8[3] }}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST TRAINED</font></th>
							<td>{{ $resultCategori9[0] }}</td>
							<td>{{ $resultCategori9[1] }}</td>
							<td>{{ $resultCategori9[2] }}</td>
							<td>{{ $resultCategori9[3] }}</td>
						</tr>
						<tr >
							<th colspan="1">TOTAL</th>
							<th>{{ $callCenterWinnerResult[0] }}</th>
							<th>{{ $callCenterWinnerResult[1] }}</th>
							<th>{{ $callCenterWinnerResult[2] }}</th>
							<th>{{ $callCenterWinnerResult[3] }}</th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>




<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>LIST ALL UNIT</h2>
				<a href="{{ url('unit-score/create') }}" class="btn btn-primary pull-right"> NEW UNIT</a>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table id="datatable" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Category</th>
							<th>Type</th>
							<th>Area</th>
							<th>Location</th>
							<th>Score</th>
							<th width="30%">Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $no = 1; ?>
                		@foreach($unitScore as $unit)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $unit->unitCategory->name }}</td>
							<td>{{ $unit->type }}</td>
							<td>{{ $unit->area == 5 ? 'Headquarter' : $unit->area }}</td>
							<td>{{ $unit->location }}</td>
							<td>{{ $unit->total_score }}</td>
							<td>
								<center>
									{!! Form::model($unit, ['route' => ['unit-score.destroy', $unit], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
	                                <a href = "{{ route('unit-score.edit', encrypt($unit->id))}}" class="btn btn-warning">Edit Score</a> | 
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
