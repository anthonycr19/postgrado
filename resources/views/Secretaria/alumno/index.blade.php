@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading" align="center">Alumnos</div>
				<div class="panel-body">
					<a class="btn btn-info" href="#" role="button">Nuevo Alumno</a>
					<hr align>
					<table class="table table-bordered">
	  					<tr>	
		  					<th>ID</th>	
		  					<th>Nombre</th>
		  					<th>Apellidos</th>
		  					<th>Email</th>
		  					<th>Opciones</th>
		  				</tr>
		  				@foreach($alumnos as $alumno)
		  				<tr>
		  					<td>{{ $alumno->id_profile }}</td>
		  					<td>{{ $alumno->nombre }}</td>
		  					<td>{{ $alumno->apellidop.' '.$alumno->apellidom }}</td>
		  					<td>{{ $alumno->correo }}</td>
		  					<td>
		  						<a href="">Editar</a>
		  						<a href="">Eliminar</a>
		  					</td>
		  				</tr>
		  				@endforeach
					</table>
					{!! $alumnos->setPath('')->render() !!}
				</div>
				
			</div>
		</div>
	</div>
</div>
@endsection