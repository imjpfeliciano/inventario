@extends('app')

@section('content')
	<div class="row">
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<form class="col s8" method="POST" action="{{ url('/auth/login') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="row">
				<div class="input-field col s6">
					<input type="email" class="validate" id="email" name="email" value="{{ old('email') }}">
					<label for="email">Email</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<input type="password" class="validate" id="password" name="password">
					<label for="password">Password</label>
				</div>
			</div>

			<div class="row">
				Recordarme
				<div class="switch">
					<label>NO<input type="checkbox"><span class="lever"></span>SI</label>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="remember"> Recordar
						</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<button type="submit" class="btn btn-primary">Iniciar Sesion</button>

					<a class="btn btn-link" href="{{ url('/password/email') }}">Olvidé mi contraseña u.u</a>
				</div>
			</div>
		</form>
	</div>
@endsection
