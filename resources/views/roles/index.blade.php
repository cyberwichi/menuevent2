@extends('\layouts.app')


@section ('content')



<div class="container">
	<h2 class="text-center">ROLES</h2>

	@can('roles.create')

	<a href="{{ route('roles.create') }}" class="btn pull-right btn-primary btn-sm mb-5">Crear Rol</a>


	@endcan

	<!--		paginacion-->
	{{ $roles->render()}}

	<div class="row justify-content-center container">

		@if (session('status'))
		<div class="alert alert-success" role="alert">
			{{ session('status') }}
		</div>
		@endif
		<style>



		</style>
		<div class="card-columns ">
			@foreach($roles as $role)

			<div class="card border border-primary rounded ">

				<div class="card-header">
					<h4><strong>Rol id:</strong> {{ $role->id }} </h4>

				</div>

				<div class="card-body">

					<p class="card-title"><strong>Nombre de rol:</strong> {{ $role->name }}</p>

				</div>
				<div class='m-2 d-flex justify-content-around'>



					@can('roles.show')

					<a href="{{ route('roles.show', $role->id) }}" title="Ver Rol" class="btn btn-sm btn-success  "><i class="fas fa-eye"></i></a>

					@endcan

					@can('roles.edit')

					<a href="{{ route('roles.edit', $role->id) }}" title="Editar Rol" class="btn btn-sm btn-primary  "><i class="fas fa-marker"></i></a>

					@endcan

					@can('roles.destroy')

					{!! Form::open(['route'=> ['roles.destroy', $role->id],
					'method' => 'DELETE' ]) !!}

					<button title="Eliminar Rol" class="btn  btn-danger fas fa-trash-alt "></button>


					{!! Form::close() !!}


					@endcan


				</div>


			</div>
			@endforeach

		</div>
	</div>
	{{ $roles->render()}}
	</ div>

	@endsection
