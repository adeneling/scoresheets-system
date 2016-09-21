<div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Category Name</label>
    <div class="col-md-4">
        {!!Form::select('category_id', [''=>'']+App\Category::pluck('name','id')->all(), null, ['class'=>'select2_single form-control']) !!}
    </div>
    @if($errors->has('category_id'))
        <span class="help-block">
            <strong>{{ $errors->first('category_id') }}</strong>
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

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Name</label>
    <div class="col-md-4">
        {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'name']) !!}
    </div>
    @if($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('unit_type') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Unit type</label>
    <div class="col-md-3">
        {!! Form::text('unit_type', null, ['class'=>'form-control','placeholder'=>'Unit Type']) !!}
    </div>
    @if($errors->has('unit_type'))
        <span class="help-block">
            <strong>{{ $errors->first('unit_type') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('unit_name') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Unit name</label>
    <div class="col-md-3">
        {!! Form::text('unit_name', null, ['class'=>'form-control','placeholder'=>'Unit name']) !!}
    </div>
    @if($errors->has('unit_name'))
        <span class="help-block">
            <strong>{{ $errors->first('unit_name') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Gender</label>
    <div class="col-md-2">
        {!!Form::select('gender', ['Male'=>'Male','Female'=>'Female'], null, ['class'=>'select2_single form-control']) !!}
    </div>
    @if($errors->has('gender'))
        <span class="help-block">
            <strong>{{ $errors->first('gender') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('room_code') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Room code</label>
    <div class="col-md-2">
        {!! Form::text('room_code', null, ['class'=>'form-control','placeholder'=>'Room code']) !!}
    </div>
    @if($errors->has('room_code'))
        <span class="help-block">
            <strong>{{ $errors->first('room_code') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Region</label>
    <div class="col-md-3">
        {!! Form::text('region', null, ['class'=>'form-control','placeholder'=>'Region']) !!}
    </div>
    @if($errors->has('region'))
        <span class="help-block">
            <strong>{{ $errors->first('region') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Area</label>
    <div class="col-md-2">
        {!! Form::text('area', null, ['class'=>'form-control','placeholder'=>'Area']) !!}
    </div>
    @if($errors->has('area'))
        <span class="help-block">
            <strong>{{ $errors->first('area') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('size_poloshirt') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Shirt size</label>
    <div class="col-md-2">
        {!!Form::select('size_poloshirt', ['S'=>'S','M'=>'M','L'=>'L','XL'=>'XL','XXL'=>'XXL'], null, ['class'=>'select2_single form-control']) !!}
    </div>
    @if($errors->has('size_poloshirt'))
        <span class="help-block">
            <strong>{{ $errors->first('size_poloshirt') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('birth_place') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Birth place</label>
    <div class="col-md-2">
        {!! Form::text('birth_place', null, ['class'=>'form-control','placeholder'=>'Birth place']) !!}
    </div>
    @if($errors->has('birth_place'))
        <span class="help-block">
            <strong>{{ $errors->first('birth_place') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Birthday</label>
    <div class="col-md-3">
        {!! Form::date('birthday', null, ['class'=>'form-control','placeholder'=>'Birthday']) !!}
    </div>
    @if($errors->has('birthday'))
        <span class="help-block">
            <strong>{{ $errors->first('birthday') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('join_date') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Join date</label>
    <div class="col-md-3">
        {!! Form::date('join_date', null, ['class'=>'form-control','placeholder'=>'Join date telkomsel']) !!}
    </div>
    @if($errors->has('join_date'))
        <span class="help-block">
            <strong>{{ $errors->first('join_date') }}</strong>
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