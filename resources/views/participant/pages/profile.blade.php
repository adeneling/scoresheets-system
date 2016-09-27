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
                    <center>
                    	<a href="{{ route('profile.edit', encrypt(Auth::user()->id ))}}" class="btn btn-success">
	                    	<i class="fa fa-edit m-right-xs"></i> Edit Profile
	                    </a>
                    </center>                    
                    <br>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                	<div class="panel panel-danger">
                		<!-- Default panel contents -->
                		<div class="panel-heading">{{ Auth::user()->name }}</div>
                		<!-- Table -->
                		<table class="table">
                            <tbody>
                                <tr>
                                    <td width="30%">NIK</td>
                                    <td>{{ Auth::user()->nik }}</td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>{{ Auth::user()->name }}</td>
                                </tr>
                                <tr>
                                    <td>E-Mail</td>
                                    <td>{{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <td>Category</td>
                                    <td>{{ Auth::user()->category_id }}</td>
                                </tr>
                                <tr>
                                    <td>Birthday</td>
                                    <td>{{ Auth::user()->birthday }}</td>
                                </tr>
                                <tr>
                                    <td>About Me</td>
                                    <td>{{ Auth::user()->about_me }}</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>{{ Auth::user()->gender }}</td>
                                </tr>
                                <tr>
                                    <td>Work Location</td>
                                    <td>{{ Auth::user()->work_location }}</td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td>{{ Auth::user()->city }}</td>
                                </tr>
                                <tr>
                                    <td>Area</td>
                                    <td>{{ Auth::user()->area }}</td>
                                </tr>
                                <tr>
                                    <td>Job Function</td>
                                    <td>{{ Auth::user()->job_function }}</td>
                                </tr>
                                <tr>
                                    <td>Mobile Phone</td>
                                    <td>{{ Auth::user()->mobile_phone }}</td>
                                </tr>
                                <tr>
                                    <td>Bank Account</td>
                                    <td>{{ Auth::user()->bank_account }}</td>
                                </tr>
                                <tr>
                                    <td>Twitter</td>
                                    <td>{{ Auth::user()->twitter }}</td>
                                </tr>
                                <tr>
                                    <td>Facebook</td>
                                    <td>{{ Auth::user()->facebook }}</td>
                                </tr>
                                <tr>
                                    <td>Instagram</td>
                                    <td>{{ Auth::user()->instagram }}</td>
                                </tr>
                                <tr>
                                    <td>Notes</td>
                                    <td>{{ Auth::user()->notes }}</td>
                                </tr>
                                <tr>
                                    <td>Presentation File</td>
                                    <td>
                                    	<a href="#" class="btn btn-danger" target="_blank">Presentation file{{ Auth::user()->presentation_file }}</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
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
                                    <td>{!! Form::text('name', Auth::user()->name, ['class'=>'form-control','placeholder'=>'Nama lengkap']) !!}</td>
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
                                    <td>Selection Day</td>
                                    <td>{!! Form::date('selection_day', null, ['class'=>'form-control','placeholder'=>'Selection day']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Birthday</td>
                                    <td>{!! Form::date('birthday', null, ['class'=>'form-control','placeholder'=>'Tanggal lahir']) !!}</td>
                                </tr>
                                <tr>
                                    <td>About Me</td>
                                    <td>{!! Form::textarea('about_me', null, ['class'=>'form-control','placeholder'=>'Tentang saya','rows'=>'3']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>{!!Form::select('gender', ['L'=>'Laki-Laki','P'=>'Perempuan'], null, ['class'=>'form-control']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Work Location</td>
                                    <td>{!! Form::text('work_location', null, ['class'=>'form-control','placeholder'=>'Lokasi Kerja']) !!}</td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td>{!! Form::text('city', null, ['class'=>'form-control','placeholder'=>'Kota']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Area</td>
                                    <td>{!!Form::select('area', ['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'], null, ['class'=>'form-control']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Job Function</td>
                                    <td>{!! Form::text('job_function', null, ['class'=>'form-control','placeholder'=>'Jabatan']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Mobile Phone</td>
                                    <td>{!! Form::number('mobile_phone', null, ['class'=>'form-control','placeholder'=>'Nomor Telepon']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Bank Account</td>
                                    <td>{!! Form::number('bank_account', null, ['class'=>'form-control','placeholder'=>'No. Rekening Bank']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Twitter</td>
                                    <td>{!! Form::text('twitter', null, ['class'=>'form-control','placeholder'=>'Akun Twitter']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Facebook</td>
                                    <td>{!! Form::text('facebook', null, ['class'=>'form-control','placeholder'=>'Akun Facebook']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Instagram</td>
                                    <td>{!! Form::text('instagram', null, ['class'=>'form-control','placeholder'=>'Akun Instagram']) !!}</td>
                                </tr>
                                <tr>
                                    <td>Notes</td>
                                    <td>{!! Form::textarea('notes', null, ['class'=>'form-control','placeholder'=>'Catatan','rows'=>'3']) !!}</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                    	<center><button type="submit" class="btn btn-danger">SUBMIT</button></center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop