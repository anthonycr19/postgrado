@extends('app')

@section('content')
<div class="container">
	<div class="row">
	<h2 align="center">MODULO SECRETARIA</h2>
	<a class="btn btn-info" href="{{ route('Secretaria.alumno.create')}}" role="button">Nuevo Alumno</a>
	<hr>
		<div class="col-md-15 col-md-offset-0">
			<div class="panel panel-default">
				
				<div class="panel-heading" align="Center" style="font-size:20px">Listado de Alumnos</div>
				<div class="table-responsive">
	 				 	<table class="table">
	 				 	<!--TITLE-->
	 				 		<th class="success">Nº</th>
	 				 		<th class="success">Codigo</th>
	 				 		<th class="success">Nombre</th>
	 				 		<th class="success">Apellidos</th>
	 				 		<th class="success">DNI</th>
	 				 		<th class="success">Email</th>
	 				 		<th class="success">Opciones</th>
	 				 		<!--DATA-->
	 				 		@foreach($alumnos as $alumno)
	 				 		<tr>
								<td>{{ $alumno->id_profile }}</td>
								<td>{{ $alumno->codigo }}</td>
								<td>{{ $alumno->nombre }}</td>
								<td>{{ $alumno->getApellidosAttribute() }}</td>
								<td>{{ $alumno->DNI }}</td>
								<td>{{ $alumno->correo }}</td>
								<td>
									<a class="btn btn-success btn-sm" href="#" role="button">Editar</a>
									<a class="btn btn-danger btn-sm" href="#" role="button">Eliminar</a>
							</tr>
	 				 		@endforeach
	  					</table>
	  					{!! $alumnos->setPath('')->render() !!}
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
