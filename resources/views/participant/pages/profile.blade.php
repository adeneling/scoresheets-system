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
                    	<a href="{{ route('bestcs-participant.edit', encrypt(Auth::user()->id ))}}" class="btn btn-success">
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
                                    <td>Selection Date</td>
                                    <td>{{ Auth::user()->selection_date }}</td>
                                </tr>
                                <tr>
                                    <td>Join Date</td>
                                    <td>{{ Auth::user()->join_date }}</td>
                                </tr>
                                <tr>
                                    <td>Birth Place</td>
                                    <td>{{ Auth::user()->birth_place }}</td>
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
                                    <td>{{ Auth::user()->area == 5 ? 'Headquarter' : Auth::user()->area}}</td>
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
                                    @if(Auth::user()->presentation_file != null)
                                        <td>
                                            <a href="{{ asset('files/'. Auth::user()->presentation_file) }}" class="btn btn-danger" target="framename">{{ Auth::user()->presentation_file }}</a>
                                        </td>
                                    @else
                                        <td>
                                            Data belum ada
                                        </td>
                                    @endif
                                    
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