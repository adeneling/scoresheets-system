@extends('participant.layouts.app')

@section('title')<h1>Best Customer Service Awards 2016<br>Telkomsel</h1>
@stop
@section('content')
<div class="col-sm-12 text-center">
	<center><img src="{{ asset('frontend-new/img/logo.png') }}"></center>
</div>
<br><br>
<h1>Welcome [{{ Auth::user()->name }}]</h1>

<p>
	We welcome you to your personalized site, as a participant of <strong>Telkomsel Best Customer Service Awards 2016</strong>.
	Please complete your personal profile, upload your presentation file, and we wish you the best for the selection process
</p>
<br>
<hr>
<br>

<p style="font-size:85%;">
	Please use this QR Code for your check-in process
<p><br>
<div class="col-sm-12 text-center">
	<img src="{{ asset('frontend-new/img/qr.jpg') }}" class="displayed" alt="{{ Auth::user()->name }}"/>
</div>
@stop