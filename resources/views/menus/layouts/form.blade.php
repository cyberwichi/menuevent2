<div class="form-group">
	{{ Form::label('nombre', 'Nombre del menu')}}
	{{ Form::text('nombre', null, ['class'=>'form-control'] )}}
</div>
<div class="form-group">
	{{ Form::label('precio', 'Precio del menu')}}
	{{ Form::text('precio', null, ['class'=>'form-control'] )}}
</div>

<div class="form-group d-flex justify-content-around mb-0 mt-5">

	{{ Form::submit('Guardar', ['class'=>'btn btn-primary'] )}}
	<a href="{{ route('menus.index')}}" class="btn btn-primary ">Volver</a>

</div>
