<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Name</label>
    <div class="col-md-4">
        {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Enter your name']) !!}
    </div>
    @if($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('nik') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">NIK</label>
    <div class="col-md-2">
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
    <div class="col-md-4">
        {!! Form::text('email', null, ['class'=>'form-control','placeholder'=>'E-Mail']) !!}
    </div>
    @if($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Password</label>
    <div class="col-md-4">
        {!! Form::password('password', ['class'=>'form-control','placeholder'=>'Enter your password']) !!}
    </div>
    @if($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Role</label>
    <div class="col-md-4">
        {!!Form::select('role', [''=>'']+App\Role::pluck('name','id')->all(), null, ['class'=>'select2_single form-control']) !!}
    </div>
    @if($errors->has('role'))
        <span class="help-block">
            <strong>{{ $errors->first('role') }}</strong>
        </span>
    @endif
</div>

<hr>

<div class="form-group">
	<center>
        <button type="submit" class="btn btn-danger">{{ isset($masterData) ? 'Edit Data' : 'Create' }}</button> 
        @if(isset($masterData)) | 
            <a href="{{ url('master-data') }}" class="btn btn-primary">Kembali</a>
        @endif
    </center>
</div>