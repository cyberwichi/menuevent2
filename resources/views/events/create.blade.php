@extends('\layouts.app')
@section ('content')
<div class="container">
	<h2 class="text-center">EVENTOS</h2>
	<h4 class="text-center">NUEVO EVENTO</h4>
	<div class="card border border-primary rounded">
		<div class="card-body">

			{!! Form::open(['route'=>'events.store']) !!}
			@include('events.layouts.form')
			{!! Form::close() !!}

		</div>
	</div>
</div>
@endsection
