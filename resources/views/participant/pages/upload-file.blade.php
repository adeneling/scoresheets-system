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
                        <div class="form-group{{ $errors->has('presentation_file') ? ' has-error' : '' }}">
                            {!! Form::file('presentation_file', null, ['class'=>'btn btn-danger btn-lg']) !!}
                        </div>
                            @if($errors->has('presentation_file'))
                                <span class="help-block">
                                    <h1><strong><font color="red">{{ $errors->first('presentation_file') }}</font></strong></h1>
                                </span>
                            @endif
                    </center>
                    <center>
                        <button type="submit" class="btn btn-danger">SUBMIT</button>
                    </center>
                    

                    
        		{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop