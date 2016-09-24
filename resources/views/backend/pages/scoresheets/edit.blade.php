@extends('backend.layouts.app')

@section('title')Scoring
@stop

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Participant</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="col-md-2 profile_left">
					<div class="profile_img">
						<div id="crop-avatar">
							<!-- Current avatar -->
							<img class="img-responsive avatar-view" src="{{ asset('backend/images/picture.png') }}" alt="Avatar" title="Change the avatar">
						</div>
						<h3><center>{{ $scoresheet->user->name }}</center></h3>
						<center><a href="#" class="btn btn-danger" target="_blank">Presentation file</a></center>
					</div>
				</div>
				<div class="col-md-2">
					<ul class="list-unstyled user_data">
						<li>City: {{ $scoresheet->user->city }}</li>
						<li>Category: {{ $scoresheet->user->category->name }}</li>
					</ul>
					<br/>
				</div>
				<div class="col-md-2">
					<ul class="list-unstyled user_data">
						<li>Area: {{ $scoresheet->user->area }}</li>
						<li>Region: {{ $scoresheet->user->region }}</li>
						<li>About Me: {{ $scoresheet->user->about_me }}</li>
						<li>Work Location: {{ $scoresheet->user->work_location }}</li>
						<li>Region: {{ $scoresheet->user->notes }}</li>
					</ul>
					<br/>
				</div>
				<div class="col-md-6">
					<div class="profile_title">
						<div class="col-md-12">
							<h2>Kriteria Penilaian</h2>
							<table style="background-color:rgba(0, 0, 0, 0);">
				                <thead>
				                    <tr>
				                        <td width="13%" class="text-right"><b>9 - 10 </b></td>
				                        <td width="2%" class="text-center">:</td>
				                        <td>SANGAT BAIK - Extraordinary</td>
				                    </tr>
				                    <tr>
				                        <td class="text-right"><b>7 - 8 </b></td>
				                        <td class="text-center">:</td>
				                        <td>BAIK - Lebih dari 3 Parameter terpenuhi</td>
				                    </tr>
				                    <tr>
				                        <td class="text-right"><b>6 </b></td>
				                        <td class="text-center">:</td>
				                        <td>BAIK - 3 Parameter terpenuhi</td>
				                    </tr>
				                    <tr>
				                        <td class="text-right"><b>4 - 5 </b></td>
				                        <td class="text-center">:</td>
				                        <td>BAIK - Hanya 2 Parameter terpenuhi</td>
				                    </tr>
				                    <tr>
				                        <td class="text-right"><b>1 - 3 </b></td>
				                        <td class="text-center">:</td>
				                        <td>TIDAK MEMENUHI SYARAT - Hanya 1 Parameter terpenuhi</td>
				                    </tr>
				                </thead>
				            </table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Scoring</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table class="table table-hover">
					<thead>
						<tr>
							<th width="50%">ASPEK</th>
							<th>BOBOT</th>
							<th width="10%">NILAI</th>
							<th>KETERANGAN</th>
						</tr>
					</thead>
					<tbody>
						{!! Form::model($scoresheet, ['route' => ['scoresheets.update', $scoresheet],'method' =>'put','role'=>'form','class'=>'form-horizontal form-label-left'])!!}
		        			{!! csrf_field() !!}
							@include('backend.pages.scoresheets._form')
						{!! Form::close() !!}
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
