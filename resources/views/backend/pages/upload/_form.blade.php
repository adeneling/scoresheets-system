<div class="form-group{{ $errors->has('presentation_file') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">File Presentasi</label>
    <div class="col-md-2">
        {!! Form::file('presentation_file', null, ['class'=>'form-control']) !!}
    </div>
    @if (isset($user) && $user->presentation_file)
    <p>
        {!! Html::image(asset('files/'.$user->presentation_file), null, ['class'=>'img-rounded img-responsive']) !!}
    </p>
    @endif
    @if($errors->has('presentation_file'))
        <span class="help-block">
            <strong>{{ $errors->first('presentation_file') }}</strong>
        </span>
    @endif
</div>


<hr>

<div class="form-group">
	<center>
        <button type="submit" class="btn btn-danger">{{ isset($user) ? 'Upload Data' : 'Upload Data'}}</button> 
        @if(isset($user))
        | <a href="{{ url('/home') }}" class="btn btn-primary">Kembali</a>
        @endif
    </center>
</div>