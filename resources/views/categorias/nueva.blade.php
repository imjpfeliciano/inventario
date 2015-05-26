@extends('app')

@section('content')
	<div class="row">
		<div class="col s8 offset-s2">
		<div class="card-panel">
			<center><h4>Registro de Categorías</h4></center>
			<form id='formulario' method='post' enctype='multipart/form-data' action=''>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="row">
					<div class="input-field col s12">
						<input id="id_nombre_categoria" name="nombre_categoria" type="text" class="validate"/>
						<label for="id_nombre_categoria">Nombre de la Categoría</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
						<textarea id="id_descripcion" name="descripcion" class="materialize-textarea validate"></textarea>
						<label for="id_descripcion">Descripcion</label>
					</div>
				</div>

				<p><button type='submit' class="btn waves-effect waves-light" value='Registrar'>Registrar
					<i class="mdi-content-send right"></i>
				</button></p>
			</form>
		</div>
	</div>
	</div>
@endsection