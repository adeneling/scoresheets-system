@extends('backend.layouts.app')

@section('title')Sessions
@stop

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Sessions</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<div class="x_content">
					<ul class="list-unstyled timeline">
						<?php $no = 1; ?>
                		@foreach($sessions as $session)
							<li>
								<div class="block">
									<div class="tags">
										<a href="#" class="tag">
											<span>Session - {{ $no++ }}</span>
										</a>
									</div>
									<div class="block_content">
										<h2 class="title">
											<a>{{ $session->name }}</a>
										</h2>
										<p class="excerpt">-</a>
										</p>
									</div>
								</div>
							</li>
						@endforeach
					</ul>
                </div>
              </div>
            </div>
		</div>
	</div>
</div>
@endsection
