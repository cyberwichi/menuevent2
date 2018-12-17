<div class="form-group">
	{{ Form::label('name', 'Nombre del Rol')}}
	{{ Form::text('name', null, ['class'=>'form-control'] )}}	
</div>
<div class="form-group">
	{{ Form::label('slug', 'Slug del Rol')}}
	{{ Form::text('slug', null, ['class'=>'form-control'] )}}	
</div>
<div class="form-group">
	{{ Form::label('description', 'Descripcion del Rol')}}
	{{ Form::textarea('description', null, ['class'=>'form-control'] )}}	
</div>

<hr>

<h3>Permiso especial</h3>
<div class="form-group">
	<label> {{ Form::radio('special', 'all-access')}} Acceso total </label>
	<label> {{ Form::radio('special', 'no-access')}} Acceso Bloqueado</label>	
</div>
<hr>

<h3>Lista de Permisos</h3>
<div class="form-group">
	
	<ul class="list-unstyled">
		
		@foreach($permissions as $permission)
		<li>
			<label >
				{{ Form::checkbox('permissions[]', $permission->id, null)}}
				{{$permission->name}}
				<em>( {{ $permission->description ?: 'Sin Descripcion' }} )</em>				
			</label>	
		</li>
		@endforeach
		
	</ul>
	
</div>


<div class="form-group">
	
	{{ Form::submit('Guardar', ['class'=>'btn btn-primary'] )}}	
</div>

<a href="{{ route('roles.index')}}" class="btn btn-primary"> Volver</a>
<div class="form-group">
	
	