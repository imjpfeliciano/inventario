@extends('app')

@section('content')
	@if ( count($productos) > 0)
		<div class="row">
			<div class="col s10 offset-s1">
				<div class="card-panel">
					<center><h3>INVENTARIO</h3></center>
					<div class="row">
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
		      								<a class="waves-effect waves-light btn" href="{{$producto->id}}/editar">Editar</a>
		      								<a class="waves-effect waves-light btn" href="{{$producto->id}}/eliminar">Eliminar</a>
	      								@endif
	      							@endif
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	@else
		No hay productos registrados
	@endif
@endsection