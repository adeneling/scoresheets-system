{!! Form::hidden('participant_id', $participant->id) !!}
{!! Form::hidden('participant_name', $participant->name) !!}
{!! Form::hidden('participant_area', $participant->area) !!}
{!! Form::hidden('jury_id', Auth::user()->id) !!}
{!! Form::hidden('category_id', $participant->category_id) !!}

<tr>
    <th colspan="4" class="red"><font color="white">DECK AND DELIVERY ({{ $participant->category->presentation_material + $participant->category->communication_skill }}%)</font></th>
</tr>
<tr>
    <td>
        <h4>Presentation Material</h4>
        Content Compliance, Layout Design, Attractiveness, Innovative
    </td>
    <td><h4>{{ $participant->category->presentation_material }}%</h4></td>
    <td>
        {!!Form::select('presentation_material', ['0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'], null, ['class'=>'form-control']) !!}
    </td>
    <td>
        {!! Form::text('presentation_material_note', null, ['class'=>'form-control','placeholder'=>'']) !!}
    </td>
</tr>
<tr>
    <td>
        <h4>Communication Skill</h4>
        Friendly, Attitude, Self-Confident, Body Language, Eye Contact
    </td>
    <td><h4>{{ $participant->category->communication_skill }}%</h4></td>
    <td>
        {!!Form::select('communication_skill', ['0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'], null, ['class'=>'form-control']) !!}
    </td>
    <td>
        {!! Form::text('communication_skill_note', null, ['class'=>'form-control','placeholder'=>'']) !!}
    </td>
</tr>
<tr>
    <th colspan="4" class="red"><font color="white">SELF DRIVER ({{ $participant->category->achievement + $participant->category->personal_value }}%)</font></th>
</tr>
<tr>
    <td>
        <h4>Achievement</h4>
        Personal achievement in Region or Area
    </td>
    <td><h4>{{ $participant->category->achievement }}%</h4></td>
    <td>
        {!!Form::select('achievement', ['0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'], null, ['class'=>'form-control']) !!}
    </td>
    <td>
        {!! Form::text('achievement_note', null, ['class'=>'form-control','placeholder'=>'']) !!}
    </td>
</tr>
<tr>
    <td>
        <h4>Personal Value</h4>
        Integrity, Respect, Enthusiasm, Loyalty, Totality
    </td>
    <td><h4>{{ $participant->category->personal_value }}%</h4></td>
    <td>
        {!!Form::select('personal_value', ['0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'], null, ['class'=>'form-control']) !!}
    </td>
    <td>
        {!! Form::text('personal_value_note', null, ['class'=>'form-control','placeholder'=>'']) !!}
    </td>
</tr>
<tr>
    <th colspan="4" class="red"><font color="white">KNOW HOW ({{ $participant->category->customer_care_knowledge }}%)</font></th>
</tr>
<tr>
    <td>
        <h4>Customer Care Knowledge</h4>
        Jury Internal: 5 Core Process, Custmer Type-Service Differentition, Operation Excellence<br>
        Jury External: Basic Customer Care Knowledge
    </td>
    <td><h4>{{ $participant->category->customer_care_knowledge }}%</h4></td>
    <td>
        {!!Form::select('customer_care_knowledge', ['0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'], null, ['class'=>'form-control']) !!}
    </td>
    <td>
        {!! Form::text('customer_care_knowledge_note', null, ['class'=>'form-control','placeholder'=>'']) !!}
    </td>
</tr>
<tr>
    <th colspan="4" class="red"><font color="white">ACTUALIZATION ({{ $participant->category->solution_skill +  $participant->category->inspirational_story }}%)</font></th>
</tr>
<tr>
    <td>
        <h4>Solution Skill</h4>
        Customer Need Identification, Customer Handling, Problem Solving, Decision Skill, Innovation
    </td>
    <td><h4>{{ $participant->category->solution_skill }}%</h4></td>
    <td>
        {!!Form::select('solution_skill', ['0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'], null, ['class'=>'form-control']) !!}
    </td>
    <td>
        {!! Form::text('solution_skill_note', null, ['class'=>'form-control','placeholder'=>'']) !!}
    </td>
</tr>
<tr>
    <td>
        <h4>Inspirational Story</h4>
        How to handle operational issue with inspirational solution
    </td>
    <td><h4>{{ $participant->category->inspirational_story }}%</h4></td>
    <td>
        {!!Form::select('inspirational_story', ['0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'], null, ['class'=>'form-control']) !!}
    </td>
    <td>
        {!! Form::text('inspirational_story_note', null, ['class'=>'form-control','placeholder'=>'']) !!}
    </td>
</tr>
<tr>
    <th colspan="4" class="red"><font color="white">TEAM LEADER AND SUPERVISOR CATEGORY ONLY ({{ $participant->category->leadership }}%)</font></th>
</tr>
<tr>
    <td>
        <h4>Leadership</h4>
    </td>
    <td><h4>{{ $participant->category->leadership }}%</h4></td>
    <td>
        {!!Form::select('leadership', ['0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'], null, ['class'=>'form-control']) !!}
    </td>
    <td>
        {!! Form::text('leadership_note', null, ['class'=>'form-control','placeholder'=>'']) !!}
    </td>
</tr>
<tr>
    <td colspan="4">
        <div class="form-group{{ $errors->has('notes') ? ' has-error' : '' }}">
            <label class="control-label col-md-1">Notes</label>
            <div class="col-md-11">
                {!! Form::textarea('notes', null, ['class'=>'form-control','placeholder'=>'Jury Note','rows'=>'4']) !!}
            </div>
            @if($errors->has('notes'))
            <span class="help-block">
                <strong>{{ $errors->first('notes') }}</strong>
            </span>
            @endif
        </div>
    </td>
</tr>
<tr>
    <th colspan="4">
        <center>
            <button type="submit" class="btn btn-primary">{{ isset($participant) ? 'Scoring' : 'Scoring' }}</button> 
            @if(isset($participant)) | 
            <a href="{{ url('master-data') }}" class="btn btn-danger">Back</a>
            @endif
        </center>
    </th>
</tr>