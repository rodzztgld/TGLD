@extends('layouts.main')

@section('content')

<div id="indexHome">
	<div class="row">
		<div class="large-12 columns">
			<div class="logo-wrapper">
				<div id="logo">
					<h1 class="center">TGLD</h1>
				</div>
				<div id="subLogo">
					<h4 class="center">Because Simple Is Everything.</h4>
				</div>
			</div>
			<div class="center" id="loginForm">
				{{ Form::open(['url' => URL::route('login')]) }}

					<input type="text" class="login-username" name="username" placeholder="Username">

					<input type="password"  class="login-password" name="password" placeholder="Password">

					<span class="error"></span>
					
					<input type="checkbox"  class="login-remember" name="remember" id="remember">
					<label for="remember">Remember me?</label><br/>

					<input type="submit" value="Login" class="button" id="loginSubmit">

				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>

@stop