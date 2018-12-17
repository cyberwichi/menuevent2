@extends('\layouts.app')

@section ('content')

<div class="container">
	<h2 class="text-center">MENUS</h2>
	<h3 class="text-center">EDICION DE MENU</h3>
	<div class="card border border-primary rounded">

		{!! Form::model($menu, ['route'=>['menus.update', $menu->id],
		'method'=>'PUT']) !!}
		@include('menus.layouts.form')
		{!! Form::close()!!}

		@include('menus.layouts.form2')
	</div>
</div>

@endsection
