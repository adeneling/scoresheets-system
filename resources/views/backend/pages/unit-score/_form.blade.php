<div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Category</label>
    <div class="col-md-5">
        {!!Form::select('category_id', [''=>'']+App\UnitCategory::pluck('name','id')->all(), null, ['class'=>'select2_single form-control','required']) !!}
    </div>
    @if($errors->has('category_id'))
        <span class="help-block">
            <strong>{{ $errors->first('category_id') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Unit Type</label>
    <div class="col-md-4">
        {!! Form::text('type', null, ['class'=>'form-control','placeholder'=>'Unit type']) !!}
    </div>
    @if($errors->has('type'))
        <span class="help-block">
            <strong>{{ $errors->first('type') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Area</label>
    <div class="col-md-2">
        {!!Form::select('area', ['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'Headquarter'], null, ['class'=>'form-control','required']) !!}
    </div>
    @if($errors->has('area'))
        <span class="help-block">
            <strong>{{ $errors->first('area') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Location</label>
    <div class="col-md-4">
        {!! Form::text('location', null, ['class'=>'form-control','placeholder'=>'Location']) !!}
    </div>
    @if($errors->has('location'))
        <span class="help-block">
            <strong>{{ $errors->first('location') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('total_score') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Score</label>
    <div class="col-md-2">
        {!! Form::number('total_score', null, ['class'=>'form-control','placeholder'=>'Score','step'=>'any', 'required']) !!}
    </div>
    @if($errors->has('total_score'))
        <span class="help-block">
            <strong>{{ $errors->first('total_score') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('notes') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Notes</label>
    <div class="col-md-5">
        {!! Form::textarea('notes', null, ['class'=>'form-control','placeholder'=>'Notes','rows'=>'5']) !!}
    </div>
    @if($errors->has('notes'))
        <span class="help-block">
            <strong>{{ $errors->first('notes') }}</strong>
        </span>
    @endif
</div>

<hr>

<div class="form-group">
	<center>
        <button type="submit" class="btn btn-primary">{{ isset($unit) ? 'Edit Data' : 'Create' }}</button> 
        @if(isset($unit)) | 
            <a href="{{ url('unit-score') }}" class="btn btn-primary">Kembali</a>
        @endif
    </center>
</div>