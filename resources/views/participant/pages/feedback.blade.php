@extends('participant.layouts.app')

@section('title')Feedback
@stop
@section('content')
<div class="col-sm-12 text-center">
<img src="{{ asset('frontend-new/img/logo.png') }}" class="displayed" alt="Best Customer Service Awards 2016"/>
</div>
<br><br>
<h1>Hello {{ Auth::user()->name }}</h1><p> Please check back later to submit your feedback</p>
@stop