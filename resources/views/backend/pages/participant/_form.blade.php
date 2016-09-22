{!! Form::hidden('participant_id', $participant->id) !!}
{!! Form::hidden('participant_name', $participant->name) !!}
{!! Form::hidden('participant_area', $participant->area) !!}
{!! Form::hidden('jury_id', Auth::user()->id) !!}
{!! Form::hidden('category_id', $participant->category_id) !!}

<div class="form-group{{ $errors->has('room_id') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Room</label>
    <div class="col-md-4">
        {!! Form::text('room_id', null, ['class'=>'form-control','placeholder'=>'Room']) !!}
    </div>
    @if($errors->has('room_id'))
        <span class="help-block">
            <strong>{{ $errors->first('room_id') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('notes') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Notes</label>
    <div class="col-md-6">
        {!! Form::textarea('notes', null, ['class'=>'form-control','placeholder'=>'Notes','rows'=>'4']) !!}
    </div>
    @if($errors->has('notes'))
        <span class="help-block">
            <strong>{{ $errors->first('notes') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('session_id') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Session</label>
    <div class="col-md-4">
        {!!Form::select('session_id', [''=>'']+App\Session::pluck('name','id')->all(), null, ['class'=>'select2_single form-control']) !!}
    </div>
    @if($errors->has('session_id'))
        <span class="help-block">
            <strong>{{ $errors->first('session_id') }}</strong>
        </span>
    @endif
</div>


<div class="form-group{{ $errors->has('presentation_material') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Presentation Material</label>
    <div class="col-md-2">
        {!!Form::select('presentation_material', ['0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'], null, ['class'=>'select2_single form-control']) !!}
    </div>
    @if($errors->has('presentation_material'))
        <span class="help-block">
            <strong>{{ $errors->first('presentation_material') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('communication_skill') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Communication Skill</label>
    <div class="col-md-2">
        {!!Form::select('communication_skill', ['0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'], null, ['class'=>'select2_single form-control']) !!}
    </div>
    @if($errors->has('communication_skill'))
        <span class="help-block">
            <strong>{{ $errors->first('communication_skill') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('achievement') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Achievement</label>
    <div class="col-md-2">
        {!!Form::select('achievement', ['0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'], null, ['class'=>'select2_single form-control']) !!}
    </div>
    @if($errors->has('achievement'))
        <span class="help-block">
            <strong>{{ $errors->first('achievement') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('personal_value') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Personal Value</label>
    <div class="col-md-2">
        {!!Form::select('personal_value', ['0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'], null, ['class'=>'select2_single form-control']) !!}
    </div>
    @if($errors->has('personal_value'))
        <span class="help-block">
            <strong>{{ $errors->first('personal_value') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('customer_care_knowledge') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Customer Care Knowledge</label>
    <div class="col-md-2">
        {!!Form::select('customer_care_knowledge', ['0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'], null, ['class'=>'select2_single form-control']) !!}
    </div>
    @if($errors->has('customer_care_knowledge'))
        <span class="help-block">
            <strong>{{ $errors->first('customer_care_knowledge') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('solution_skill') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Solution Skill</label>
    <div class="col-md-2">
        {!!Form::select('solution_skill', ['0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'], null, ['class'=>'select2_single form-control']) !!}
    </div>
    @if($errors->has('solution_skill'))
        <span class="help-block">
            <strong>{{ $errors->first('solution_skill') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('inspirational_story') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Inspirational Story</label>
    <div class="col-md-2">
        {!!Form::select('inspirational_story', ['0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'], null, ['class'=>'select2_single form-control']) !!}
    </div>
    @if($errors->has('inspirational_story'))
        <span class="help-block">
            <strong>{{ $errors->first('inspirational_story') }}</strong>
        </span>
    @endif
</div>

<hr>

<div class="form-group">
	<center>
        <button type="submit" class="btn btn-primary">{{ isset($masterData) ? 'Edit Data' : 'Scoring' }}</button> 
        @if(isset($masterData)) | 
            <a href="{{ url('master-data') }}" class="btn btn-primary">Kembali</a>
        @endif
    </center>
</div>