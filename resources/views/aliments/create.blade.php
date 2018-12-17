@extends('\layouts.app')
@section ('content')
<div class="container">
	<h2 class="text-center">PRODUCTOS</h2>
	<h3 class="text-center">NUEVO PRODUCTO</h3>
	<div class="card border border-primary rounded">
		<div class="card-header">
		</div>
		<div class="card-body">

			{!! Form::open(['route'=>'aliments.store']) !!}

			@include('aliments.layouts.form')

			{!! Form::close() !!}

		</div>
	</div>
</div>
@endsection
