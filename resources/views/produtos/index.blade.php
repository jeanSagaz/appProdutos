	@extends('index')

	@section('content')
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>

		<script type="text/javascript">
			$( document ).ready(function() {
				$("#btnBuscar").click(function( event ) {
				  //event.preventDefault();				  
				  //$("#form").attr( {action: '/'+$('#name').val(), method: 'get'} ).submit();
				});
			});
		</script>

		<div class="container">

			{!! Form::open(['url'=>"/", 'method'=>'get', 'id'=>'form']) !!}

				<!-- Nome Form Input -->
				<div class="form-group">
					{!! Form::label('nome', 'Nome:') !!}
					{!! Form::text('nome', $nome, ['class'=>'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::submit('Filtrar por nome', ['class'=>'btn btn-primary', 'id'=>'btnBuscar']) !!}
				</div>

			{!! Form::close() !!}

			@include('produtos.partials.table')
			<br/>
			<a href="produto/create" class="btn btn-default">Novo Produto</a>

		</div>		
		
	@endsection