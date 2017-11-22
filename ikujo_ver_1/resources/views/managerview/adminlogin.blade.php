@extends('managerview.master')
@section('title', 'login')
@section('view')
    @parent
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="{{asset('css/login_style.css')}}">
	</head>
	<body>
		<div id="parentContainer" >
			<div id="mainContaint">
				<div id="header">
					<div class="content">
						<h3>Ikujo Login</h3>
					</div>
				</div>
				<div id="form_login" ">
					<form  method="post" action="{{route('checkadminlogin')}}" id="login">
						{{csrf_field()}}
						<div id="username">
							<input placeholder="Username" type="text" required="" name="username">
						</div>
						<div id="password">
							<input placeholder="Password" type="password" required=""  name="password">
						</div>
					</form>

					<button type="submit" form="login" value="submit" name="submit">Login</button>
					@if (session('loginabort'))
					    <div class="alert alert-success">
					        {{ session('loginabort') }}
					    </div>
					@endif
				</div>
			</div>		
		</div>
	</body>
	</html>

@endsection