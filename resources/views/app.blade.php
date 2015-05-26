 <!DOCTYPE html>
  <html>
    <head>
     
    </head>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Laravel</title>

	 <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  	@yield('encabezado')
</head>

<body>
	@if (Auth::guest())
		<div class="navbar-fixed">
			<nav>
		    	<!--<div class="nav-wrapper deep-purple lighten-3">-->
		    	<div class="nav-wrapper indigo darken-3">
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
		    	<div class="nav-wrapper indigo darken-3">
		    		@if (Auth::user()->type)
		      			<a href="#" class="brand-logo center">Admin</a>
		      		@else
		      			<a href="#" class="brand-logo center">User</a>
	      			@endif

	      			<ul id="nav-mobile" class="left hide-on-med-and-down">
        				<li><a href="/productos">inventario</a></li>
      				</ul>

		      		<ul id="nav-mobile" class="right hide-on-med-and-down">
		      			<li><a href="">carrito</a></li>
		      			<li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{Auth::user()->name}}<i class="mdi-navigation-arrow-drop-down right"></i></a></li>

		      		</ul>
		    	</div>
		  	</nav>
	  	</div>		
	@endif

	@if (Session::has('message'))
    	<a class="btn"  onclick="style.display = 'none'" ><i class="mdi-content-clear right"></i>{{ Session::get('message')}}</a>
	@endif

	<div class="container">
		@yield('content')
	</div>

	<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
</body>
</html>


