<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Title</label>
    <div class="col-md-7">
        {!! Form::text('title', null, ['class'=>'form-control','placeholder'=>'Title']) !!}
    </div>
    @if($errors->has('title'))
        <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Message</label>
    <div class="col-md-7">
        {!! Form::textarea('message', null, ['class'=>'form-control','placeholder'=>'Message','rows'=>'4']) !!}
    </div>
    @if($errors->has('message'))
        <span class="help-block">
            <strong>{{ $errors->first('message') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    <center>
        <button type="submit" class="btn btn-danger">SUBMIT</button> 
    </center>
</div>