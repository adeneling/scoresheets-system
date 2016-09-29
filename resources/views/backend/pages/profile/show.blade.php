@extends('backend.layouts.app')

@section('title')Profile
@stop

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>@yield('title')</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                    <div class="profile_img">
                        <div id="crop-avatar">
                            <!-- Current avatar -->
                            <img class="img-responsive avatar-view" src="{{ asset('img/' . ($user->picture != null ? $user->picture : 'picture.png' )) }}" alt="Avatar" title="Change the avatar">
                        </div>
                    </div>
                    <h3>{{ $user->name }}</h3>
                    <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Location: {{ $user->city }} </li>
                        <li><i class="fa fa-child user-profile-icon"></i> NIK: {{ $user->nik }} </li>
                        <li><i class="fa fa-briefcase user-profile-icon"></i> E-Mail: {{ $user->email }} </li>
                    </ul>
                    <a href="{{ route('profile.edit', encrypt(Auth::user()->id ))}}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                    <br />
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Profile</a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                <table class="data table table-striped no-margin">
                                    <thead>
                                        <th width="30%">Name</th>
                                        <th>Content</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>NIK</td>
                                            <td>{{ $user->nik }}</td>
                                        </tr>
                                        <tr>
                                            <td>Name</td>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>E-Mail</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Category</td>
                                            <td>{{ $user->category_id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Selection Date</td>
                                            <td>{{ $user->selection_date }}</td>
                                        </tr>
                                        <tr>
                                            <td>Join Date</td>
                                            <td>{{ $user->join_date }}</td>
                                        </tr>
                                        <tr>
                                            <td>Birth Place</td>
                                            <td>{{ $user->birth_place }}</td>
                                        </tr>
                                        <tr>
                                            <td>Birthday</td>
                                            <td>{{ $user->birthday }}</td>
                                        </tr>
                                        <tr>
                                            <td>About Me</td>
                                            <td>{{ $user->about_me }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gender</td>
                                            <td>{{ $user->gender }}</td>
                                        </tr>
                                        <tr>
                                            <td>Work Location</td>
                                            <td>{{ $user->work_location }}</td>
                                        </tr>
                                        <tr>
                                            <td>City</td>
                                            <td>{{ $user->city }}</td>
                                        </tr>
                                        <tr>
                                            <td>Area</td>
                                            <td>{{ $user->area }}</td>
                                        </tr>
                                        <tr>
                                            <td>Job Function</td>
                                            <td>{{ $user->job_function }}</td>
                                        </tr>
                                        <tr>
                                            <td>Mobile Phone</td>
                                            <td>{{ $user->mobile_phone }}</td>
                                        </tr>
                                        <tr>
                                            <td>Bank Account</td>
                                            <td>{{ $user->bank_account }}</td>
                                        </tr>
                                        <tr>
                                            <td>Twitter</td>
                                            <td>{{ $user->twitter }}</td>
                                        </tr>
                                        <tr>
                                            <td>Facebook</td>
                                            <td>{{ $user->facebook }}</td>
                                        </tr>
                                        <tr>
                                            <td>Instagram</td>
                                            <td>{{ $user->instagram }}</td>
                                        </tr>
                                        <tr>
                                            <td>Notes</td>
                                            <td>{{ $user->notes }}</td>
                                        </tr>
                                        <tr>
                                            <td>Presentation File</td>
                                            <td>
                                                @if($user->presentation_file != null)
                                                <a href="{{ asset('files/'. $user->presentation_file) }}" class="btn btn-success" target="_blank">Presentation File</a>
                                                @else
                                                <a href="#" class="btn btn-success" >EMPTY</a>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- end recent activity -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

