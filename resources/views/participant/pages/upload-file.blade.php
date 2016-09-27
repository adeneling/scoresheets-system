@extends('participant.layouts.app')

@section('title')Upload File
@stop
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">
            	{!! Form::model($user, ['route' => ['bestcs-upload.update', $user],'method' =>'put', 'files' => true,'role'=>'form','class'=>'form-horizontal form-label-left'])!!}
                    {!! csrf_field() !!}
        		<center>
        			{!! Form::file('presentation_file', null, ['class'=>'btn btn-danger btn-lg']) !!}
        			<br>
        			<button type="submit" class="btn btn-danger">SUBMIT</button>
        		</center>
        		{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop