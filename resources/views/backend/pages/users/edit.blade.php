@extends('backend.layouts.app')

@section('title')Edit user
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
				<!-- start form for validation -->
				{!! Form::model($user, ['route' => ['users.update', $user],'method' =>'put','files'=>true,'role'=>'form','class'=>'form-horizontal form-label-left'])!!}
        			{!! csrf_field() !!}
					@include('backend.pages.users._form')
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection
