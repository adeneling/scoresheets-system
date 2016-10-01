@include('backend.pages.judges._style')
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label class="control-label col-md-4">Full Name</label>
    <div class="col-md-4">
        {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Enter your name']) !!}
    </div>
    @if($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
    <label class="control-label col-md-4">Profile Picture</label>
    <div class="col-md-2">
        {!! Form::file('picture', null, ['class'=>'form-control']) !!}
    </div>
    @if($errors->has('picture'))
        <span class="help-block">
            <strong>{{ $errors->first('picture') }}</strong>
        </span>
    @endif
</div>


<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label class="control-label col-md-4">E-Mail</label>
    <div class="col-md-4">
        {!! Form::text('email', null, ['class'=>'form-control','placeholder'=>'E-Mail']) !!}
    </div>
    @if($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>

@if(!isset($user))
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label class="control-label col-md-4">Password</label>
        <div class="col-md-4">
            {!! Form::password('password', ['class'=>'form-control','placeholder'=>'Enter your password']) !!}
        </div>
        @if($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
@endif

<div class="form-group{{ $errors->has('about_me') ? ' has-error' : '' }}">
    <label class="control-label col-md-4">About Me</label>
    <div class="col-md-6">
        {!! Form::textarea('about_me', null, ['class'=>'form-control','placeholder'=>'About Me','rows'=>'3']) !!}
    </div>
    @if($errors->has('about_me'))
        <span class="help-block">
            <strong>{{ $errors->first('about_me') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('category_1') ? ' has-error' : '' }}">
    <label class="control-label col-md-4">Category 1 - CS GraPARI</label>
    <div class="col-md-4">
        False {{ Form::radio('category_1', 0, true, ['class' => 'option-input radio']) }}
        True {{ Form::radio('category_1', 1, null, ['class' => 'option-input radio']) }}
    </div>
    @if($errors->has('category_1'))
        <span class="help-block">
            <strong>{{ $errors->first('category_1') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('category_2') ? ' has-error' : '' }}">
    <label class="control-label col-md-4">Category 2 - CS GraPARI Mitra</label>
    <div class="col-md-4">
        False {{ Form::radio('category_2', 0, true, ['class' => 'option-input radio']) }}
        True {{ Form::radio('category_2', 2, null, ['class' => 'option-input radio']) }}
    </div>
    @if($errors->has('category_2'))
        <span class="help-block">
            <strong>{{ $errors->first('category_2') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('category_3') ? ' has-error' : '' }}">
    <label class="control-label col-md-4">Category 3 - eCare Officer</label>
    <div class="col-md-4">
        False {{ Form::radio('category_3', 0, true, ['class' => 'option-input radio']) }}
        True {{ Form::radio('category_3', 3, null, ['class' => 'option-input radio']) }}
    </div>
    @if($errors->has('category_3'))
        <span class="help-block">
            <strong>{{ $errors->first('category_3') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('category_4') ? ' has-error' : '' }}">
    <label class="control-label col-md-4">Category 4 - Agent Inbound</label>
    <div class="col-md-4">
        False {{ Form::radio('category_4', 0, true, ['class' => 'option-input radio']) }}
        True {{ Form::radio('category_4', 4, null, ['class' => 'option-input radio']) }}
    </div>
    @if($errors->has('category_4'))
        <span class="help-block">
            <strong>{{ $errors->first('category_4') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('category_5') ? ' has-error' : '' }}">
    <label class="control-label col-md-4">Category 5 - Agent Outbound</label>
    <div class="col-md-4">
        False {{ Form::radio('category_5', 0, true, ['class' => 'option-input radio']) }}
        True {{ Form::radio('category_5', 5, null, ['class' => 'option-input radio']) }}
    </div>
    @if($errors->has('category_5'))
        <span class="help-block">
            <strong>{{ $errors->first('category_5') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('category_6') ? ' has-error' : '' }}">
    <label class="control-label col-md-4">Category 6 - Front Office Support (FOS)</label>
    <div class="col-md-4">
        False {{ Form::radio('category_6', 0, true, ['class' => 'option-input radio']) }}
        True {{ Form::radio('category_6', 6, null, ['class' => 'option-input radio']) }}
    </div>
    @if($errors->has('category_6'))
        <span class="help-block">
            <strong>{{ $errors->first('category_6') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('category_7') ? ' has-error' : '' }}">
    <label class="control-label col-md-4">Category 7 - Complaint Handling Officer (CHO)</label>
    <div class="col-md-4">
        False {{ Form::radio('category_7', 0, true, ['class' => 'option-input radio']) }}
        True {{ Form::radio('category_7', 7, null, ['class' => 'option-input radio']) }}
    </div>
    @if($errors->has('category_7'))
        <span class="help-block">
            <strong>{{ $errors->first('category_7') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('category_8') ? ' has-error' : '' }}">
    <label class="control-label col-md-4">Category 8 - Back End Support (BES)</label>
    <div class="col-md-4">
        False {{ Form::radio('category_8', 0, true, ['class' => 'option-input radio']) }}
        True {{ Form::radio('category_8', 8, null, ['class' => 'option-input radio']) }}
    </div>
    @if($errors->has('category_8'))
        <span class="help-block">
            <strong>{{ $errors->first('category_8') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('category_9') ? ' has-error' : '' }}">
    <label class="control-label col-md-4">Category 9 - Team Leader Contact Center and eCare</label>
    <div class="col-md-4">
        False {{ Form::radio('category_9', 0, true, ['class' => 'option-input radio']) }}
        True {{ Form::radio('category_9', 9, null, ['class' => 'option-input radio']) }}
    </div>
    @if($errors->has('category_9'))
        <span class="help-block">
            <strong>{{ $errors->first('category_9') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('category_10') ? ' has-error' : '' }}">
    <label class="control-label col-md-4">Category 10 - Team Leader GraPARI</label>
    <div class="col-md-4">
        False {{ Form::radio('category_10', 0, true, ['class' => 'option-input radio']) }}
        True {{ Form::radio('category_10', 10, null, ['class' => 'option-input radio']) }}
    </div>
    @if($errors->has('category_10'))
        <span class="help-block">
            <strong>{{ $errors->first('category_10') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('category_11') ? ' has-error' : '' }}">
    <label class="control-label col-md-4">Category 11 - Spv GraPARI</label>
    <div class="col-md-4">
        False {{ Form::radio('category_11', 0, true, ['class' => 'option-input radio']) }}
        True {{ Form::radio('category_11', 11, null, ['class' => 'option-input radio']) }}
    </div>
    @if($errors->has('category_11'))
        <span class="help-block">
            <strong>{{ $errors->first('category_11') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('category_12') ? ' has-error' : '' }}">
    <label class="control-label col-md-4">Category 12 - Spv GraPARI Mitra</label>
    <div class="col-md-4">
        False {{ Form::radio('category_12', 0, true, ['class' => 'option-input radio']) }}
        True {{ Form::radio('category_12', 12, null, ['class' => 'option-input radio']) }}
    </div>
    @if($errors->has('category_12'))
        <span class="help-block">
            <strong>{{ $errors->first('category_12') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('category_13') ? ' has-error' : '' }}">
    <label class="control-label col-md-4">Category 13 - Spv BES</label>
    <div class="col-md-4">
        False {{ Form::radio('category_13', 0, true, ['class' => 'option-input radio']) }}
        True {{ Form::radio('category_13', 13, null, ['class' => 'option-input radio']) }}
    </div>
    @if($errors->has('category_13'))
        <span class="help-block">
            <strong>{{ $errors->first('category_13') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('category_14') ? ' has-error' : '' }}">
    <label class="control-label col-md-4">Category 14 - Spv Contact Center and eCare</label>
    <div class="col-md-4">
        False {{ Form::radio('category_14', 0, true, ['class' => 'option-input radio']) }}
        True {{ Form::radio('category_14', 14, null, ['class' => 'option-input radio']) }}
    </div>
    @if($errors->has('category_14'))
        <span class="help-block">
            <strong>{{ $errors->first('category_14') }}</strong>
        </span>
    @endif
</div>

<hr>

<div class="form-group">
	<center>
        <button type="submit" class="btn btn-danger">{{ isset($user) ? 'EDIT DATA' : 'CREATE' }}</button> 
        @if(isset($user)) | 
            <a href="{{ url('judges') }}" class="btn btn-primary">BACK</a>
        @endif
    </center>
</div>