<div class="form-group{{ $errors->has('nik') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">NIK</label>
    <div class="col-md-3">
        {!! Form::text('nik', null, ['class'=>'form-control','placeholder'=>'NIK']) !!}
    </div>
    @if($errors->has('nik'))
        <span class="help-block">
            <strong>{{ $errors->first('nik') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">E-Mail</label>
    <div class="col-md-5">
        {!! Form::text('email', null, ['class'=>'form-control','placeholder'=>'E-Mail']) !!}
    </div>
    @if($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>

<hr>

<div class="form-group">
	<center>
        <button type="submit" class="btn btn-danger">{{ isset($user) ? 'Edit' : 'Check ID'}}</button> 
        @if(isset($user))
        | <a href="{{ url('/') }}" class="btn btn-primary">Kembali</a>
        @endif
    </center>
</div>