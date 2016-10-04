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
								<h1>{{ 'AREA ' . $bestAreaWinnerName}}</h1>
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
							<td>{{ $nilaiCategori1[0]==1 ? 'JUARA 1 (' .$resultCategori1[0].')' : ''}}</td>
							<td>{{ $nilaiCategori1[1]==1 ? 'JUARA 1 (' .$resultCategori1[1].')' : ''}}</td>
							<td>{{ $nilaiCategori1[2]==1 ? 'JUARA 1 (' .$resultCategori1[2].')' : ''}}</td>
							<td>{{ $nilaiCategori1[3]==1 ? 'JUARA 1 (' .$resultCategori1[3].')' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST GRAPARI MITRA</font></th>
							<td>{{ $nilaiCategori3[0]==1 ? 'JUARA 1 (' .$resultCategori3[0].')' : ''}}</td>
							<td>{{ $nilaiCategori3[1]==1 ? 'JUARA 1 (' .$resultCategori3[1].')' : ''}}</td>
							<td>{{ $nilaiCategori3[2]==1 ? 'JUARA 1 (' .$resultCategori3[2].')' : ''}}</td>
							<td>{{ $nilaiCategori3[3]==1 ? 'JUARA 1 (' .$resultCategori3[3].')' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST SERVICE DIFFERENTIATION CE ACROSS CHANNEL</font></th>
							<td>{{ $nilaiCategori2[0]==1 ? 'JUARA 1 (' .$resultCategori2[0].')' : ''}}</td>
							<td>{{ $nilaiCategori2[1]==1 ? 'JUARA 1 (' .$resultCategori2[1].')' : ''}}</td>
							<td>{{ $nilaiCategori2[2]==1 ? 'JUARA 1 (' .$resultCategori2[2].')' : ''}}</td>
							<td>{{ $nilaiCategori2[3]==1 ? 'JUARA 1 (' .$resultCategori2[3].')' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST INBOUND CALL CENTER</font></th>
							<td>{{ $nilaiCategori7[0]==1 ? 'JUARA 1 (' .$resultCategori7[0].')' : ''}}</td>
							<td>{{ $nilaiCategori7[1]==1 ? 'JUARA 1 (' .$resultCategori7[1].')' : ''}}</td>
							<td>{{ $nilaiCategori7[2]==1 ? 'JUARA 1 (' .$resultCategori7[2].')' : ''}}</td>
							<td>{{ $nilaiCategori7[3]==1 ? 'JUARA 1 (' .$resultCategori7[3].')' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST OUTBOUND CALL CENTER</font></th>
							<td>{{ $nilaiCategori6[0]==1 ? 'JUARA 1 (' .$resultCategori6[0].')' : ''}}</td>
							<td>{{ $nilaiCategori6[1]==1 ? 'JUARA 1 (' .$resultCategori6[1].')' : ''}}</td>
							<td>{{ $nilaiCategori6[2]==1 ? 'JUARA 1 (' .$resultCategori6[2].')' : ''}}</td>
							<td>{{ $nilaiCategori6[3]==1 ? 'JUARA 1 (' .$resultCategori6[3].')' : ''}}</td>
						</tr>			

						{{-- TIER 2 --}}
						<tr>
							<th class="red"><font color="white">THE BEST FRONT OFFICE SUPPORT</font></th>
							<td>{{ $nilaiCategori4[0]==1 ? 'JUARA 1 (' .$resultCategori4[0].')' : ''}}</td>
							<td>{{ $nilaiCategori4[1]==1 ? 'JUARA 1 (' .$resultCategori4[1].')' : ''}}</td>
							<td>{{ $nilaiCategori4[2]==1 ? 'JUARA 1 (' .$resultCategori4[2].')' : ''}}</td>
							<td>{{ $nilaiCategori4[3]==1 ? 'JUARA 1 (' .$resultCategori4[3].')' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST COMPLAINT HANDLING OFFICER</font></th>
							<td>{{ $nilaiCategori8[0]==1 ? 'JUARA 1 (' .$resultCategori8[0].')' : ''}}</td>
							<td>{{ $nilaiCategori8[1]==1 ? 'JUARA 1 (' .$resultCategori8[1].')' : ''}}</td>
							<td>{{ $nilaiCategori8[2]==1 ? 'JUARA 1 (' .$resultCategori8[2].')' : ''}}</td>
							<td>{{ $nilaiCategori8[3]==1 ? 'JUARA 1 (' .$resultCategori8[3].')' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST TRAINED CALL CENTER</font></th>
							<td>{{ $nilaiCategori9[0]==1 ? 'JUARA 1 (' .$resultCategori9[0].')' : ''}}</td>
							<td>{{ $nilaiCategori9[1]==1 ? 'JUARA 1 (' .$resultCategori9[1].')' : ''}}</td>
							<td>{{ $nilaiCategori9[2]==1 ? 'JUARA 1 (' .$resultCategori9[2].')' : ''}}</td>
							<td>{{ $nilaiCategori9[3]==1 ? 'JUARA 1 (' .$resultCategori9[3].')' : ''}}</td>
						</tr>

						{{-- TIER 3 --}}
						<tr>
							<th class="red"><font color="white">THE BEST BILLING COLLECTION AREA</font></th>
							<td>{{ $nilaiCategori10[0]==1 ? 'JUARA 1 (' .$resultCategori10[0].')' : ''}}</td>
							<td>{{ $nilaiCategori10[1]==1 ? 'JUARA 1 (' .$resultCategori10[1].')' : ''}}</td>
							<td>{{ $nilaiCategori10[2]==1 ? 'JUARA 1 (' .$resultCategori10[2].')' : ''}}</td>
							<td>{{ $nilaiCategori10[3]==1 ? 'JUARA 1 (' .$resultCategori10[3].')' : ''}}</td>
						</tr>

						{{-- TIER 4 --}}
						<tr>
							<th class="red"><font color="white">THE BEST BACK END SUPPORT</font></th>
							<td>{{ $nilaiCategori5[0]==1 ? 'JUARA 1 (' .$resultCategori5[0].')' : ''}}</td>
							<td>{{ $nilaiCategori5[1]==1 ? 'JUARA 1 (' .$resultCategori5[1].')' : ''}}</td>
							<td>{{ $nilaiCategori5[2]==1 ? 'JUARA 1 (' .$resultCategori5[2].')' : ''}}</td>
							<td>{{ $nilaiCategori5[3]==1 ? 'JUARA 1 (' .$resultCategori5[3].')' : ''}}</td>
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
								<h1>{{ 'AREA ' . $callCenterWinnerName}}</h1>
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
							<td>{{ $nilaiCategori7[0]==1 ? 'JUARA 1 (' .$resultCategori7[0].')' : ''}}</td>
							<td>{{ $nilaiCategori7[1]==1 ? 'JUARA 1 (' .$resultCategori7[1].')' : ''}}</td>
							<td>{{ $nilaiCategori7[2]==1 ? 'JUARA 1 (' .$resultCategori7[2].')' : ''}}</td>
							<td>{{ $nilaiCategori7[3]==1 ? 'JUARA 1 (' .$resultCategori7[3].')' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST OUTBOUND CALL CENTER</font></th>
							<td>{{ $nilaiCategori6[0]==1 ? 'JUARA 1 (' .$resultCategori6[0].')' : ''}}</td>
							<td>{{ $nilaiCategori6[1]==1 ? 'JUARA 1 (' .$resultCategori6[1].')' : ''}}</td>
							<td>{{ $nilaiCategori6[2]==1 ? 'JUARA 1 (' .$resultCategori6[2].')' : ''}}</td>
							<td>{{ $nilaiCategori6[3]==1 ? 'JUARA 1 (' .$resultCategori6[3].')' : ''}}</td>
						</tr>						
						<tr>
							<th class="red"><font color="white">THE BEST COMPLAINT HANDLING</font></th>
							<td>{{ $nilaiCategori8[0]==1 ? 'JUARA 1 (' .$resultCategori8[0].')' : ''}}</td>
							<td>{{ $nilaiCategori8[1]==1 ? 'JUARA 1 (' .$resultCategori8[1].')' : ''}}</td>
							<td>{{ $nilaiCategori8[2]==1 ? 'JUARA 1 (' .$resultCategori8[2].')' : ''}}</td>
							<td>{{ $nilaiCategori8[3]==1 ? 'JUARA 1 (' .$resultCategori8[3].')' : ''}}</td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST TRAINED</font></th>
							<td>{{ $nilaiCategori9[0]==1 ? 'JUARA 1 (' .$resultCategori9[0].')' : ''}}</td>
							<td>{{ $nilaiCategori9[1]==1 ? 'JUARA 1 (' .$resultCategori9[1].')' : ''}}</td>
							<td>{{ $nilaiCategori9[2]==1 ? 'JUARA 1 (' .$resultCategori9[2].')' : ''}}</td>
							<td>{{ $nilaiCategori9[3]==1 ? 'JUARA 1 (' .$resultCategori9[3].')' : ''}}</td>
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
				<a href="{{ url('unit-score/create') }}" class="btn btn-primary pull-right"> New Unit</a>
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
