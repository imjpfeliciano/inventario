@extends('app')

@section('content')

	
	<div class="row">
		<div class="col s8 offset-s2">
		<div class="card-panel">
			<center><h4>Editando {{$producto->nombre}}</h4></center>
			<form id='formulario' method='post' enctype='multipart/form-data'>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="row">
					<div class="input-field col s12">
						<input id="id_nombre_producto" name="nombre_producto" type="text" class="validate" value="{{$producto->nombre}}"/>
						<label for="id_nombre_producto">Nombre del Producto</label>
					</div>
				</div>
				
				<div class="row">
					<div class="input-field col s12">
						<textarea id="id_descripcion" name="descripcion" class="materialize-textarea validate">{{$producto->descripcion}}</textarea>
						<label for="id_descripcion">Descripcion</label>
					</div>
				</div>

				<div class="row">
					<div class="file-field input-field col s12">
						<input class="file-path validate" type="text" value="{{$producto->original_filename}}"/>
						<div class="btn">
							<span>Foto</span>
							<input id="id_imagen" name="imagen" type="file"/>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s4">
						<input id="id_min_stock" name="min_stock" type="number" class="validate" value="{{$producto->min_stock}}"/>
						<label for="id_min_stock">Stock Minimo</label>
					</div>

					<div class="input-field col s4">
						<input id="id_max_stock" name="max_stock" type="number" class="validate" value="{{$producto->max_stock}}"/>
						<label for="id_max_stock">Stock Maximo</label>
					</div>

					<div class="input-field col s4">
						<input id="id_in_stock" name="in_stock" type="number" class="validate" value="{{$producto->act_stock}}"/>
						<label for="id_in_stock">Stock Actual</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s2">
						<input id="id_precio" name="precio" type="number" step="0.01" class="validate" value="{{$producto->precio}}"/>
						<label for="id_precio">Precio</label>
					</div>
				</div>
				<p><button type='submit' class="btn waves-effect waves-light" value='Registrar'>Registrar
					<i class="mdi-content-send right"></i>
				</button></p>
			</form>
		</div>
	</div>
@endsection