<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel - Funcionário</title>
		<link href="{{ asset('/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
		<!-- Fonts -->
		<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media quer ies -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		@if (Auth::guest())

			<nav class="navbar navbar-default">

				<ul class="nav navbar-nav navbar-left">

					<li>
						<a href="{{ url('/auth/login') }}">Login</a>
					</li>
					<li>
						<a href="{{ url('auth/register') }}">Registrar</a> 
					</li>

				</ul>

			</nav>

		@else
			
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

			<nav class="navbar navbar-default">

				<div class="btn-group close">
					<a href="#" class="btn btn-default">Usuário: {{ Auth::user()->name }}</a>
	                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
	                  	<span class="caret"></span>
	                </a>
	                <ul class="dropdown-menu">
	                   	<a href="{{ url('/auth/logout') }}">Sair</a>
	                </ul>
                </div>

				<div class="container-fluid" style="padding-top: 10px;">
					Produto - CRUD
					<div class="navbar-header">
						<a class="navbar-brand" href="/">LARAVEL</a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="{{ url('/') }}">Home</a></li>
						</ul>
					</div>
				</div>

			</nav>

			@yield('content')

			<br/>

		@endif

		<div class="footer">
			<div class="container">
				<p>Desenvolvido por Jean</p>
			</div>
		</div>
		
	</body>
</html>