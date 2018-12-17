<div class="form-group">
		{{ Form::label('nombre', 'Nombre del producto')}}
		{{ Form::text('nombre', null, ['class'=>'form-control'] )}}	
	</div>
	<div class="form-group">
		{{ Form::label('descripcion', 'Descripcion del producto')}}
		{{ Form::textarea('descripcion', null, ['class'=>'form-control'] )}}	
	</div>
	<div class="form-group d-flex justify-content-around mb-0 mt-5">

		{{ Form::submit('Guardar', ['class'=>'btn btn-primary'] )}}	
		

		<a href="{{ route('aliments.index')}}" class="btn btn-primary ">Volver</a>

	</div>
	