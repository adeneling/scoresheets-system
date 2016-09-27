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
					    <div class="col-md-4">
					        {!!Form::select('q', [''=>'']+App\Category::pluck('name','id')->all(), null, ['onchange'=>'this.form.submit()','class'=>'select2_single form-control']) !!}
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
							<img class="img-responsive" src="{{ asset('img/' . ($participant->picture != null ? $participant->picture : 'picture.png' )) }}" alt="Avatar" title="Participant">
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
