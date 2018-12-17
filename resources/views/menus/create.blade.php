@extends('\layouts.app')


@section ('content')

<div class="container">
	<h2 class="text-center">MENUS</h2>
	<h3 class="text-center">NUEVO MENU</h3>
	<div class="card border border-primary rounded">

		<div class="card-header">


		</div>

		<div class="card-body">

			{!! Form::open(['route'=>'menus.store']) !!}

			@include('menus.layouts.form')

			{!! Form::close() !!}

		</div>



	</div>

	@endsection
