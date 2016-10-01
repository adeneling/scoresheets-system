@extends('backend.layouts.app')

@section('title')Judges - {{ $user->name }}
@stop

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{ $user->name }}</h2>
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
                        <li><center>
                                <a href="{{ url('judges') }}" class="btn btn-primary">BACK</a>
                            </center>
                        </li>
                    </ul>
                    <br />
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="profile_title">
                        <div class="col-md-6">
                            <h2>@yield('title')</h2>
                        </div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-md-3">E-Mail</label>
                                <div class="col-md-4">
                                    {{ $user->email }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-md-3">About Me</label>
                                <div class="col-md-4">
                                    {{ $user->about_me }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-md-3">Category</label>
                                <div class="col-md-4">
                                    <?php $handle = explode(',', $user->category_handled); $no=1  ?>
                                    @foreach($handle as $category)
                                        @if($category != 0)
                                            Category {{ $category }}
                                            <br>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection