@extends('app')

@section('content')
	@if(count($categorias) > 0)
		<ul class="collection with-header">
			<li class="collection-header"><h4>Categorías</h4></li>
			@foreach($categorias as $categoria)
				<a href="{{route('getcategoria',$categoria->id)}}" class="collection-item">{{$categoria->nombre}}</li>
			@endforeach
		</ul>
	@else
		No existen categorías registradas.
	@endif
@endsection