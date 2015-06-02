@extends('app')

@section('content')
	
		<div class="row">
			<div class="col s10 offset-s1">
				<div class="card-panel">
					<center><h3>INVENTARIO</h3></center>
					<div class="row">
						@if ( count($productos) > 0)
							@foreach ($productos as $producto)
								<div class="col s12">
									<hr>
									<div class="col s4">
										<img src="{{route('getentry',$producto->id)}}" class="responsive-img" >
									</div>

									<div class="col s8">
										<div class="row">
											<a href="#">{{$producto->nombre}}</a>
										</div>
										<div class="row">
											<p>{{$producto->descripcion}}</p>
										</div>
										<div class="row">
											<h2><b>${{$producto->precio}}</b></h2>
											<div class="row">
												<span>{{$producto->act_stock}} EN STOCK</span>
											</div>
										</div>
										@if(Auth::check())
											@if(Auth::user()->type == 1)
			      								<a class="waves-effect waves-light btn" href="{{URL::current()}}/{{$producto->id}}/editar">Editar</a>
			      								<a class="waves-effect waves-light btn" href="{{URL::current()}}/{{$producto->id}}/eliminar">Eliminar</a>
		      								@endif
		      							@endif
									</div>
								</div>
							@endforeach
						@else
							No hay productos registrados
						@endif

						@if(Auth::check())
							@if(Auth::user()->type)
								<div class="col s12">
									<a href="{{URL::current()}}/nuevo" class="right waves-effect waves-light btn"><i class="mdi-content-add left"></i>Agregar Producto</a>
								</div>
							@endif
						@endif
					</div>
				</div>
			</div>
		</div>
	
		
	
@endsection