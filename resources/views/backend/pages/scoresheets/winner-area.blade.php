 @extends('backend.layouts.app')

@section('title')The Best Participant by Category
@stop

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>WINNERS</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table class="table">
					<thead>
						<tr>
							<th width="20%">Category</th>
							<th>HEADQUARTER</th>
							<th>AREA 1</th>
							<th>AREA 2</th>
							<th>AREA 3</th>
							<th>AREA 4</th>
						</tr>
					</thead>
					<tbody>
						
						<tr>
							<th class="red"><font color="white">CS GraPARI</font></th>
							<td>
								{{ $category1[0]->user->area == 5 && $category1[0] != null ? 'The Best Champion:'. $category1[0]->user->name : '' }}
								<br>
								{{ $category1[1]->user->area == 5 && $category1[1] != null ? 'The 2nd Best:'. $category1[1]->user->name : '' }}
								<br>
								{{ $category1[2]->user->area == 5 && $category1[2] != null ? 'The 3rd Best:'. $category1[2]->user->name : '' }}
							</td>
							<td>
								{{ $category1[0]->user->area == 1 && $category1[0] != null ? 'The Best Champion: '. $category1[0]->user->name : '' }}
								<br>
								{{ $category1[1]->user->area == 1 && $category1[1] != null ? 'The 2nd Best: '. $category1[1]->user->name : '' }}
								<br>
								{{ $category1[2]->user->area == 1 && $category1[2] != null ? 'The 3rd Best: '. $category1[2]->user->name : '' }}
							</td>
							<td>
								{{ $category1[0]->user->area == 2 && $category1[0] != null ? 'The Best Champion: '. $category1[0]->user->name : '' }}
								<br>
								{{ $category1[1]->user->area == 2 && $category1[1] != null ? 'The 2nd Best: '. $category1[1]->user->name : '' }}
								<br>
								{{ $category1[2]->user->area == 2 && $category1[2] != null ? 'The 3rd Best: '. $category1[2]->user->name : '' }}
							</td>
							<td>
								{{ $category1[0]->user->area == 3 && $category1[0] != null ? 'The Best Champion: '. $category1[0]->user->name : '' }}
								<br>
								{{ $category1[1]->user->area == 3 && $category1[1] != null ? 'The 2nd Best: '. $category1[1]->user->name : '' }}
								<br>
								{{ $category1[2]->user->area == 3 && $category1[2] != null ? 'The 3rd Best: '. $category1[2]->user->name : '' }}
							</td>
							<td>
								{{ $category1[0]->user->area == 4 && $category1[0] != null ? 'The Best Champion: '. $category1[0]->user->name : '' }}
								<br>
								{{ $category1[1]->user->area == 4 && $category1[1] != null ? 'The 2nd Best: '. $category1[1]->user->name : '' }}
								<br>
								{{ $category1[2]->user->area == 4 && $category1[2] != null ? 'The 3rd Best: '. $category1[2]->user->name : '' }}
							</td>
						</tr>
						
						
						<tr>
							<th class="red"><font color="white">CS GraPARI Mitra</font></th>
							<td>
								{{ $category2[0]->user->area == 5 && $category2[0] != null ? 'The Best Champion:'. $category2[0]->user->name : '' }}
								<br>
								{{ $category2[1]->user->area == 5 && $category2[1] != null ? 'The 2nd Best:'. $category2[1]->user->name : '' }}
								<br>
								{{ $category2[2]->user->area == 5 && $category2[2] != null ? 'The 3rd Best:'. $category2[2]->user->name : '' }}
							</td>
							<td>
								{{ $category2[0]->user->area == 1 && $category2[0] != null ? 'The Best Champion: '. $category2[0]->user->name : '' }}
								<br>
								{{ $category2[1]->user->area == 1 && $category2[1] != null ? 'The 2nd Best: '. $category2[1]->user->name : '' }}
								<br>
								{{ $category2[2]->user->area == 1 && $category2[2] != null ? 'The 3rd Best: '. $category2[2]->user->name : '' }}
							</td>
							<td>
								{{ $category2[0]->user->area == 2 && $category2[0] != null ? 'The Best Champion: '. $category2[0]->user->name : '' }}
								<br>
								{{ $category2[1]->user->area == 2 && $category2[1] != null ? 'The 2nd Best: '. $category2[1]->user->name : '' }}
								<br>
								{{ $category2[2]->user->area == 2 && $category2[2] != null ? 'The 3rd Best: '. $category2[2]->user->name : '' }}
							</td>
							<td>
								{{ $category2[0]->user->area == 3 && $category2[0] != null ? 'The Best Champion: '. $category2[0]->user->name : '' }}
								<br>
								{{ $category2[1]->user->area == 3 && $category2[1] != null ? 'The 2nd Best: '. $category2[1]->user->name : '' }}
								<br>
								{{ $category2[2]->user->area == 3 && $category2[2] != null ? 'The 3rd Best: '. $category2[2]->user->name : '' }}
							</td>
							<td>
								{{ $category2[0]->user->area == 4 && $category2[0] != null ? 'The Best Champion: '. $category2[0]->user->name : '' }}
								<br>
								{{ $category2[1]->user->area == 4 && $category2[1] != null ? 'The 2nd Best: '. $category2[1]->user->name : '' }}
								<br>
								{{ $category2[2]->user->area == 4 && $category2[2] != null ? 'The 3rd Best: '. $category2[2]->user->name : '' }}
							</td>
						</tr>
						
						<tr>
							<th class="red"><font color="white">eCare Officer</font></th>
							<td>
								{{ $category3[0]->user->area == 5 && $category3[0] != null ? 'The Best Champion:'. $category3[0]->user->name : '' }}
								<br>
								{{ $category3[1]->user->area == 5 && $category3[1] != null ? 'The 2nd Best:'. $category3[1]->user->name : '' }}
								<br>
								{{ $category3[2]->user->area == 5 && $category3[2] != null ? 'The 3rd Best:'. $category3[2]->user->name : '' }}
							</td>
							<td>
								{{ $category3[0]->user->area == 1 && $category3[0] != null ? 'The Best Champion: '. $category3[0]->user->name : '' }}
								<br>
								{{ $category3[1]->user->area == 1 && $category3[1] != null ? 'The 2nd Best: '. $category3[1]->user->name : '' }}
								<br>
								{{ $category3[2]->user->area == 1 && $category3[2] != null ? 'The 3rd Best: '. $category3[2]->user->name : '' }}
							</td>
							<td>
								{{ $category3[0]->user->area == 2 && $category3[0] != null ? 'The Best Champion: '. $category3[0]->user->name : '' }}
								<br>
								{{ $category3[1]->user->area == 2 && $category3[1] != null ? 'The 2nd Best: '. $category3[1]->user->name : '' }}
								<br>
								{{ $category3[2]->user->area == 2 && $category3[2] != null ? 'The 3rd Best: '. $category3[2]->user->name : '' }}
							</td>
							<td>
								{{ $category3[0]->user->area == 3 && $category3[0] != null ? 'The Best Champion: '. $category3[0]->user->name : '' }}
								<br>
								{{ $category3[1]->user->area == 3 && $category3[1] != null ? 'The 2nd Best: '. $category3[1]->user->name : '' }}
								<br>
								{{ $category3[2]->user->area == 3 && $category3[2] != null ? 'The 3rd Best: '. $category3[2]->user->name : '' }}
							</td>
							<td>
								{{ $category3[0]->user->area == 4 && $category3[0] != null ? 'The Best Champion: '. $category3[0]->user->name : '' }}
								<br>
								{{ $category3[1]->user->area == 4 && $category3[1] != null ? 'The 2nd Best: '. $category3[1]->user->name : '' }}
								<br>
								{{ $category3[2]->user->area == 4 && $category3[2] != null ? 'The 3rd Best: '. $category3[2]->user->name : '' }}
							</td>
						</tr>
						
						<tr>
							<th class="red"><font color="white">Agent Inbound</font></th>
							<td>
								{{ $category4[0]->user->area == 5 && $category4[0] != null ? 'The Best Champion:'. $category4[0]->user->name : '' }}
								<br>
								{{ $category4[1]->user->area == 5 && $category4[1] != null ? 'The 2nd Best:'. $category4[1]->user->name : '' }}
								<br>
								{{ $category4[2]->user->area == 5 && $category4[2] != null ? 'The 3rd Best:'. $category4[2]->user->name : '' }}
							</td>
							<td>
								{{ $category4[0]->user->area == 1 && $category4[0] != null ? 'The Best Champion: '. $category4[0]->user->name : '' }}
								<br>
								{{ $category4[1]->user->area == 1 && $category4[1] != null ? 'The 2nd Best: '. $category4[1]->user->name : '' }}
								<br>
								{{ $category4[2]->user->area == 1 && $category4[2] != null ? 'The 3rd Best: '. $category4[2]->user->name : '' }}
							</td>
							<td>
								{{ $category4[0]->user->area == 2 && $category4[0] != null ? 'The Best Champion: '. $category4[0]->user->name : '' }}
								<br>
								{{ $category4[1]->user->area == 2 && $category4[1] != null ? 'The 2nd Best: '. $category4[1]->user->name : '' }}
								<br>
								{{ $category4[2]->user->area == 2 && $category4[2] != null ? 'The 3rd Best: '. $category4[2]->user->name : '' }}
							</td>
							<td>
								{{ $category4[0]->user->area == 3 && $category4[0] != null ? 'The Best Champion: '. $category4[0]->user->name : '' }}
								<br>
								{{ $category4[1]->user->area == 3 && $category4[1] != null ? 'The 2nd Best: '. $category4[1]->user->name : '' }}
								<br>
								{{ $category4[2]->user->area == 3 && $category4[2] != null ? 'The 3rd Best: '. $category4[2]->user->name : '' }}
							</td>
							<td>
								{{ $category4[0]->user->area == 4 && $category4[0] != null ? 'The Best Champion: '. $category4[0]->user->name : '' }}
								<br>
								{{ $category4[1]->user->area == 4 && $category4[1] != null ? 'The 2nd Best: '. $category4[1]->user->name : '' }}
								<br>
								{{ $category4[2]->user->area == 4 && $category4[2] != null ? 'The 3rd Best: '. $category4[2]->user->name : '' }}
							</td>
						</tr>
						
						
						<tr>
							<th class="red"><font color="white">Agent Outbound</font></th>
							<td>
								{{ $category5[0]->user->area == 5 && $category5[0] != null ? 'The Best Champion:'. $category5[0]->user->name : '' }}
								<br>
								{{ $category5[1]->user->area == 5 && $category5[1] != null ? 'The 2nd Best:'. $category5[1]->user->name : '' }}
								<br>
								{{ $category5[2]->user->area == 5 && $category5[2] != null ? 'The 3rd Best:'. $category5[2]->user->name : '' }}
							</td>
							<td>
								{{ $category5[0]->user->area == 1 && $category5[0] != null ? 'The Best Champion: '. $category5[0]->user->name : '' }}
								<br>
								{{ $category5[1]->user->area == 1 && $category5[1] != null ? 'The 2nd Best: '. $category5[1]->user->name : '' }}
								<br>
								{{ $category5[2]->user->area == 1 && $category5[2] != null ? 'The 3rd Best: '. $category5[2]->user->name : '' }}
							</td>
							<td>
								{{ $category5[0]->user->area == 2 && $category5[0] != null ? 'The Best Champion: '. $category5[0]->user->name : '' }}
								<br>
								{{ $category5[1]->user->area == 2 && $category5[1] != null ? 'The 2nd Best: '. $category5[1]->user->name : '' }}
								<br>
								{{ $category5[2]->user->area == 2 && $category5[2] != null ? 'The 3rd Best: '. $category5[2]->user->name : '' }}
							</td>
							<td>
								{{ $category5[0]->user->area == 3 && $category5[0] != null ? 'The Best Champion: '. $category5[0]->user->name : '' }}
								<br>
								{{ $category5[1]->user->area == 3 && $category5[1] != null ? 'The 2nd Best: '. $category5[1]->user->name : '' }}
								<br>
								{{ $category5[2]->user->area == 3 && $category5[2] != null ? 'The 3rd Best: '. $category5[2]->user->name : '' }}
							</td>
							<td>
								{{ $category5[0]->user->area == 4 && $category5[0] != null ? 'The Best Champion: '. $category5[0]->user->name : '' }}
								<br>
								{{ $category5[1]->user->area == 4 && $category5[1] != null ? 'The 2nd Best: '. $category5[1]->user->name : '' }}
								<br>
								{{ $category5[2]->user->area == 4 && $category5[2] != null ? 'The 3rd Best: '. $category5[2]->user->name : '' }}
							</td>
						</tr>
						
						
						<tr>
							<th class="red"><font color="white">Front Office Support (FOS)</font></th>
							<td>
								{{ $category6[0]->user->area == 5 && $category6[0] != null ? 'The Best Champion:'. $category6[0]->user->name : '' }}
								<br>
								{{ $category6[1]->user->area == 5 && $category6[1] != null ? 'The 2nd Best:'. $category6[1]->user->name : '' }}
								<br>
								{{ $category6[2]->user->area == 5 && $category6[2] != null ? 'The 3rd Best:'. $category6[2]->user->name : '' }}
							</td>
							<td>
								{{ $category6[0]->user->area == 1 && $category6[0] != null ? 'The Best Champion: '. $category6[0]->user->name : '' }}
								<br>
								{{ $category6[1]->user->area == 1 && $category6[1] != null ? 'The 2nd Best: '. $category6[1]->user->name : '' }}
								<br>
								{{ $category6[2]->user->area == 1 && $category6[2] != null ? 'The 3rd Best: '. $category6[2]->user->name : '' }}
							</td>
							<td>
								{{ $category6[0]->user->area == 2 && $category6[0] != null ? 'The Best Champion: '. $category6[0]->user->name : '' }}
								<br>
								{{ $category6[1]->user->area == 2 && $category6[1] != null ? 'The 2nd Best: '. $category6[1]->user->name : '' }}
								<br>
								{{ $category6[2]->user->area == 2 && $category6[2] != null ? 'The 3rd Best: '. $category6[2]->user->name : '' }}
							</td>
							<td>
								{{ $category6[0]->user->area == 3 && $category6[0] != null ? 'The Best Champion: '. $category6[0]->user->name : '' }}
								<br>
								{{ $category6[1]->user->area == 3 && $category6[1] != null ? 'The 2nd Best: '. $category6[1]->user->name : '' }}
								<br>
								{{ $category6[2]->user->area == 3 && $category6[2] != null ? 'The 3rd Best: '. $category6[2]->user->name : '' }}
							</td>
							<td>
								{{ $category6[0]->user->area == 4 && $category6[0] != null ? 'The Best Champion: '. $category6[0]->user->name : '' }}
								<br>
								{{ $category6[1]->user->area == 4 && $category6[1] != null ? 'The 2nd Best: '. $category6[1]->user->name : '' }}
								<br>
								{{ $category6[2]->user->area == 4 && $category6[2] != null ? 'The 3rd Best: '. $category6[2]->user->name : '' }}
							</td>
						</tr>
						
						
						<tr>
							<th class="red"><font color="white">Complaint Handling Officer (CHO)</font></th>
							<td>
								{{ $category7[0]->user->area == 5 && $category7[0] != null ? 'The Best Champion:'. $category7[0]->user->name : '' }}
								<br>
								{{ $category7[1]->user->area == 5 && $category7[1] != null ? 'The 2nd Best:'. $category7[1]->user->name : '' }}
								<br>
								{{ $category7[2]->user->area == 5 && $category7[2] != null ? 'The 3rd Best:'. $category7[2]->user->name : '' }}
							</td>
							<td>
								{{ $category7[0]->user->area == 1 && $category7[0] != null ? 'The Best Champion: '. $category7[0]->user->name : '' }}
								<br>
								{{ $category7[1]->user->area == 1 && $category7[1] != null ? 'The 2nd Best: '. $category7[1]->user->name : '' }}
								<br>
								{{ $category7[2]->user->area == 1 && $category7[2] != null ? 'The 3rd Best: '. $category7[2]->user->name : '' }}
							</td>
							<td>
								{{ $category7[0]->user->area == 2 && $category7[0] != null ? 'The Best Champion: '. $category7[0]->user->name : '' }}
								<br>
								{{ $category7[1]->user->area == 2 && $category7[1] != null ? 'The 2nd Best: '. $category7[1]->user->name : '' }}
								<br>
								{{ $category7[2]->user->area == 2 && $category7[2] != null ? 'The 3rd Best: '. $category7[2]->user->name : '' }}
							</td>
							<td>
								{{ $category7[0]->user->area == 3 && $category7[0] != null ? 'The Best Champion: '. $category7[0]->user->name : '' }}
								<br>
								{{ $category7[1]->user->area == 3 && $category7[1] != null ? 'The 2nd Best: '. $category7[1]->user->name : '' }}
								<br>
								{{ $category7[2]->user->area == 3 && $category7[2] != null ? 'The 3rd Best: '. $category7[2]->user->name : '' }}
							</td>
							<td>
								{{ $category7[0]->user->area == 4 && $category7[0] != null ? 'The Best Champion: '. $category7[0]->user->name : '' }}
								<br>
								{{ $category7[1]->user->area == 4 && $category7[1] != null ? 'The 2nd Best: '. $category7[1]->user->name : '' }}
								<br>
								{{ $category7[2]->user->area == 4 && $category7[2] != null ? 'The 3rd Best: '. $category7[2]->user->name : '' }}
							</td>
						</tr>
						
						
						<tr>
							<th class="red"><font color="white">Back End Support (BES)</font></th>
							<td>
								{{ $category8[0]->user->area == 5 && $category8[0] != null ? 'The Best Champion:'. $category8[0]->user->name : '' }}
								<br>
								{{ $category8[1]->user->area == 5 && $category8[1] != null ? 'The 2nd Best:'. $category8[1]->user->name : '' }}
								<br>
								{{ $category8[2]->user->area == 5 && $category8[2] != null ? 'The 3rd Best:'. $category8[2]->user->name : '' }}
							</td>
							<td>
								{{ $category8[0]->user->area == 1 && $category8[0] != null ? 'The Best Champion: '. $category8[0]->user->name : '' }}
								<br>
								{{ $category8[1]->user->area == 1 && $category8[1] != null ? 'The 2nd Best: '. $category8[1]->user->name : '' }}
								<br>
								{{ $category8[2]->user->area == 1 && $category8[2] != null ? 'The 3rd Best: '. $category8[2]->user->name : '' }}
							</td>
							<td>
								{{ $category8[0]->user->area == 2 && $category8[0] != null ? 'The Best Champion: '. $category8[0]->user->name : '' }}
								<br>
								{{ $category8[1]->user->area == 2 && $category8[1] != null ? 'The 2nd Best: '. $category8[1]->user->name : '' }}
								<br>
								{{ $category8[2]->user->area == 2 && $category8[2] != null ? 'The 3rd Best: '. $category8[2]->user->name : '' }}
							</td>
							<td>
								{{ $category8[0]->user->area == 3 && $category8[0] != null ? 'The Best Champion: '. $category8[0]->user->name : '' }}
								<br>
								{{ $category8[1]->user->area == 3 && $category8[1] != null ? 'The 2nd Best: '. $category8[1]->user->name : '' }}
								<br>
								{{ $category8[2]->user->area == 3 && $category8[2] != null ? 'The 3rd Best: '. $category8[2]->user->name : '' }}
							</td>
							<td>
								{{ $category8[0]->user->area == 4 && $category8[0] != null ? 'The Best Champion: '. $category8[0]->user->name : '' }}
								<br>
								{{ $category8[1]->user->area == 4 && $category8[1] != null ? 'The 2nd Best: '. $category8[1]->user->name : '' }}
								<br>
								{{ $category8[2]->user->area == 4 && $category8[2] != null ? 'The 3rd Best: '. $category8[2]->user->name : '' }}
							</td>
						</tr>
						
						
						<tr>
							<th class="red"><font color="white">Team Leader Contact Center and eCare</font></th>
							<td>
								{{ $category9[0]->user->area == 5 && $category9[0] != null ? 'The Best Champion:'. $category9[0]->user->name : '' }}
								<br>
								{{ $category9[1]->user->area == 5 && $category9[1] != null ? 'The 2nd Best:'. $category9[1]->user->name : '' }}
								<br>
								{{ $category9[2]->user->area == 5 && $category9[2] != null ? 'The 3rd Best:'. $category9[2]->user->name : '' }}
							</td>
							<td>
								{{ $category9[0]->user->area == 1 && $category9[0] != null ? 'The Best Champion: '. $category9[0]->user->name : '' }}
								<br>
								{{ $category9[1]->user->area == 1 && $category9[1] != null ? 'The 2nd Best: '. $category9[1]->user->name : '' }}
								<br>
								{{ $category9[2]->user->area == 1 && $category9[2] != null ? 'The 3rd Best: '. $category9[2]->user->name : '' }}
							</td>
							<td>
								{{ $category9[0]->user->area == 2 && $category9[0] != null ? 'The Best Champion: '. $category9[0]->user->name : '' }}
								<br>
								{{ $category9[1]->user->area == 2 && $category9[1] != null ? 'The 2nd Best: '. $category9[1]->user->name : '' }}
								<br>
								{{ $category9[2]->user->area == 2 && $category9[2] != null ? 'The 3rd Best: '. $category9[2]->user->name : '' }}
							</td>
							<td>
								{{ $category9[0]->user->area == 3 && $category9[0] != null ? 'The Best Champion: '. $category9[0]->user->name : '' }}
								<br>
								{{ $category9[1]->user->area == 3 && $category9[1] != null ? 'The 2nd Best: '. $category9[1]->user->name : '' }}
								<br>
								{{ $category9[2]->user->area == 3 && $category9[2] != null ? 'The 3rd Best: '. $category9[2]->user->name : '' }}
							</td>
							<td>
								{{ $category9[0]->user->area == 4 && $category9[0] != null ? 'The Best Champion: '. $category9[0]->user->name : '' }}
								<br>
								{{ $category9[1]->user->area == 4 && $category9[1] != null ? 'The 2nd Best: '. $category9[1]->user->name : '' }}
								<br>
								{{ $category9[2]->user->area == 4 && $category9[2] != null ? 'The 3rd Best: '. $category9[2]->user->name : '' }}
							</td>
						</tr>
						
						
						<tr>
							<th class="red"><font color="white">Team Leader GraPARI</font></th>
							<td>
								{{ $category10[0]->user->area == 5 && $category10[0] != null ? 'The Best Champion:'. $category10[0]->user->name : '' }}
								<br>
								{{ $category10[1]->user->area == 5 && $category10[1] != null ? 'The 2nd Best:'. $category10[1]->user->name : '' }}
								<br>
								{{ $category10[2]->user->area == 5 && $category10[2] != null ? 'The 3rd Best:'. $category10[2]->user->name : '' }}
							</td>
							<td>
								{{ $category10[0]->user->area == 1 && $category10[0] != null ? 'The Best Champion: '. $category10[0]->user->name : '' }}
								<br>
								{{ $category10[1]->user->area == 1 && $category10[1] != null ? 'The 2nd Best: '. $category10[1]->user->name : '' }}
								<br>
								{{ $category10[2]->user->area == 1 && $category10[2] != null ? 'The 3rd Best: '. $category10[2]->user->name : '' }}
							</td>
							<td>
								{{ $category10[0]->user->area == 2 && $category10[0] != null ? 'The Best Champion: '. $category10[0]->user->name : '' }}
								<br>
								{{ $category10[1]->user->area == 2 && $category10[1] != null ? 'The 2nd Best: '. $category10[1]->user->name : '' }}
								<br>
								{{ $category10[2]->user->area == 2 && $category10[2] != null ? 'The 3rd Best: '. $category10[2]->user->name : '' }}
							</td>
							<td>
								{{ $category10[0]->user->area == 3 && $category10[0] != null ? 'The Best Champion: '. $category10[0]->user->name : '' }}
								<br>
								{{ $category10[1]->user->area == 3 && $category10[1] != null ? 'The 2nd Best: '. $category10[1]->user->name : '' }}
								<br>
								{{ $category10[2]->user->area == 3 && $category10[2] != null ? 'The 3rd Best: '. $category10[2]->user->name : '' }}
							</td>
							<td>
								{{ $category10[0]->user->area == 4 && $category10[0] != null ? 'The Best Champion: '. $category10[0]->user->name : '' }}
								<br>
								{{ $category10[1]->user->area == 4 && $category10[1] != null ? 'The 2nd Best: '. $category10[1]->user->name : '' }}
								<br>
								{{ $category10[2]->user->area == 4 && $category10[2] != null ? 'The 3rd Best: '. $category10[2]->user->name : '' }}
							</td>
						</tr>
						
						
						<tr>
							<th class="red"><font color="white">Spv GraPARI</font></th>
							<td>
								{{ $category11[0]->user->area == 5 && $category11[0] != null ? 'The Best Champion:'. $category11[0]->user->name : '' }}
								<br>
								{{ $category11[1]->user->area == 5 && $category11[1] != null ? 'The 2nd Best:'. $category11[1]->user->name : '' }}
								<br>
								{{ $category11[2]->user->area == 5 && $category11[2] != null ? 'The 3rd Best:'. $category11[2]->user->name : '' }}
							</td>
							<td>
								{{ $category11[0]->user->area == 1 && $category11[0] != null ? 'The Best Champion: '. $category11[0]->user->name : '' }}
								<br>
								{{ $category11[1]->user->area == 1 && $category11[1] != null ? 'The 2nd Best: '. $category11[1]->user->name : '' }}
								<br>
								{{ $category11[2]->user->area == 1 && $category11[2] != null ? 'The 3rd Best: '. $category11[2]->user->name : '' }}
							</td>
							<td>
								{{ $category11[0]->user->area == 2 && $category11[0] != null ? 'The Best Champion: '. $category11[0]->user->name : '' }}
								<br>
								{{ $category11[1]->user->area == 2 && $category11[1] != null ? 'The 2nd Best: '. $category11[1]->user->name : '' }}
								<br>
								{{ $category11[2]->user->area == 2 && $category11[2] != null ? 'The 3rd Best: '. $category11[2]->user->name : '' }}
							</td>
							<td>
								{{ $category11[0]->user->area == 3 && $category11[0] != null ? 'The Best Champion: '. $category11[0]->user->name : '' }}
								<br>
								{{ $category11[1]->user->area == 3 && $category11[1] != null ? 'The 2nd Best: '. $category11[1]->user->name : '' }}
								<br>
								{{ $category11[2]->user->area == 3 && $category11[2] != null ? 'The 3rd Best: '. $category11[2]->user->name : '' }}
							</td>
							<td>
								{{ $category11[0]->user->area == 4 && $category11[0] != null ? 'The Best Champion: '. $category11[0]->user->name : '' }}
								<br>
								{{ $category11[1]->user->area == 4 && $category11[1] != null ? 'The 2nd Best: '. $category11[1]->user->name : '' }}
								<br>
								{{ $category11[2]->user->area == 4 && $category11[2] != null ? 'The 3rd Best: '. $category11[2]->user->name : '' }}
							</td>
						</tr>
						
						
						<tr>
							<th class="red"><font color="white">Spv GraPARI Mitra</font></th>
							<td>
								{{ $category12[0]->user->area == 5 && $category12[0] != null ? 'The Best Champion:'. $category12[0]->user->name : '' }}
								<br>
								{{ $category12[1]->user->area == 5 && $category12[1] != null ? 'The 2nd Best:'. $category12[1]->user->name : '' }}
								<br>
								{{ $category12[2]->user->area == 5 && $category12[2] != null ? 'The 3rd Best:'. $category12[2]->user->name : '' }}
							</td>
							<td>
								{{ $category12[0]->user->area == 1 && $category12[0] != null ? 'The Best Champion: '. $category12[0]->user->name : '' }}
								<br>
								{{ $category12[1]->user->area == 1 && $category12[1] != null ? 'The 2nd Best: '. $category12[1]->user->name : '' }}
								<br>
								{{ $category12[2]->user->area == 1 && $category12[2] != null ? 'The 3rd Best: '. $category12[2]->user->name : '' }}
							</td>
							<td>
								{{ $category12[0]->user->area == 2 && $category12[0] != null ? 'The Best Champion: '. $category12[0]->user->name : '' }}
								<br>
								{{ $category12[1]->user->area == 2 && $category12[1] != null ? 'The 2nd Best: '. $category12[1]->user->name : '' }}
								<br>
								{{ $category12[2]->user->area == 2 && $category12[2] != null ? 'The 3rd Best: '. $category12[2]->user->name : '' }}
							</td>
							<td>
								{{ $category12[0]->user->area == 3 && $category12[0] != null ? 'The Best Champion: '. $category12[0]->user->name : '' }}
								<br>
								{{ $category12[1]->user->area == 3 && $category12[1] != null ? 'The 2nd Best: '. $category12[1]->user->name : '' }}
								<br>
								{{ $category12[2]->user->area == 3 && $category12[2] != null ? 'The 3rd Best: '. $category12[2]->user->name : '' }}
							</td>
							<td>
								{{ $category12[0]->user->area == 4 && $category12[0] != null ? 'The Best Champion: '. $category12[0]->user->name : '' }}
								<br>
								{{ $category12[1]->user->area == 4 && $category12[1] != null ? 'The 2nd Best: '. $category12[1]->user->name : '' }}
								<br>
								{{ $category12[2]->user->area == 4 && $category12[2] != null ? 'The 3rd Best: '. $category12[2]->user->name : '' }}
							</td>
						</tr>
						

						<tr>
							<th class="red"><font color="white">Spv BES</font></th>
							<td>
								{{ $category13[0]->user->area == 5 && $category13[0] != null ? 'The Best Champion:'. $category13[0]->user->name : '' }}
								<br>
								{{ $category13[1]->user->area == 5 && $category13[1] != null ? 'The 2nd Best:'. $category13[1]->user->name : '' }}
								<br>
								{{ $category13[2]->user->area == 5 && $category13[2] != null ? 'The 3rd Best:'. $category13[2]->user->name : '' }}
							</td>
							<td>
								{{ $category13[0]->user->area == 1 && $category13[0] != null ? 'The Best Champion: '. $category13[0]->user->name : '' }}
								<br>
								{{ $category13[1]->user->area == 1 && $category13[1] != null ? 'The 2nd Best: '. $category13[1]->user->name : '' }}
								<br>
								{{ $category13[2]->user->area == 1 && $category13[2] != null ? 'The 3rd Best: '. $category13[2]->user->name : '' }}
							</td>
							<td>
								{{ $category13[0]->user->area == 2 && $category13[0] != null ? 'The Best Champion: '. $category13[0]->user->name : '' }}
								<br>
								{{ $category13[1]->user->area == 2 && $category13[1] != null ? 'The 2nd Best: '. $category13[1]->user->name : '' }}
								<br>
								{{ $category13[2]->user->area == 2 && $category13[2] != null ? 'The 3rd Best: '. $category13[2]->user->name : '' }}
							</td>
							<td>
								{{ $category13[0]->user->area == 3 && $category13[0] != null ? 'The Best Champion: '. $category13[0]->user->name : '' }}
								<br>
								{{ $category13[1]->user->area == 3 && $category13[1] != null ? 'The 2nd Best: '. $category13[1]->user->name : '' }}
								<br>
								{{ $category13[2]->user->area == 3 && $category13[2] != null ? 'The 3rd Best: '. $category13[2]->user->name : '' }}
							</td>
							<td>
								{{ $category13[0]->user->area == 4 && $category13[0] != null ? 'The Best Champion: '. $category13[0]->user->name : '' }}
								<br>
								{{ $category13[1]->user->area == 4 && $category13[1] != null ? 'The 2nd Best: '. $category13[1]->user->name : '' }}
								<br>
								{{ $category13[2]->user->area == 4 && $category13[2] != null ? 'The 3rd Best: '. $category13[2]->user->name : '' }}
							</td>
						</tr>
						

						<tr>
							<th class="red"><font color="white">Spv Contact Center and eCare</font></th>
							<td>
								{{ $category14[0]->user->area == 5 && $category14[0] != null ? 'The Best Champion:'. $category14[0]->user->name : '' }}
								<br>
								{{ $category14[1]->user->area == 5 && $category14[1] != null ? 'The 2nd Best:'. $category14[1]->user->name : '' }}
								<br>
								{{ $category14[2]->user->area == 5 && $category14[2] != null ? 'The 3rd Best:'. $category14[2]->user->name : '' }}
							</td>
							<td>
								{{ $category14[0]->user->area == 1 && $category14[0] != null ? 'The Best Champion: '. $category14[0]->user->name : '' }}
								<br>
								{{ $category14[1]->user->area == 1 && $category14[1] != null ? 'The 2nd Best: '. $category14[1]->user->name : '' }}
								<br>
								{{ $category14[2]->user->area == 1 && $category14[2] != null ? 'The 3rd Best: '. $category14[2]->user->name : '' }}
							</td>
							<td>
								{{ $category14[0]->user->area == 2 && $category14[0] != null ? 'The Best Champion: '. $category14[0]->user->name : '' }}
								<br>
								{{ $category14[1]->user->area == 2 && $category14[1] != null ? 'The 2nd Best: '. $category14[1]->user->name : '' }}
								<br>
								{{ $category14[2]->user->area == 2 && $category14[2] != null ? 'The 3rd Best: '. $category14[2]->user->name : '' }}
							</td>
							<td>
								{{ $category14[0]->user->area == 3 && $category14[0] != null ? 'The Best Champion: '. $category14[0]->user->name : '' }}
								<br>
								{{ $category14[1]->user->area == 3 && $category14[1] != null ? 'The 2nd Best: '. $category14[1]->user->name : '' }}
								<br>
								{{ $category14[2]->user->area == 3 && $category14[2] != null ? 'The 3rd Best: '. $category14[2]->user->name : '' }}
							</td>
							<td>
								{{ $category14[0]->user->area == 4 && $category14[0] != null ? 'The Best Champion: '. $category14[0]->user->name : '' }}
								<br>
								{{ $category14[1]->user->area == 4 && $category14[1] != null ? 'The 2nd Best: '. $category14[1]->user->name : '' }}
								<br>
								{{ $category14[2]->user->area == 4 && $category14[2] != null ? 'The 3rd Best: '. $category14[2]->user->name : '' }}
							</td>
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
				<h2>WINNERS VALUE</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table class="table">
					<thead>
						<tr>
							<th width="20%">Category</th>
							<th>HEADQUARTER</th>
							<th>AREA 1</th>
							<th>AREA 2</th>
							<th>AREA 3</th>
							<th>AREA 4</th>
						</tr>
					</thead>
					<tbody>
						
						<tr>
							<th class="red"><font color="white">CS GraPARI</font></th>
							<td>
								{{ $category1[0]->user->area == 5 && $category1[0] != null ? '1st:'. $category1[0]->total_coeficient_score : '' }}
								<br>
								{{ $category1[1]->user->area == 5 && $category1[1] != null ? '2nd:'. $category1[1]->total_coeficient_score : '' }}
								<br>
								{{ $category1[2]->user->area == 5 && $category1[2] != null ? '3rd:'. $category1[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category1[0]->user->area == 1 && $category1[0] != null ? '1st: '. $category1[0]->total_coeficient_score : '' }}
								<br>
								{{ $category1[1]->user->area == 1 && $category1[1] != null ? '2nd: '. $category1[1]->total_coeficient_score : '' }}
								<br>
								{{ $category1[2]->user->area == 1 && $category1[2] != null ? '3rd: '. $category1[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category1[0]->user->area == 2 && $category1[0] != null ? '1st: '. $category1[0]->total_coeficient_score : '' }}
								<br>
								{{ $category1[1]->user->area == 2 && $category1[1] != null ? '2nd: '. $category1[1]->total_coeficient_score : '' }}
								<br>
								{{ $category1[2]->user->area == 2 && $category1[2] != null ? '3rd: '. $category1[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category1[0]->user->area == 3 && $category1[0] != null ? '1st: '. $category1[0]->total_coeficient_score : '' }}
								<br>
								{{ $category1[1]->user->area == 3 && $category1[1] != null ? '2nd: '. $category1[1]->total_coeficient_score : '' }}
								<br>
								{{ $category1[2]->user->area == 3 && $category1[2] != null ? '3rd: '. $category1[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category1[0]->user->area == 4 && $category1[0] != null ? '1st: '. $category1[0]->total_coeficient_score : '' }}
								<br>
								{{ $category1[1]->user->area == 4 && $category1[1] != null ? '2nd: '. $category1[1]->total_coeficient_score : '' }}
								<br>
								{{ $category1[2]->user->area == 4 && $category1[2] != null ? '3rd: '. $category1[2]->total_coeficient_score : '' }}
							</td>
						</tr>
						
						
						<tr>
							<th class="red"><font color="white">CS GraPARI Mitra</font></th>
							<td>
								{{ $category2[0]->user->area == 5 && $category2[0] != null ? '1st:'. $category2[0]->total_coeficient_score : '' }}
								<br>
								{{ $category2[1]->user->area == 5 && $category2[1] != null ? '2nd:'. $category2[1]->total_coeficient_score : '' }}
								<br>
								{{ $category2[2]->user->area == 5 && $category2[2] != null ? '3rd:'. $category2[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category2[0]->user->area == 1 && $category2[0] != null ? '1st: '. $category2[0]->total_coeficient_score : '' }}
								<br>
								{{ $category2[1]->user->area == 1 && $category2[1] != null ? '2nd: '. $category2[1]->total_coeficient_score : '' }}
								<br>
								{{ $category2[2]->user->area == 1 && $category2[2] != null ? '3rd: '. $category2[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category2[0]->user->area == 2 && $category2[0] != null ? '1st: '. $category2[0]->total_coeficient_score : '' }}
								<br>
								{{ $category2[1]->user->area == 2 && $category2[1] != null ? '2nd: '. $category2[1]->total_coeficient_score : '' }}
								<br>
								{{ $category2[2]->user->area == 2 && $category2[2] != null ? '3rd: '. $category2[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category2[0]->user->area == 3 && $category2[0] != null ? '1st: '. $category2[0]->total_coeficient_score : '' }}
								<br>
								{{ $category2[1]->user->area == 3 && $category2[1] != null ? '2nd: '. $category2[1]->total_coeficient_score : '' }}
								<br>
								{{ $category2[2]->user->area == 3 && $category2[2] != null ? '3rd: '. $category2[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category2[0]->user->area == 4 && $category2[0] != null ? '1st: '. $category2[0]->total_coeficient_score : '' }}
								<br>
								{{ $category2[1]->user->area == 4 && $category2[1] != null ? '2nd: '. $category2[1]->total_coeficient_score : '' }}
								<br>
								{{ $category2[2]->user->area == 4 && $category2[2] != null ? '3rd: '. $category2[2]->total_coeficient_score : '' }}
							</td>
						</tr>
						
						<tr>
							<th class="red"><font color="white">eCare Officer</font></th>
							<td>
								{{ $category3[0]->user->area == 5 && $category3[0] != null ? '1st: '. $category3[0]->total_coeficient_score : '' }}
								<br>
								{{ $category3[1]->user->area == 5 && $category3[1] != null ? '2nd: '. $category3[1]->total_coeficient_score : '' }}
								<br>
								{{ $category3[2]->user->area == 5 && $category3[2] != null ? '3rd: '. $category3[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category3[0]->user->area == 1 && $category3[0] != null ? '1st: '. $category3[0]->total_coeficient_score : '' }}
								<br>
								{{ $category3[1]->user->area == 1 && $category3[1] != null ? '2nd: '. $category3[1]->total_coeficient_score : '' }}
								<br>
								{{ $category3[2]->user->area == 1 && $category3[2] != null ? '3rd: '. $category3[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category3[0]->user->area == 2 && $category3[0] != null ? '1st: '. $category3[0]->total_coeficient_score : '' }}
								<br>
								{{ $category3[1]->user->area == 2 && $category3[1] != null ? '2nd: '. $category3[1]->total_coeficient_score : '' }}
								<br>
								{{ $category3[2]->user->area == 2 && $category3[2] != null ? '3rd: '. $category3[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category3[0]->user->area == 3 && $category3[0] != null ? '1st: '. $category3[0]->total_coeficient_score : '' }}
								<br>
								{{ $category3[1]->user->area == 3 && $category3[1] != null ? '2nd: '. $category3[1]->total_coeficient_score : '' }}
								<br>
								{{ $category3[2]->user->area == 3 && $category3[2] != null ? '3rd: '. $category3[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category3[0]->user->area == 4 && $category3[0] != null ? '1st: '. $category3[0]->total_coeficient_score : '' }}
								<br>
								{{ $category3[1]->user->area == 4 && $category3[1] != null ? '2nd: '. $category3[1]->total_coeficient_score : '' }}
								<br>
								{{ $category3[2]->user->area == 4 && $category3[2] != null ? '3rd: '. $category3[2]->total_coeficient_score : '' }}
							</td>
						</tr>
						
						<tr>
							<th class="red"><font color="white">Agent Inbound</font></th>
							<td>
								{{ $category4[0]->user->area == 5 && $category4[0] != null ? '1st: '. $category4[0]->total_coeficient_score : '' }}
								<br>
								{{ $category4[1]->user->area == 5 && $category4[1] != null ? '2nd: '. $category4[1]->total_coeficient_score : '' }}
								<br>
								{{ $category4[2]->user->area == 5 && $category4[2] != null ? '3rd: '. $category4[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category4[0]->user->area == 1 && $category4[0] != null ? '1st: '. $category4[0]->total_coeficient_score : '' }}
								<br>
								{{ $category4[1]->user->area == 1 && $category4[1] != null ? '2nd: '. $category4[1]->total_coeficient_score : '' }}
								<br>
								{{ $category4[2]->user->area == 1 && $category4[2] != null ? '3rd: '. $category4[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category4[0]->user->area == 2 && $category4[0] != null ? '1st: '. $category4[0]->total_coeficient_score : '' }}
								<br>
								{{ $category4[1]->user->area == 2 && $category4[1] != null ? '2nd: '. $category4[1]->total_coeficient_score : '' }}
								<br>
								{{ $category4[2]->user->area == 2 && $category4[2] != null ? '3rd: '. $category4[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category4[0]->user->area == 3 && $category4[0] != null ? '1st: '. $category4[0]->total_coeficient_score : '' }}
								<br>
								{{ $category4[1]->user->area == 3 && $category4[1] != null ? '2nd: '. $category4[1]->total_coeficient_score : '' }}
								<br>
								{{ $category4[2]->user->area == 3 && $category4[2] != null ? '3rd: '. $category4[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category4[0]->user->area == 4 && $category4[0] != null ? '1st: '. $category4[0]->total_coeficient_score : '' }}
								<br>
								{{ $category4[1]->user->area == 4 && $category4[1] != null ? '2nd: '. $category4[1]->total_coeficient_score : '' }}
								<br>
								{{ $category4[2]->user->area == 4 && $category4[2] != null ? '3rd: '. $category4[2]->total_coeficient_score : '' }}
							</td>
						</tr>
						
						
						<tr>
							<th class="red"><font color="white">Agent Outbound</font></th>
							<td>
								{{ $category5[0]->user->area == 5 && $category5[0] != null ? '1st: '. $category5[0]->total_coeficient_score : '' }}
								<br>
								{{ $category5[1]->user->area == 5 && $category5[1] != null ? '2nd: '. $category5[1]->total_coeficient_score : '' }}
								<br>
								{{ $category5[2]->user->area == 5 && $category5[2] != null ? '3rd: '. $category5[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category5[0]->user->area == 1 && $category5[0] != null ? '1st: '. $category5[0]->total_coeficient_score : '' }}
								<br>
								{{ $category5[1]->user->area == 1 && $category5[1] != null ? '2nd: '. $category5[1]->total_coeficient_score : '' }}
								<br>
								{{ $category5[2]->user->area == 1 && $category5[2] != null ? '3rd: '. $category5[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category5[0]->user->area == 2 && $category5[0] != null ? '1st: '. $category5[0]->total_coeficient_score : '' }}
								<br>
								{{ $category5[1]->user->area == 2 && $category5[1] != null ? '2nd: '. $category5[1]->total_coeficient_score : '' }}
								<br>
								{{ $category5[2]->user->area == 2 && $category5[2] != null ? '3rd: '. $category5[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category5[0]->user->area == 3 && $category5[0] != null ? '1st: '. $category5[0]->total_coeficient_score : '' }}
								<br>
								{{ $category5[1]->user->area == 3 && $category5[1] != null ? '2nd: '. $category5[1]->total_coeficient_score : '' }}
								<br>
								{{ $category5[2]->user->area == 3 && $category5[2] != null ? '3rd: '. $category5[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category5[0]->user->area == 4 && $category5[0] != null ? '1st: '. $category5[0]->total_coeficient_score : '' }}
								<br>
								{{ $category5[1]->user->area == 4 && $category5[1] != null ? '2nd: '. $category5[1]->total_coeficient_score : '' }}
								<br>
								{{ $category5[2]->user->area == 4 && $category5[2] != null ? '3rd: '. $category5[2]->total_coeficient_score : '' }}
							</td>
						</tr>
						
						
						<tr>
							<th class="red"><font color="white">Front Office Support (FOS)</font></th>
							<td>
								{{ $category6[0]->user->area == 5 && $category6[0] != null ? '1st: '. $category6[0]->total_coeficient_score : '' }}
								<br>
								{{ $category6[1]->user->area == 5 && $category6[1] != null ? '2nd: '. $category6[1]->total_coeficient_score : '' }}
								<br>
								{{ $category6[2]->user->area == 5 && $category6[2] != null ? '3rd: '. $category6[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category6[0]->user->area == 1 && $category6[0] != null ? '1st: '. $category6[0]->total_coeficient_score : '' }}
								<br>
								{{ $category6[1]->user->area == 1 && $category6[1] != null ? '2nd: '. $category6[1]->total_coeficient_score : '' }}
								<br>
								{{ $category6[2]->user->area == 1 && $category6[2] != null ? '3rd: '. $category6[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category6[0]->user->area == 2 && $category6[0] != null ? '1st: '. $category6[0]->total_coeficient_score : '' }}
								<br>
								{{ $category6[1]->user->area == 2 && $category6[1] != null ? '2nd: '. $category6[1]->total_coeficient_score : '' }}
								<br>
								{{ $category6[2]->user->area == 2 && $category6[2] != null ? '3rd: '. $category6[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category6[0]->user->area == 3 && $category6[0] != null ? '1st: '. $category6[0]->total_coeficient_score : '' }}
								<br>
								{{ $category6[1]->user->area == 3 && $category6[1] != null ? '2nd: '. $category6[1]->total_coeficient_score : '' }}
								<br>
								{{ $category6[2]->user->area == 3 && $category6[2] != null ? '3rd: '. $category6[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category6[0]->user->area == 4 && $category6[0] != null ? '1st: '. $category6[0]->total_coeficient_score : '' }}
								<br>
								{{ $category6[1]->user->area == 4 && $category6[1] != null ? '2nd: '. $category6[1]->total_coeficient_score : '' }}
								<br>
								{{ $category6[2]->user->area == 4 && $category6[2] != null ? '3rd: '. $category6[2]->total_coeficient_score : '' }}
							</td>
						</tr>
						
						
						<tr>
							<th class="red"><font color="white">Complaint Handling Officer (CHO)</font></th>
							<td>
								{{ $category7[0]->user->area == 5 && $category7[0] != null ? '1st: '. $category7[0]->total_coeficient_score : '' }}
								<br>
								{{ $category7[1]->user->area == 5 && $category7[1] != null ? '2nd: '. $category7[1]->total_coeficient_score : '' }}
								<br>
								{{ $category7[2]->user->area == 5 && $category7[2] != null ? '3rd: '. $category7[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category7[0]->user->area == 1 && $category7[0] != null ? '1st: '. $category7[0]->total_coeficient_score : '' }}
								<br>
								{{ $category7[1]->user->area == 1 && $category7[1] != null ? '2nd: '. $category7[1]->total_coeficient_score : '' }}
								<br>
								{{ $category7[2]->user->area == 1 && $category7[2] != null ? '3rd: '. $category7[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category7[0]->user->area == 2 && $category7[0] != null ? '1st: '. $category7[0]->total_coeficient_score : '' }}
								<br>
								{{ $category7[1]->user->area == 2 && $category7[1] != null ? '2nd: '. $category7[1]->total_coeficient_score : '' }}
								<br>
								{{ $category7[2]->user->area == 2 && $category7[2] != null ? '3rd: '. $category7[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category7[0]->user->area == 3 && $category7[0] != null ? '1st: '. $category7[0]->total_coeficient_score : '' }}
								<br>
								{{ $category7[1]->user->area == 3 && $category7[1] != null ? '2nd: '. $category7[1]->total_coeficient_score : '' }}
								<br>
								{{ $category7[2]->user->area == 3 && $category7[2] != null ? '3rd: '. $category7[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category7[0]->user->area == 4 && $category7[0] != null ? '1st: '. $category7[0]->total_coeficient_score : '' }}
								<br>
								{{ $category7[1]->user->area == 4 && $category7[1] != null ? '2nd: '. $category7[1]->total_coeficient_score : '' }}
								<br>
								{{ $category7[2]->user->area == 4 && $category7[2] != null ? '3rd: '. $category7[2]->total_coeficient_score : '' }}
							</td>
						</tr>
						
						
						<tr>
							<th class="red"><font color="white">Back End Support (BES)</font></th>
							<td>
								{{ $category8[0]->user->area == 5 && $category8[0] != null ? '1st: '. $category8[0]->total_coeficient_score : '' }}
								<br>
								{{ $category8[1]->user->area == 5 && $category8[1] != null ? '2nd: '. $category8[1]->total_coeficient_score : '' }}
								<br>
								{{ $category8[2]->user->area == 5 && $category8[2] != null ? '3rd: '. $category8[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category8[0]->user->area == 1 && $category8[0] != null ? '1st: '. $category8[0]->total_coeficient_score : '' }}
								<br>
								{{ $category8[1]->user->area == 1 && $category8[1] != null ? '2nd: '. $category8[1]->total_coeficient_score : '' }}
								<br>
								{{ $category8[2]->user->area == 1 && $category8[2] != null ? '3rd: '. $category8[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category8[0]->user->area == 2 && $category8[0] != null ? '1st: '. $category8[0]->total_coeficient_score : '' }}
								<br>
								{{ $category8[1]->user->area == 2 && $category8[1] != null ? '2nd: '. $category8[1]->total_coeficient_score : '' }}
								<br>
								{{ $category8[2]->user->area == 2 && $category8[2] != null ? '3rd: '. $category8[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category8[0]->user->area == 3 && $category8[0] != null ? '1st: '. $category8[0]->total_coeficient_score : '' }}
								<br>
								{{ $category8[1]->user->area == 3 && $category8[1] != null ? '2nd: '. $category8[1]->total_coeficient_score : '' }}
								<br>
								{{ $category8[2]->user->area == 3 && $category8[2] != null ? '3rd: '. $category8[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category8[0]->user->area == 4 && $category8[0] != null ? '1st: '. $category8[0]->total_coeficient_score : '' }}
								<br>
								{{ $category8[1]->user->area == 4 && $category8[1] != null ? '2nd: '. $category8[1]->total_coeficient_score : '' }}
								<br>
								{{ $category8[2]->user->area == 4 && $category8[2] != null ? '3rd: '. $category8[2]->total_coeficient_score : '' }}
							</td>
						</tr>
						
						
						<tr>
							<th class="red"><font color="white">Team Leader Contact Center and eCare</font></th>
							<td>
								{{ $category9[0]->user->area == 5 && $category9[0] != null ? '1st: '. $category9[0]->total_coeficient_score : '' }}
								<br>
								{{ $category9[1]->user->area == 5 && $category9[1] != null ? '2nd: '. $category9[1]->total_coeficient_score : '' }}
								<br>
								{{ $category9[2]->user->area == 5 && $category9[2] != null ? '3rd: '. $category9[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category9[0]->user->area == 1 && $category9[0] != null ? '1st: '. $category9[0]->total_coeficient_score : '' }}
								<br>
								{{ $category9[1]->user->area == 1 && $category9[1] != null ? '2nd: '. $category9[1]->total_coeficient_score : '' }}
								<br>
								{{ $category9[2]->user->area == 1 && $category9[2] != null ? '3rd: '. $category9[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category9[0]->user->area == 2 && $category9[0] != null ? '1st: '. $category9[0]->total_coeficient_score : '' }}
								<br>
								{{ $category9[1]->user->area == 2 && $category9[1] != null ? '2nd: '. $category9[1]->total_coeficient_score : '' }}
								<br>
								{{ $category9[2]->user->area == 2 && $category9[2] != null ? '3rd: '. $category9[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category9[0]->user->area == 3 && $category9[0] != null ? '1st: '. $category9[0]->total_coeficient_score : '' }}
								<br>
								{{ $category9[1]->user->area == 3 && $category9[1] != null ? '2nd: '. $category9[1]->total_coeficient_score : '' }}
								<br>
								{{ $category9[2]->user->area == 3 && $category9[2] != null ? '3rd: '. $category9[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category9[0]->user->area == 4 && $category9[0] != null ? '1st: '. $category9[0]->total_coeficient_score : '' }}
								<br>
								{{ $category9[1]->user->area == 4 && $category9[1] != null ? '2nd: '. $category9[1]->total_coeficient_score : '' }}
								<br>
								{{ $category9[2]->user->area == 4 && $category9[2] != null ? '3rd: '. $category9[2]->total_coeficient_score : '' }}
							</td>
						</tr>
						
						
						<tr>
							<th class="red"><font color="white">Team Leader GraPARI</font></th>
							<td>
								{{ $category10[0]->user->area == 5 && $category10[0] != null ? '1st: '. $category10[0]->total_coeficient_score : '' }}
								<br>
								{{ $category10[1]->user->area == 5 && $category10[1] != null ? '2nd: '. $category10[1]->total_coeficient_score : '' }}
								<br>
								{{ $category10[2]->user->area == 5 && $category10[2] != null ? '3rd: '. $category10[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category10[0]->user->area == 1 && $category10[0] != null ? '1st: '. $category10[0]->total_coeficient_score : '' }}
								<br>
								{{ $category10[1]->user->area == 1 && $category10[1] != null ? '2nd: '. $category10[1]->total_coeficient_score : '' }}
								<br>
								{{ $category10[2]->user->area == 1 && $category10[2] != null ? '3rd: '. $category10[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category10[0]->user->area == 2 && $category10[0] != null ? '1st: '. $category10[0]->total_coeficient_score : '' }}
								<br>
								{{ $category10[1]->user->area == 2 && $category10[1] != null ? '2nd: '. $category10[1]->total_coeficient_score : '' }}
								<br>
								{{ $category10[2]->user->area == 2 && $category10[2] != null ? '3rd: '. $category10[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category10[0]->user->area == 3 && $category10[0] != null ? '1st: '. $category10[0]->total_coeficient_score : '' }}
								<br>
								{{ $category10[1]->user->area == 3 && $category10[1] != null ? '2nd: '. $category10[1]->total_coeficient_score : '' }}
								<br>
								{{ $category10[2]->user->area == 3 && $category10[2] != null ? '3rd: '. $category10[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category10[0]->user->area == 4 && $category10[0] != null ? '1st: '. $category10[0]->total_coeficient_score : '' }}
								<br>
								{{ $category10[1]->user->area == 4 && $category10[1] != null ? '2nd: '. $category10[1]->total_coeficient_score : '' }}
								<br>
								{{ $category10[2]->user->area == 4 && $category10[2] != null ? '3rd: '. $category10[2]->total_coeficient_score : '' }}
							</td>
						</tr>
						
						
						<tr>
							<th class="red"><font color="white">Spv GraPARI</font></th>
							<td>
								{{ $category11[0]->user->area == 5 && $category11[0] != null ? '1st: '. $category11[0]->total_coeficient_score : '' }}
								<br>
								{{ $category11[1]->user->area == 5 && $category11[1] != null ? '2nd: '. $category11[1]->total_coeficient_score : '' }}
								<br>
								{{ $category11[2]->user->area == 5 && $category11[2] != null ? '3rd: '. $category11[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category11[0]->user->area == 1 && $category11[0] != null ? '1st: '. $category11[0]->total_coeficient_score : '' }}
								<br>
								{{ $category11[1]->user->area == 1 && $category11[1] != null ? '2nd: '. $category11[1]->total_coeficient_score : '' }}
								<br>
								{{ $category11[2]->user->area == 1 && $category11[2] != null ? '3rd: '. $category11[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category11[0]->user->area == 2 && $category11[0] != null ? '1st: '. $category11[0]->total_coeficient_score : '' }}
								<br>
								{{ $category11[1]->user->area == 2 && $category11[1] != null ? '2nd: '. $category11[1]->total_coeficient_score : '' }}
								<br>
								{{ $category11[2]->user->area == 2 && $category11[2] != null ? '3rd: '. $category11[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category11[0]->user->area == 3 && $category11[0] != null ? '1st: '. $category11[0]->total_coeficient_score : '' }}
								<br>
								{{ $category11[1]->user->area == 3 && $category11[1] != null ? '2nd: '. $category11[1]->total_coeficient_score : '' }}
								<br>
								{{ $category11[2]->user->area == 3 && $category11[2] != null ? '3rd: '. $category11[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category11[0]->user->area == 4 && $category11[0] != null ? '1st: '. $category11[0]->total_coeficient_score : '' }}
								<br>
								{{ $category11[1]->user->area == 4 && $category11[1] != null ? '2nd: '. $category11[1]->total_coeficient_score : '' }}
								<br>
								{{ $category11[2]->user->area == 4 && $category11[2] != null ? '3rd: '. $category11[2]->total_coeficient_score : '' }}
							</td>
						</tr>
						
						
						<tr>
							<th class="red"><font color="white">Spv GraPARI Mitra</font></th>
							<td>
								{{ $category12[0]->user->area == 5 && $category12[0] != null ? '1st: '. $category12[0]->total_coeficient_score : '' }}
								<br>
								{{ $category12[1]->user->area == 5 && $category12[1] != null ? '2nd: '. $category12[1]->total_coeficient_score : '' }}
								<br>
								{{ $category12[2]->user->area == 5 && $category12[2] != null ? '3rd: '. $category12[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category12[0]->user->area == 1 && $category12[0] != null ? '1st: '. $category12[0]->total_coeficient_score : '' }}
								<br>
								{{ $category12[1]->user->area == 1 && $category12[1] != null ? '2nd: '. $category12[1]->total_coeficient_score : '' }}
								<br>
								{{ $category12[2]->user->area == 1 && $category12[2] != null ? '3rd: '. $category12[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category12[0]->user->area == 2 && $category12[0] != null ? '1st: '. $category12[0]->total_coeficient_score : '' }}
								<br>
								{{ $category12[1]->user->area == 2 && $category12[1] != null ? '2nd: '. $category12[1]->total_coeficient_score : '' }}
								<br>
								{{ $category12[2]->user->area == 2 && $category12[2] != null ? '3rd: '. $category12[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category12[0]->user->area == 3 && $category12[0] != null ? '1st: '. $category12[0]->total_coeficient_score : '' }}
								<br>
								{{ $category12[1]->user->area == 3 && $category12[1] != null ? '2nd: '. $category12[1]->total_coeficient_score : '' }}
								<br>
								{{ $category12[2]->user->area == 3 && $category12[2] != null ? '3rd: '. $category12[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category12[0]->user->area == 4 && $category12[0] != null ? '1st: '. $category12[0]->total_coeficient_score : '' }}
								<br>
								{{ $category12[1]->user->area == 4 && $category12[1] != null ? '2nd: '. $category12[1]->total_coeficient_score : '' }}
								<br>
								{{ $category12[2]->user->area == 4 && $category12[2] != null ? '3rd: '. $category12[2]->total_coeficient_score : '' }}
							</td>
						</tr>
						

						<tr>
							<th class="red"><font color="white">Spv BES</font></th>
							<td>
								{{ $category13[0]->user->area == 5 && $category13[0] != null ? '1st: '. $category13[0]->total_coeficient_score : '' }}
								<br>
								{{ $category13[1]->user->area == 5 && $category13[1] != null ? '2nd: '. $category13[1]->total_coeficient_score : '' }}
								<br>
								{{ $category13[2]->user->area == 5 && $category13[2] != null ? '3rd: '. $category13[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category13[0]->user->area == 1 && $category13[0] != null ? '1st: '. $category13[0]->total_coeficient_score : '' }}
								<br>
								{{ $category13[1]->user->area == 1 && $category13[1] != null ? '2nd: '. $category13[1]->total_coeficient_score : '' }}
								<br>
								{{ $category13[2]->user->area == 1 && $category13[2] != null ? '3rd: '. $category13[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category13[0]->user->area == 2 && $category13[0] != null ? '1st: '. $category13[0]->total_coeficient_score : '' }}
								<br>
								{{ $category13[1]->user->area == 2 && $category13[1] != null ? '2nd: '. $category13[1]->total_coeficient_score : '' }}
								<br>
								{{ $category13[2]->user->area == 2 && $category13[2] != null ? '3rd: '. $category13[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category13[0]->user->area == 3 && $category13[0] != null ? '1st: '. $category13[0]->total_coeficient_score : '' }}
								<br>
								{{ $category13[1]->user->area == 3 && $category13[1] != null ? '2nd: '. $category13[1]->total_coeficient_score : '' }}
								<br>
								{{ $category13[2]->user->area == 3 && $category13[2] != null ? '3rd: '. $category13[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category13[0]->user->area == 4 && $category13[0] != null ? '1st: '. $category13[0]->total_coeficient_score : '' }}
								<br>
								{{ $category13[1]->user->area == 4 && $category13[1] != null ? '2nd: '. $category13[1]->total_coeficient_score : '' }}
								<br>
								{{ $category13[2]->user->area == 4 && $category13[2] != null ? '3rd: '. $category13[2]->total_coeficient_score : '' }}
							</td>
						</tr>
						

						<tr>
							<th class="red"><font color="white">Spv Contact Center and eCare</font></th>
							<td>
								{{ $category14[0]->user->area == 5 && $category14[0] != null ? '1st: '. $category14[0]->total_coeficient_score : '' }}
								<br>
								{{ $category14[1]->user->area == 5 && $category14[1] != null ? '2nd: '. $category14[1]->total_coeficient_score : '' }}
								<br>
								{{ $category14[2]->user->area == 5 && $category14[2] != null ? '3rd: '. $category14[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category14[0]->user->area == 1 && $category14[0] != null ? '1st: '. $category14[0]->total_coeficient_score : '' }}
								<br>
								{{ $category14[1]->user->area == 1 && $category14[1] != null ? '2nd: '. $category14[1]->total_coeficient_score : '' }}
								<br>
								{{ $category14[2]->user->area == 1 && $category14[2] != null ? '3rd: '. $category14[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category14[0]->user->area == 2 && $category14[0] != null ? '1st: '. $category14[0]->total_coeficient_score : '' }}
								<br>
								{{ $category14[1]->user->area == 2 && $category14[1] != null ? '2nd: '. $category14[1]->total_coeficient_score : '' }}
								<br>
								{{ $category14[2]->user->area == 2 && $category14[2] != null ? '3rd: '. $category14[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category14[0]->user->area == 3 && $category14[0] != null ? '1st: '. $category14[0]->total_coeficient_score : '' }}
								<br>
								{{ $category14[1]->user->area == 3 && $category14[1] != null ? '2nd: '. $category14[1]->total_coeficient_score : '' }}
								<br>
								{{ $category14[2]->user->area == 3 && $category14[2] != null ? '3rd: '. $category14[2]->total_coeficient_score : '' }}
							</td>
							<td>
								{{ $category14[0]->user->area == 4 && $category14[0] != null ? '1st: '. $category14[0]->total_coeficient_score : '' }}
								<br>
								{{ $category14[1]->user->area == 4 && $category14[1] != null ? '2nd: '. $category14[1]->total_coeficient_score : '' }}
								<br>
								{{ $category14[2]->user->area == 4 && $category14[2] != null ? '3rd: '. $category14[2]->total_coeficient_score : '' }}
							</td>
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
