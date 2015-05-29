@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading" style="font-size:15px">Nuevo Alumno</div>

				<div class="panel-body">
				{!! Form::open(['route' => 'Secretaria.alumno.store','method' => 'POST'])!!}
					<form>
						<!--Codigo del Alumno-->
						  <div class="form-group">
						    	{!!Form::label('codigo', 'Codigo')!!}
						    	{!!Form::text('codigo', null,['class' => 'form-control','placeholder'=>'Default'])!!}
						  </div>
						  <!--Nombre del Alumno-->
						  <div class="form-group">
						    	{!! Form::label('nombre','Nombres') !!}
						    	{!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombres'])!!}
						  </div>
						  <!--Apellido paterno del Alumno-->
						  <div class="form-group">
						    	{!! Form::label('apellidop','Ap. Paterno')!!}
						    	{!! Form::text('apellidop',null,['class'=>'form-control','placeholder' => 'Apellido Paterno'])!!}
						  </div>
						  <!--Apellido materno del Alumno-->
						  <div class="form-group">
						    	{!! Form::label('apellidom','Ap. Materno')!!}
						    	{!! Form::text('apellidom',null,['class'=>'form-control','placeholder' => 'Apellido Materno'])!!}
						  </div>
						  <!--DNI del Alumno-->
						  <div class="form-group">
						    	{!! Form::label('DNI','DNI ') !!}
						    	{!! Form::text('DNI',null,['class'=>'form-control','placeholder'=>'Dni'])!!}
						  </div>
						  <!--Email del Alumno-->
						  <div class="form-group">
						    	{!!Form::label('correo','E-mail')!!}
						    	{!!Form::email('correo',null,['class'=>'form-control','placeholder'=>'Email'])!!}
						  </div>
						  <!--Celular del Alumno-->
						  <div class="form-group">
						    	{!!Form::label('celular','Celular')!!}
						    	{!!Form::email('celular',null,['class'=>'form-control','placeholder'=>'Phone'])!!}
						  </div>
						  <!--Direccion del Alumno-->
						  <div class="form-group">
						    	{!!Form::label('direccion','Direcciòn')!!}
						    	{!!Form::email('direccion',null,['class'=>'form-control','placeholder'=>'Direcciòn'])!!}
						  </div>
						  <!--Nacimiento del Alumno-->
						  <div class="form-group">
						    	{!!Form::label('fechaNacimiento','Fecha Nacimiento')!!}
						    	{!!Form::email('fechaNacimiento',null,['class'=>'form-control','placeholder'=>'Born'])!!}
						  </div>
						  <div class="form-group">
						    	{!!Form::label('id_detalle','Tipo de Usuario')!!}
						    	{!!Form::text('id_detalle','3')	!!}
						  </div>
						  <div>
						  {!!Form::submit('Registrar!',['class'=>'btn btn-primary']) !!}
						  </div>
						  {!! Form::close() !!}
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
