<div class="form-group{{ $errors->has('booking_id') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Booking Code</label>
    <div class="col-md-2">
        {!! Form::text('booking_id', null, ['class'=>'form-control','placeholder'=>'Booking Code']) !!}
    </div>
    @if($errors->has('booking_id'))
        <span class="help-block">
            <strong>{{ $errors->first('booking_id') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('detail') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Detail</label>
    <div class="col-md-6">
        {!! Form::textarea('detail', null, ['class'=>'form-control','placeholder'=>'Detail','rows'=>'4']) !!}
    </div>
    @if($errors->has('detail'))
        <span class="help-block">
            <strong>{{ $errors->first('detail') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">URL</label>
    <div class="col-md-5">
        {!! Form::textarea('url', null, ['class'=>'form-control','placeholder'=>'URL', 'rows'=>'3']) !!}
    </div>
    @if($errors->has('url'))
        <span class="help-block">
            <strong>{{ $errors->first('url') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    <center>
        <button type="submit" class="btn btn-danger">SUBMIT</button> 
    </center>
</div>