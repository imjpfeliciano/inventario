@extends('app')

@section('content')
	@if ( count($productos) > 0)
		Lista :v
	@else
		No hay productos registrados
	@endif
@endsection