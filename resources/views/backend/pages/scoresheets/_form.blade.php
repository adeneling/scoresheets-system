{!! Form::hidden('participant_id', $scoresheet->user->id) !!}
{!! Form::hidden('participant_name', $scoresheet->user->name) !!}
{!! Form::hidden('participant_area', $scoresheet->user->area) !!}
{!! Form::hidden('jury_id', Auth::user()->id) !!}
{!! Form::hidden('category_id', $scoresheet->user->category_id ) !!}

<tr>
    <th colspan="4" class="red"><font color="white">DECK AND DELIVERY ({{ $scoresheet->category->presentation_material + $scoresheet->category->communication_skill }}%)</font></th>
</tr>
<tr>
    <td>
        <h4>Presentation Material</h4>
        Content Compliance, Layout Design, Attractiveness, Innovative
    </td>
    <td><h4>{{ $scoresheet->category->presentation_material }}%</h4></td>
    <td>
        <div class="btn-group" id="filterPresentationMaterial" data-toggle="buttons">
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="0" name="presentation_material"> 0
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="1" name="presentation_material"> 1
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="2" name="presentation_material"> 2
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="3" name="presentation_material"> 3
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="4" name="presentation_material"> 4
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="5" name="presentation_material"> 5
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="6" name="presentation_material"> 6
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="7" name="presentation_material"> 7
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="8" name="presentation_material"> 8
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="9" name="presentation_material"> 9
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="10" name="presentation_material"> 10
            </label>
        </div>
        @if($errors->has('presentation_material'))
            <span class="help-block">
                <strong>{{ $errors->first('presentation_material') }}</strong>
            </span>
        @endif
    
    </td>
</tr>
<tr>
    <td>
        <h4>Communication Skill</h4>
        Friendly, Attitude, Self-Confident, Body Language, Eye Contact
    </td>
    <td><h4>{{ $scoresheet->category->communication_skill }}%</h4></td>
    <td>
        <div class="btn-group" id="filterCommunicationSkill" data-toggle="buttons">
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="0" name="communication_skill"> 0
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="1" name="communication_skill"> 1
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="2" name="communication_skill"> 2
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="3" name="communication_skill"> 3
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="4" name="communication_skill"> 4
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="5" name="communication_skill"> 5
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="6" name="communication_skill"> 6
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="7" name="communication_skill"> 7
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="8" name="communication_skill"> 8
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="9" name="communication_skill"> 9
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="10" name="communication_skill"> 10
            </label>
        </div>
        @if($errors->has('communication_skill'))
            <span class="help-block">
                <strong>{{ $errors->first('communication_skill') }}</strong>
            </span>
        @endif
    </td>

</tr>
<tr>
    <th colspan="4" class="red"><font color="white">SELF DRIVER ({{ $scoresheet->category->achievement + $scoresheet->category->personal_value }}%)</font></th>
</tr>
<tr>
    <td>
        <h4>Achievement</h4>
        Personal achievement in Region or Area
    </td>
    <td><h4>{{ $scoresheet->category->achievement }}%</h4></td>
    <td>
        <div class="btn-group" id="filterAchievement" data-toggle="buttons">
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="0" name="achievement"> 0
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="1" name="achievement" > 1
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="2" name="achievement"> 2
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="3" name="achievement"> 3
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="4" name="achievement"> 4
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="5" name="achievement"> 5
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="6" name="achievement"> 6
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="7" name="achievement"> 7
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="8" name="achievement"> 8
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="9" name="achievement"> 9
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="10" name="achievement"> 10
            </label>
        </div>
        @if($errors->has('achievement'))
            <span class="help-block">
                <strong>{{ $errors->first('achievement') }}</strong>
            </span>
        @endif
    </td>

</tr>
<tr>
    <td>
        <h4>Personal Value</h4>
        Integrity, Respect, Enthusiasm, Loyalty, Totality
    </td>
    <td><h4>{{ $scoresheet->category->personal_value }}%</h4></td>
    <td>
        <div class="btn-group" id="filterPersonalValue" data-toggle="buttons">
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="0" name="personal_value"> 0
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="1" name="personal_value" > 1
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="2" name="personal_value"> 2
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="3" name="personal_value"> 3
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="4" name="personal_value"> 4
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="5" name="personal_value"> 5
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="6" name="personal_value"> 6
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="7" name="personal_value"> 7
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="8" name="personal_value"> 8
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="9" name="personal_value"> 9
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="10" name="personal_value"> 10
            </label>
        </div>
        @if($errors->has('personal_value'))
            <span class="help-block">
                <strong>{{ $errors->first('personal_value') }}</strong>
            </span>
        @endif
    </td>

</tr>
<tr>
    <th colspan="4" class="red"><font color="white">KNOW HOW ({{ $scoresheet->category->customer_care_knowledge }}%)</font></th>
</tr>
<tr>
    <td>
        <h4>Customer Care Knowledge</h4>
        Jury Internal: 5 Core Process, Custmer Type-Service Differentition, Operation Excellence<br>
        Jury External: Basic Customer Care Knowledge
    </td>
    <td><h4>{{ $scoresheet->category->customer_care_knowledge }}%</h4></td>
    <td>
        <div class="btn-group" id="filterCustomerCareKnowledge" data-toggle="buttons">
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="0" name="customer_care_knowledge"> 0
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="1" name="customer_care_knowledge"> 1
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="2" name="customer_care_knowledge"> 2
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="3" name="customer_care_knowledge"> 3
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="4" name="customer_care_knowledge"> 4
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="5" name="customer_care_knowledge"> 5
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="6" name="customer_care_knowledge"> 6
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="7" name="customer_care_knowledge"> 7
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="8" name="customer_care_knowledge"> 8
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="9" name="customer_care_knowledge"> 9
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="10" name="customer_care_knowledge"> 10
            </label>
        </div>
        @if($errors->has('customer_care_knowledge'))
            <span class="help-block">
                <strong>{{ $errors->first('customer_care_knowledge') }}</strong>
            </span>
        @endif
    </td>

</tr>
<tr>
    <th colspan="4" class="red"><font color="white">ACTUALIZATION ({{ $scoresheet->category->solution_skill +  $scoresheet->category->inspirational_story }}%)</font></th>
</tr>
<tr>
    <td>
        <h4>Solution Skill</h4>
        Customer Need Identification, Customer Handling, Problem Solving, Decision Skill, Innovation
    </td>
    <td><h4>{{ $scoresheet->category->solution_skill }}%</h4></td>
    <td>
        <div class="btn-group" id="filterSolutionSkill" data-toggle="buttons">
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="0" name="solution_skill"> 0
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="1" name="solution_skill" > 1
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="2" name="solution_skill"> 2
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="3" name="solution_skill"> 3
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="4" name="solution_skill"> 4
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="5" name="solution_skill"> 5
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="6" name="solution_skill"> 6
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="7" name="solution_skill"> 7
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="8" name="solution_skill"> 8
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="9" name="solution_skill"> 9
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="10" name="solution_skill"> 10
            </label>
        </div>
        @if($errors->has('solution_skill'))
            <span class="help-block">
                <strong>{{ $errors->first('solution_skill') }}</strong>
            </span>
        @endif
    </td>

</tr>
<tr>
    <td>
        <h4>Inspirational Story</h4>
        How to handle operational issue with inspirational solution
    </td>
    <td><h4>{{ $scoresheet->category->inspirational_story }}%</h4></td>
    <td>
        <div class="btn-group" id="filterInspirationalStory" data-toggle="buttons">
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="0" name="inspirational_story"> 0
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="1" name="inspirational_story"> 1
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="2" name="inspirational_story"> 2
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="3" name="inspirational_story"> 3
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="4" name="inspirational_story"> 4
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="5" name="inspirational_story"> 5
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="6" name="inspirational_story"> 6
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="7" name="inspirational_story"> 7
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="8" name="inspirational_story"> 8
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="9" name="inspirational_story"> 9
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="10" name="inspirational_story"> 10
            </label>
        </div>
        @if($errors->has('inspirational_story'))
            <span class="help-block">
                <strong>{{ $errors->first('inspirational_story') }}</strong>
            </span>
        @endif
    </td>

</tr>
@if($scoresheet->category->tier == 3)
<tr>
    <th colspan="4" class="red"><font color="white">TEAM LEADER AND SUPERVISOR CATEGORY ONLY ({{ $scoresheet->category->leadership }}%)</font></th>
</tr>
<tr>
    <td>
        <h4>Leadership</h4>
    </td>
    <td><h4>{{ $scoresheet->category->leadership }}%</h4></td>
    <td>
        <div class="btn-group" id="filterLeadership" data-toggle="buttons">
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="0" name="leadership"> 0
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="1" name="leadership"> 1
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="2" name="leadership"> 2
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="3" name="leadership"> 3
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="4" name="leadership"> 4
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="5" name="leadership"> 5
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="6" name="leadership"> 6
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="7" name="leadership"> 7
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="8" name="leadership"> 8
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="9" name="leadership"> 9
            </label>
            <label class="btn btn-lg btn-danger white">
                <input type="radio" class="toggle" value="10" name="leadership"> 10
            </label>
        </div>
        @if($errors->has('leadership'))
            <span class="help-block">
                <strong>{{ $errors->first('leadership') }}</strong>
            </span>
        @endif
    </td>
</tr>
@endif
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
            <button type="submit" class="btn btn-danger">{{ isset($scoresheet) ? 'SUBMIT' : 'SUBMIT' }}</button> 
            @if(isset($scoresheet)) | 
                <a href="{{ url('scoresheets') }}" class="btn btn-warning">Back</a>
            @endif
        </center>
    </th>
</tr>