@extends('backend.layouts.app')

@section('title')Scoring Participant
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
							<img class="img-responsive avatar-view" src="{{ asset('img/' . ($participant->picture != null ? $participant->picture : 'picture.png' )) }}" alt="Avatar" title="Change the avatar">
						</div>
						<h3><center>{{ $participant->name }}</center></h3>
						<center>
							@if($participant->presentation_file != null)
                                <a href="{{ asset('files/'. $participant->presentation_file) }}" class="btn btn-danger" target="_blank">Presentation File</a>
                            @else
                                <a href="#" class="btn btn-primary" >Presentasi belum ada</a>
                            @endif
                        </center>
					</div>
				</div>
				<div class="col-md-2">
					<ul class="list-unstyled user_data">
						<li></li>
						<li>City: {{ $participant->city }}</li>
						<li>Category: {{ $participant->category->name }}</li>
					</ul>
					<br />
				</div>
				<div class="col-md-2">
					<ul class="list-unstyled user_data">
						<li>Area: {{ $participant->area == 5 ? 'Headquarter' : $participant->area}}</li>
						<li>Region: {{ $participant->region }}</li>
						<li>About Me: {{ $participant->about_me }}</li>
						<li>Work Location: {{ $participant->work_location }}</li>
						<li>Region: {{ $participant->notes }}</li>
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
				<table class="table">
					<thead>
						<tr>
							<th width="50%">ASPEK</th>
							<th width="3%">BOBOT</th>
							<th width="47%">NILAI</th>
						</tr>
					</thead>
					<tbody>
						{!! Form::model($participant, ['route' => ['participant.update', $participant],'method' =>'put','role'=>'form','class'=>'form-horizontal form-label-left'])!!}
		        			{!! csrf_field() !!}
							@include('backend.pages.participant._form')
						{!! Form::close() !!}
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection