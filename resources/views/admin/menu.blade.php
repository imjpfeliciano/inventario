
@section('content')
	<div class='row'>
		<div class="col s6">
			<div class="center promo promo-example">
				<i class="large mdi-action-account-child"></i>
				<p><a href="{{URL::current()}}/usuarios"><h4>Usuarios</h4></a></p>
				<p class="light center">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components.</p>
			</div>
		</div>

		<div class="col s6">
			<div class="center promo promo-example">
				<i class="large mdi-action-dns"></i>
				<p><a href="{{URL::current()}}/categorias"><h4>Categorías</h4></a></p>
				<p class="light center">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components.</p>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="col s6">
			<div class="center promo promo-example">
				<i class="large mdi-action-assignment"></i>
				<p><a href="{{URL::current()}}/productos"><h4>Inventario</h4></a></p>
				<p class="light center">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components.</p>
			</div>
		</div>

		<div class="col s6">
			<div class="center promo promo-example">
				<i class="large mdi-action-assignment-turned-in"></i>
				<p><a href=""><h4>Reportes</h4></a></p>
				<p class="light center">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components.</p>
			</div>
		</div>

	</div>
@endsection