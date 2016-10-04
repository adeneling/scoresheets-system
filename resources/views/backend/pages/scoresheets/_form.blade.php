{!! Form::hidden('participant_id', $scoresheet->user->id) !!}
{!! Form::hidden('participant_name', $scoresheet->user->name) !!}
{!! Form::hidden('participant_area', $scoresheet->user->area) !!}
{!! Form::hidden('jury_id', Auth::user()->id) !!}
{!! Form::hidden('category_id', $scoresheet->user->category_id ) !!}
<style>
.btn-danger{border:none;}
.btn-group-lg>.btn, .btn-lg {background-color:#eee;color:#333;}

.donate-now {
     list-style-type:none;
     margin:0px;
     padding:0;
}

.donate-now li {
    float:left;
    margin:0 5px 0 0;
    width:40px;
    height:50px;
    position:relative;
    text-align: center;
    font-size: 120%;
}

.donate-now label, .donate-now input {
    display:block;
    position:absolute;
    top:0;
    left:0;
    right:0;
    bottom:20;
}

.donate-now input[type="radio"] {
    opacity:0.011;
    z-index:100;
}

.donate-now input[type="radio"]:checked + label {
    background:red;
    color: white;
}

.donate-now label {
    padding:5px;
    border:1px solid #CCC; 
    cursor:pointer;
    z-index:90;
}

.donate-now label:hover {
     background:#DDD;
}

</style>
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
        <ul class="donate-now">
            <li>
                {{ Form::radio('presentation_material', 1, null, ['id' => '11']) }}
                <label for="11">1</label>
            </li>
            <li>
                {{ Form::radio('presentation_material', 2, null, ['id' => '12']) }}
                <label for="12">2</label>
            </li>
            <li>
                {{ Form::radio('presentation_material', 3, null, ['id' => '13']) }}
                <label for="13">3</label>
            </li>
            <li>
                {{ Form::radio('presentation_material', 4, null, ['id' => '14']) }}
                <label for="14">4</label>
            </li>
            <li>
                {{ Form::radio('presentation_material', 5, null, ['id' => '15']) }}
                <label for="15">5</label>
            </li>
            <li>
                {{ Form::radio('presentation_material', 6, null, ['id' => '16']) }}
                <label for="16">6</label>
            </li>
            <li>
                {{ Form::radio('presentation_material', 7, null, ['id' => '17']) }}
                <label for="17">7</label>
            </li>
            <li>
                {{ Form::radio('presentation_material', 8, null, ['id' => '18']) }}
                <label for="18">8</label>
            </li>
            <li>
                {{ Form::radio('presentation_material', 9, null, ['id' => '19']) }}
                <label for="19">9</label>
            </li>
            <li>
                {{ Form::radio('presentation_material', 10, null, ['id' => '110']) }}
                <label for="110">10</label>
            </li>            
        </ul>
        @if($errors->has('presentation_material'))
            <span class="help-block">
                <strong><font color="red">{{ $errors->first('presentation_material') }}</font></strong>
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
        <ul class="donate-now">
            <li>
                {{ Form::radio('communication_skill', 1, null, ['id' => '21']) }}
                <label for="21">1</label>
            </li>
            <li>
                {{ Form::radio('communication_skill', 2, null, ['id' => '22']) }}
                <label for="22">2</label>
            </li>
            <li>
                {{ Form::radio('communication_skill', 3, null, ['id' => '23']) }}
                <label for="23">3</label>
            </li>
            <li>
                {{ Form::radio('communication_skill', 4, null, ['id' => '24']) }}
                <label for="24">4</label>
            </li>
            <li>
                {{ Form::radio('communication_skill', 5, null, ['id' => '25']) }}
                <label for="25">5</label>
            </li>
            <li>
                {{ Form::radio('communication_skill', 6, null, ['id' => '26']) }}
                <label for="26">6</label>
            </li>
            <li>
                {{ Form::radio('communication_skill', 7, null, ['id' => '27']) }}
                <label for="27">7</label>
            </li>
            <li>
                {{ Form::radio('communication_skill', 8, null, ['id' => '28']) }}
                <label for="28">8</label>
            </li>
            <li>
                {{ Form::radio('communication_skill', 9, null, ['id' => '29']) }}
                <label for="29">9</label>
            </li>
            <li>
                {{ Form::radio('communication_skill', 10, null, ['id' => '210']) }}
                <label for="210">10</label>
            </li>            
        </ul>
        @if($errors->has('communication_skill'))
            <span class="help-block">
                <strong><font color="red">{{ $errors->first('communication_skill') }}</font></strong>
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
        <ul>
            <li>Coverage (Regional, Area, Nasional)</li>
            <li>Benefit (Service Oriented, Revenue Oriented, Cost Efficiency)</li>
            <li>Realisasi (Channel Digital atau Channel Legacy)</li>
        </ul>
    </td>
    <td><h4>{{ $scoresheet->category->achievement }}%</h4></td>
    <td>
        <ul class="donate-now">
            <li>
                {{ Form::radio('achievement', 1, null, ['id' => '31']) }}
                <label for="31">1</label>
            </li>
            <li>
                {{ Form::radio('achievement', 2, null, ['id' => '32']) }}
                <label for="32">2</label>
            </li>
            <li>
                {{ Form::radio('achievement', 3, null, ['id' => '33']) }}
                <label for="33">3</label>
            </li>
            <li>
                {{ Form::radio('achievement', 4, null, ['id' => '34']) }}
                <label for="34">4</label>
            </li>
            <li>
                {{ Form::radio('achievement', 5, null, ['id' => '35']) }}
                <label for="35">5</label>
            </li>
            <li>
                {{ Form::radio('achievement', 6, null, ['id' => '36']) }}
                <label for="36">6</label>
            </li>
            <li>
                {{ Form::radio('achievement', 7, null, ['id' => '37']) }}
                <label for="37">7</label>
            </li>
            <li>
                {{ Form::radio('achievement', 8, null, ['id' => '38']) }}
                <label for="38">8</label>
            </li>
            <li>
                {{ Form::radio('achievement', 9, null, ['id' => '39']) }}
                <label for="39">9</label>
            </li>
            <li>
                {{ Form::radio('achievement', 10, null, ['id' => '310']) }}
                <label for="310">10</label>
            </li>            
        </ul>
        @if($errors->has('achievement'))
            <span class="help-block">
                <strong><font color="red">{{ $errors->first('achievement') }}</font></strong>
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
        <ul class="donate-now">
            <li>
                {{ Form::radio('personal_value', 1, null, ['id' => '41']) }}
                <label for="41">1</label>
            </li>
            <li>
                {{ Form::radio('personal_value', 2, null, ['id' => '42']) }}
                <label for="42">2</label>
            </li>
            <li>
                {{ Form::radio('personal_value', 3, null, ['id' => '43']) }}
                <label for="43">3</label>
            </li>
            <li>
                {{ Form::radio('personal_value', 4, null, ['id' => '44']) }}
                <label for="44">4</label>
            </li>
            <li>
                {{ Form::radio('personal_value', 5, null, ['id' => '45']) }}
                <label for="45">5</label>
            </li>
            <li>
                {{ Form::radio('personal_value', 6, null, ['id' => '46']) }}
                <label for="46">6</label>
            </li>
            <li>
                {{ Form::radio('personal_value', 7, null, ['id' => '47']) }}
                <label for="47">7</label>
            </li>
            <li>
                {{ Form::radio('personal_value', 8, null, ['id' => '48']) }}
                <label for="48">8</label>
            </li>
            <li>
                {{ Form::radio('personal_value', 9, null, ['id' => '49']) }}
                <label for="49">9</label>
            </li>
            <li>
                {{ Form::radio('personal_value', 10, null, ['id' => '410']) }}
                <label for="410">10</label>
            </li>            
        </ul>
        @if($errors->has('personal_value'))
            <span class="help-block">
                <strong><font color="red">{{ $errors->first('personal_value') }}</font></strong>
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
        <ul class="donate-now">
            <li>
                {{ Form::radio('customer_care_knowledge', 1, null, ['id' => '51']) }}
                <label for="51">1</label>
            </li>
            <li>
                {{ Form::radio('customer_care_knowledge', 2, null, ['id' => '52']) }}
                <label for="52">2</label>
            </li>
            <li>
                {{ Form::radio('customer_care_knowledge', 3, null, ['id' => '53']) }}
                <label for="53">3</label>
            </li>
            <li>
                {{ Form::radio('customer_care_knowledge', 4, null, ['id' => '54']) }}
                <label for="54">4</label>
            </li>
            <li>
                {{ Form::radio('customer_care_knowledge', 5, null, ['id' => '55']) }}
                <label for="55">5</label>
            </li>
            <li>
                {{ Form::radio('customer_care_knowledge', 6, null, ['id' => '56']) }}
                <label for="56">6</label>
            </li>
            <li>
                {{ Form::radio('customer_care_knowledge', 7, null, ['id' => '57']) }}
                <label for="57">7</label>
            </li>
            <li>
                {{ Form::radio('customer_care_knowledge', 8, null, ['id' => '58']) }}
                <label for="58">8</label>
            </li>
            <li>
                {{ Form::radio('customer_care_knowledge', 9, null, ['id' => '59']) }}
                <label for="59">9</label>
            </li>
            <li>
                {{ Form::radio('customer_care_knowledge', 10, null, ['id' => '510']) }}
                <label for="510">10</label>
            </li>            
        </ul>
        @if($errors->has('customer_care_knowledge'))
            <span class="help-block">
                <strong><font color="red">{{ $errors->first('customer_care_knowledge') }}</font></strong>
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
        <ul class="donate-now">
            <li>
                {{ Form::radio('solution_skill', 1, null, ['id' => '61']) }}
                <label for="61">1</label>
            </li>
            <li>
                {{ Form::radio('solution_skill', 2, null, ['id' => '62']) }}
                <label for="62">2</label>
            </li>
            <li>
                {{ Form::radio('solution_skill', 3, null, ['id' => '63']) }}
                <label for="63">3</label>
            </li>
            <li>
                {{ Form::radio('solution_skill', 4, null, ['id' => '64']) }}
                <label for="64">4</label>
            </li>
            <li>
                {{ Form::radio('solution_skill', 5, null, ['id' => '65']) }}
                <label for="65">5</label>
            </li>
            <li>
                {{ Form::radio('solution_skill', 6, null, ['id' => '66']) }}
                <label for="66">6</label>
            </li>
            <li>
                {{ Form::radio('solution_skill', 7, null, ['id' => '67']) }}
                <label for="67">7</label>
            </li>
            <li>
                {{ Form::radio('solution_skill', 8, null, ['id' => '68']) }}
                <label for="68">8</label>
            </li>
            <li>
                {{ Form::radio('solution_skill', 9, null, ['id' => '69']) }}
                <label for="69">9</label>
            </li>
            <li>
                {{ Form::radio('solution_skill', 10, null, ['id' => '610']) }}
                <label for="610">10</label>
            </li>            
        </ul>
        @if($errors->has('solution_skill'))
            <span class="help-block">
                <strong><font color="red">{{ $errors->first('solution_skill') }}</font></strong>
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
        <ul class="donate-now">
            <li>
                {{ Form::radio('inspirational_story', 1, null, ['id' => '71']) }}
                <label for="71">1</label>
            </li>
            <li>
                {{ Form::radio('inspirational_story', 2, null, ['id' => '72']) }}
                <label for="72">2</label>
            </li>
            <li>
                {{ Form::radio('inspirational_story', 3, null, ['id' => '73']) }}
                <label for="73">3</label>
            </li>
            <li>
                {{ Form::radio('inspirational_story', 4, null, ['id' => '74']) }}
                <label for="74">4</label>
            </li>
            <li>
                {{ Form::radio('inspirational_story', 5, null, ['id' => '75']) }}
                <label for="75">5</label>
            </li>
            <li>
                {{ Form::radio('inspirational_story', 6, null, ['id' => '76']) }}
                <label for="76">6</label>
            </li>
            <li>
                {{ Form::radio('inspirational_story', 7, null, ['id' => '77']) }}
                <label for="77">7</label>
            </li>
            <li>
                {{ Form::radio('inspirational_story', 8, null, ['id' => '78']) }}
                <label for="78">8</label>
            </li>
            <li>
                {{ Form::radio('inspirational_story', 9, null, ['id' => '79']) }}
                <label for="79">9</label>
            </li>
            <li>
                {{ Form::radio('inspirational_story', 10, null, ['id' => '710']) }}
                <label for="710">10</label>
            </li>            
        </ul>
        @if($errors->has('inspirational_story'))
            <span class="help-block">
                <strong><font color="red">{{ $errors->first('inspirational_story') }}</font></strong>
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
        <ul class="donate-now">
            <li>
                {{ Form::radio('leadership', 1, null, ['id' => '81']) }}
                <label for="81">1</label>
            </li>
            <li>
                {{ Form::radio('leadership', 2, null, ['id' => '82']) }}
                <label for="82">2</label>
            </li>
            <li>
                {{ Form::radio('leadership', 3, null, ['id' => '83']) }}
                <label for="83">3</label>
            </li>
            <li>
                {{ Form::radio('leadership', 4, null, ['id' => '84']) }}
                <label for="84">4</label>
            </li>
            <li>
                {{ Form::radio('leadership', 5, null, ['id' => '85']) }}
                <label for="85">5</label>
            </li>
            <li>
                {{ Form::radio('leadership', 6, null, ['id' => '86']) }}
                <label for="86">6</label>
            </li>
            <li>
                {{ Form::radio('leadership', 7, null, ['id' => '87']) }}
                <label for="87">7</label>
            </li>
            <li>
                {{ Form::radio('leadership', 8, null, ['id' => '88']) }}
                <label for="88">8</label>
            </li>
            <li>
                {{ Form::radio('leadership', 9, null, ['id' => '89']) }}
                <label for="89">9</label>
            </li>
            <li>
                {{ Form::radio('leadership', 10, null, ['id' => '810']) }}
                <label for="810">10</label>
            </li>            
        </ul>
        @if($errors->has('leadership'))
            <span class="help-block">
                <strong><font color="red">{{ $errors->first('leadership') }}</font></strong>
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
            <button type="submit" class="btn btn-success">{{ isset($scoresheet) ? 'SUBMIT' : 'SUBMIT' }}</button> 
            @if(isset($scoresheet)) | 
                <a href="{{ url('scoresheets') }}" class="btn btn-warning">Back</a>
            @endif
        </center>
    </th>
</tr>