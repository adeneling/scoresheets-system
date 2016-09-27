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
        <div class="funkyradio">
            <div class="funkyradio-danger">
                <input type="radio" name="presentation_material" value="1" id="radio1" checked/>
                <label for="radio1">1</label>
            </div>
            <div class="funkyradio-danger">
                <input type="radio" name="presentation_material" value="2" id="radio3" />
                <label for="radio3">2</label>
            </div>
            <div class="funkyradio-danger">
                <input type="radio" name="presentation_material" value="3" id="radio3" />
                <label for="radio3">3</label>
            </div>
            <div class="funkyradio-danger">
                <input type="radio" name="presentation_material" value="4" id="radio4" />
                <label for="radio4">4</label>
            </div>
            <div class="funkyradio-danger">
                <input type="radio" name="presentation_material" value="5" id="radio5" />
                <label for="radio5">5</label>
            </div>
            <div class="funkyradio-danger">
                <input type="radio" name="presentation_material" value="6" id="radio6" />
                <label for="radio6">6</label>
            </div>
            <div class="funkyradio-danger">
                <input type="radio" name="presentation_material" value="7" id="radio7" />
                <label for="radio7">7</label>
            </div>
            <div class="funkyradio-danger">
                <input type="radio" name="presentation_material" value="8" id="radio8" />
                <label for="radio8">8</label>
            </div>
            <div class="funkyradio-danger">
                <input type="radio" name="presentation_material" value="9" id="radio9" />
                <label for="radio9">9</label>
            </div>
            <div class="funkyradio-danger">
                <input type="radio" name="presentation_material" value="10" id="radio10" />
                <label for="radio10">10</label>
            </div>
        </div>

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
</tr>
@if($participant->category->tier == 3)
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
            <button type="submit" class="btn btn-danger">{{ isset($participant) ? 'SUBMIT' : 'SUBMIT' }}</button> 
        </center>
    </th>
</tr>