@extends('\layouts.app')


@section ('content')



<div class="container">
	<h2 class="text-center">EVENTOS</h2>
	<h4 class="text-center">EDITAR EVENTO</h4>
	<div class="card border border-primary rounded">

		<div class="card-header">
			<h4><strong>Evento id:</strong> {{ $event->id }} </h4>

		</div>

		<div class="card-body">


			{!! Form::model($event, ['route'=>['events.update', $event->id],
			'method'=>'PUT']) !!}
			@include('events.layouts.form')
			{!! Form::close() !!}

			@include('events.layouts.form2')



		</div>



	</div>

	@endsection
