 @extends('backend.layouts.app')

@section('title')The Best Participant by Area
@stop

@section('content')

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
				<table class="table">
					<thead>
						<tr>
							<th width="40%">Category</th>
							<th>HEADQUARTER</th>
							<th>AREA 1</th>
							<th>AREA 2</th>
							<th>AREA 3</th>
							<th>AREA 4</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th class="red"><font color="white">THE BEST GRAPARI</font></th>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST GRAPARI MITRA</font></th>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST SERVICE DIFFERENTIATION CUSTOMER EXPERIENCE</font></th>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST INBOUND CALL CENTER</font></th>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST OUTBOUND CALL CENTER</font></th>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>

						{{-- TIER 2 --}}
						<tr>
							<th class="red"><font color="white">THE BEST FRONT OFFICE SUPPORT</font></th>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST COMPLAINT HANDLING OFFICER</font></th>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<th class="red"><font color="white">THE BEST TRAINED CALL CENTER</font></th>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>

						{{-- TIER 3 --}}
						<tr>
							<th class="red"><font color="white">THE BEST BILLING COLLECTION AREA</font></th>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>

						{{-- TIER 4 --}}
						<tr>
							<th class="red"><font color="white">THE BEST BACK END SUPPORT</font></th>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
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
