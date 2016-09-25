<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Category Name</label>
    <div class="col-md-4">
        {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Category name']) !!}
    </div>
    @if($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('tier') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Tier</label>
    <div class="col-md-1">
        {!!Form::select('tier', ['1'=>'1','2'=>'2','3'=>'3'], null, ['class'=>'form-control']) !!}
    </div>
    @if($errors->has('tier'))
        <span class="help-block">
            <strong>{{ $errors->first('tier') }}</strong>
        </span>
    @endif
</div>



<div class="form-group{{ $errors->has('parent_category') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Parent Category</label>
    <div class="col-md-4">
        {!! Form::text('parent_category', null, ['class'=>'form-control','placeholder'=>'Parent Category']) !!}
    </div>
    @if($errors->has('parent_category'))
        <span class="help-block">
            <strong>{{ $errors->first('parent_category') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Description</label>
    <div class="col-md-5">
        {!! Form::textarea('description', null, ['class'=>'form-control','placeholder'=>'Description','rows'=>'3']) !!}
    </div>
    @if($errors->has('description'))
        <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('presentation_material') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Presentation Material</label>
    <div class="col-md-1">
        {!! Form::number('presentation_material', null, ['class'=>'form-control']) !!}
    </div>
    @if($errors->has('presentation_material'))
        <span class="help-block">
            <strong>{{ $errors->first('presentation_material') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('communication_skill') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Communication Skill</label>
    <div class="col-md-1">
        {!! Form::number('communication_skill', null, ['class'=>'form-control']) !!}
    </div>
    @if($errors->has('communication_skill'))
        <span class="help-block">
            <strong>{{ $errors->first('communication_skill') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('achievement') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Achievement</label>
    <div class="col-md-1">
        {!! Form::number('achievement', null, ['class'=>'form-control']) !!}
    </div>
    @if($errors->has('achievement'))
        <span class="help-block">
            <strong>{{ $errors->first('achievement') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('personal_value') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Personal Value</label>
    <div class="col-md-1">
        {!! Form::number('personal_value', null, ['class'=>'form-control']) !!}
    </div>
    @if($errors->has('personal_value'))
        <span class="help-block">
            <strong>{{ $errors->first('personal_value') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('customer_care_knowledge') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Customer Care Knowledge</label>
    <div class="col-md-1">
        {!! Form::number('customer_care_knowledge', null, ['class'=>'form-control']) !!}
    </div>
    @if($errors->has('customer_care_knowledge'))
        <span class="help-block">
            <strong>{{ $errors->first('customer_care_knowledge') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('solution_skill') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Solution Skill</label>
    <div class="col-md-1">
        {!! Form::number('solution_skill', null, ['class'=>'form-control']) !!}
    </div>
    @if($errors->has('solution_skill'))
        <span class="help-block">
            <strong>{{ $errors->first('solution_skill') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('inspirational_story') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Inspirational Story</label>
    <div class="col-md-1">
        {!! Form::number('inspirational_story', null, ['class'=>'form-control']) !!}
    </div>
    @if($errors->has('inspirational_story'))
        <span class="help-block">
            <strong>{{ $errors->first('inspirational_story') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('leadership') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Leadership</label>
    <div class="col-md-1">
        {!! Form::number('leadership', null, ['class'=>'form-control']) !!}
    </div>
    @if($errors->has('leadership'))
        <span class="help-block">
            <strong>{{ $errors->first('leadership') }}</strong>
        </span>
    @endif
</div>

<hr>

<div class="form-group">
	<center>
        <button type="submit" class="btn btn-danger">{{ isset($category) ? 'Edit Category' : 'Create' }}</button> 
        @if(isset($category)) | 
            <a href="{{ url('category') }}" class="btn btn-primary">Kembali</a>
        @endif
    </center>
</div>