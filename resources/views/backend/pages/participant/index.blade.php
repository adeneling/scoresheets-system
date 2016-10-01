@extends('backend.layouts.app')

@section('title')Participant
@stop

@section('content')
<!-- page content -->

<div class="row">
	<div class="col-md-12">
		<div class="x_panel">
			<div class="x_content">
				<!-- start form for validation -->
				{!! Form::open( ['url' =>'participant','method' =>'get','role'=>'form','class'=>'form-horizontal form-label-left'])!!}
					<div class="form-group{{ $errors->has('q') ? ' has-error' : '' }}">
					    <label class="control-label col-md-1">Category</label>
					    <?php $handle = explode(',', Auth::user()->category_handled)?>
					    <div class="col-md-4">
					    	<select class="form-control" name="q" onchange="this.form.submit()">
					    			<option>Please select the category</option>
					    		@if($handle[0]==1)
	                            	<option value="1">CS GraPARI</option>
	                            @endif
	                            @if($handle[1]==2)
	                            	<option value="2">CS GraPARI Mitra</option>
	                            @endif
	                            @if($handle[2]==3)
	                            	<option value="3">eCare Officer</option>
	                            @endif
	                            @if($handle[3]==4)
	                            	<option value="4">Agent Inbound</option>
	                            @endif
	                            @if($handle[4]==5)
	                            	<option value="5">Agent Outbound</option>
	                            @endif
	                            @if($handle[5]==6)
	                            	<option value="6">Front Office Support (FOS)</option>
	                            @endif
	                            @if($handle[6]==7)
	                            	<option value="7">Complaint Handling Officer (CHO)</option>
	                            @endif
	                            @if($handle[7]==8)
	                            	<option value="8">Back End Support (BES)</option>
	                            @endif
	                            @if($handle[8]==9)
	                            	<option value="9">Team Leader Contact Center and eCare</option>
	                            @endif
	                            @if($handle[9]==10)
	                            	<option value="10">Team Leader GraPARI</option>
	                            @endif
	                            @if($handle[10]==11)
	                            	<option value="11">Spv GraPARI</option>
	                            @endif
	                            @if($handle[11]==12)
	                            	<option value="12">Spv GraPARI Mitra</option>
	                            @endif
	                            @if($handle[12]==13)
	                            	<option value="13">Spv BES</option>
	                            @endif
	                            @if($handle[13]==14)
	                            	<option value="14">Spv Contact Center and eCare</option>
	                            @endif
	                        </select>					        
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

<div class="clearfix"></div>

<div class="row">
	<div class="col-md-12">
		<div class="x_panel">
			<div class="x_title">
				<h2><font color="red">Participant {{ isset($category) ? '- '. $category->name : '-' }}</font></h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				@foreach($participants as $participant)
				<a href="{{ route('participant.edit', encrypt($participant->id))}}">
					<div class="col-md-3">
						<center>
							<img class="img-responsive" height="200" width="200" src="{{ asset('img/' . ($participant->picture != null ? $participant->picture : 'picture.png' )) }}" alt="Avatar" title="Participant">
						</center>
						<center><h5>{{ $participant->name }}</h5></center>
						<ul class="list-unstyled user_data">
							<li><center>Area: {{ $participant->area }}</center></li>
							<li><center>Region: {{ $participant->region }}</center></li>
						</ul>
					</div>
				</a>
				@endforeach
				{{-- $participants->appends(compact('q'))->links() --}} 
			</div>
		</div>
	</div>
</div>

<!-- /page content -->
@endsection
