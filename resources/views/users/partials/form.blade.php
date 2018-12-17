


<div class="form-group">
	{{ Form::label('name', 'Nombre del usuario')}}
	{{ Form::text('name', null, ['class'=>'form-control', 'autocomplete'=>'off'] )}}	
</div>
<hr>
<h3>Lista de Roles</h3>
<div class="form-group">
	
	<ul class="list-unstyled">
		
		@foreach($roles as $role)
		<li>
			<label >
				{{ Form::checkbox('roles', $role->id, null)}}
				{{$role->name}}
				<em>( {{ $role->description ?: 'Sin Descripcion' }} )</em>				
			</label>	
		</li>
		@endforeach
		
	</ul>
	
</div>


<div class="form-group">
	
	{{ Form::submit('Guardar', ['class'=>'btn btn-primary'] )}}	
</div>

<a href="{{ route('users.index')}}" class="btn btn-primary"> Volver</a>