@extends('participant.layouts.app')

@section('title'){{ Auth::user()->name }}
@stop
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">
                <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                    <div class="profile_img">
                        <div id="crop-avatar">
                            <!-- Current avatar -->

                            <img class="img-responsive avatar-view" src="{{ asset('img/'. (Auth::user()->picture != null ? Auth::user()->picture : 'picture.png') )}}" alt="Avatar" title="Change the avatar">
                        </div>
                    </div>          
                    <br>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                	<div class="panel panel-danger">
                		<!-- Default panel contents -->
                		<div class="panel-heading">{{ Auth::user()->name }}</div>
                		<!-- Table -->
                        {!! Form::model($user, ['route' => ['bestcs-participant.update', $user],'method' =>'put', 'files' => true,'role'=>'form','class'=>'form-horizontal form-label-left'])!!}
                            {!! csrf_field() !!}
                        <table class="table">
                            <tbody>
                            	<tr>
                                    <td width="30%">Profile Picture</td>
                                    <td>{!! Form::file('picture', null, ['class'=>'form-control']) !!}</td>
                                </tr>
                                <tr>
                                    <td width="30%">NIK</td>
                                    <td>{!! Form::text('nik', Auth::user()->nik, ['class'=>'form-control','placeholder'=>'NIK']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>{!! Form::text('name', Auth::user()->name, ['class'=>'form-control','placeholder'=>'Full name']) !!}</td>
                                </tr>
                                <tr>
                                    <td>E-Mail</td>
                                    <td>{!! Form::text('email', Auth::user()->email, ['class'=>'form-control','placeholder'=>'Email']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Category</td>
                                    <td>{!!Form::select('category_id', [''=>'']+App\Category::pluck('name','id')->all(), null, ['class'=>'form-control']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Selection Date</td>
                                    <td>{!! Form::date('selection_date', null, ['class'=>'form-control','placeholder'=>'Selection date']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Join Date</td>
                                    <td>{!! Form::date('join_date', null, ['class'=>'form-control','placeholder'=>'Join date']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Birth Place</td>
                                    <td>{!! Form::text('birth_place', null, ['class'=>'form-control','placeholder'=>'Birth place']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Birthday</td>
                                    <td>{!! Form::date('birthday', null, ['class'=>'form-control','placeholder'=>'Birthday']) !!}</td>
                                </tr>
                                <tr>
                                    <td>About Me</td>
                                    <td>{!! Form::textarea('about_me', null, ['class'=>'form-control','placeholder'=>'About me','rows'=>'3']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>{!!Form::select('gender', ['L'=>'Laki-Laki','P'=>'Perempuan'], null, ['class'=>'form-control']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Work Location</td>
                                    <td>{!! Form::text('work_location', null, ['class'=>'form-control','placeholder'=>'Work location']) !!}</td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td>{!! Form::text('city', null, ['class'=>'form-control','placeholder'=>'City']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Area</td>
                                    <td>{!!Form::select('area', ['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'], null, ['class'=>'form-control']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Job Function</td>
                                    <td>{!! Form::text('job_function', null, ['class'=>'form-control','placeholder'=>'Job']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Mobile Phone</td>
                                    <td>{!! Form::number('mobile_phone', null, ['class'=>'form-control','placeholder'=>'Phone']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Bank Account</td>
                                    <td>{!! Form::number('bank_account', null, ['class'=>'form-control','placeholder'=>'Bank Account Number']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Twitter</td>
                                    <td>{!! Form::text('twitter', null, ['class'=>'form-control','placeholder'=>'Twitter Account']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Facebook</td>
                                    <td>{!! Form::text('facebook', null, ['class'=>'form-control','placeholder'=>'Facebook Account']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Instagram</td>
                                    <td>{!! Form::text('instagram', null, ['class'=>'form-control','placeholder'=>'Instagram Account']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Notes</td>
                                    <td>{!! Form::textarea('notes', null, ['class'=>'form-control','placeholder'=>'Notes','rows'=>'3']) !!}</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                    	<center><button type="submit" class="btn btn-danger">SUBMIT</button></center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        {!! Form::close() !!}
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop