<div class="form-group">
	{{ Form::label('dia', 'Fecha del evento')}}
	{{ Form::date('dia', $event->dia, ['class'=>'form-control'] )}}
</div>
<div class="form-group">
	{{ Form::label('nombre', 'Nombre del contratante')}}
	{{ Form::text('nombre', $event->nombre, ['class'=>'form-control'] )}}
</div>
<div class="form-group d-flex justify-content-around mb-0 mt-5">

	{{ Form::submit('Guardar', ['class'=>'btn btn-primary'] )}}
	<a href="{{ route('events.index')}}" class="btn btn-primary ">Volver</a>

</div>
