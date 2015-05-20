<!DOCTYPE html>
<html lang="en">
<head>
	<title>Laravel</title>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
  	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
  	
  	@yield('encabezado')
</head>

<body>
	@if (Auth::guest())
		<div class="navbar-fixed">
			<nav>
		    	<div class="nav-wrapper deep-purple lighten-3">
		      		<a href="/" class="brand-logo"><i class="mdi-action-shopping-cart">Inventario</i></a>

		      		<ul id="nav-mobile" class="right hide-on-med-and-down">
		        		<li><a href="/auth/login">Login</a></li>
		        		<li><a href="#">Carrito</a></li>
		      		</ul>
		    	</div>
		  	</nav>
	  	</div>
	@else
		<div class="navbar-fixed">
	  			<ul id="dropdown1" class="dropdown-content">
	  				<li><a href="#">Mi Perfil</a></li>
	  				<li><a href="/auth/logout">Cerrar sesion</a></li>
				</ul>

				<nav>
		    	<div class="nav-wrapper deep-purple lighten-3">
		    		@if (Auth::user()->type)
		      			<a href="#" class="brand-logo">Inventario</a>
		      		@else
		      			<a href="#" class="brand-logo">Inventario</a>
	      			@endif

	      			<ul id="nav-mobile" class="left hide-on-med-and-down">
		      			<li><a href="">Productos</a></li>
		      		</ul>
		      		<ul id="nav-mobile" class="right hide-on-med-and-down">
		      			<li><a href="">carrito</a></li>
		      			<li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{Auth::user()->name}}<i class="mdi-navigation-arrow-drop-down right"></i></a></li>

		      		</ul>
		    	</div>
		  	</nav>
	  	</div>		
	@endif

	@yield('content')
</body>
</html>
