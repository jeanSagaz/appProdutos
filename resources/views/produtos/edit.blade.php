@extends('index')

	@section('content')

		<div class="container">

			<script src="../../js/jquery-1.11.3.min.js"></script>
			<script src="../../js/jquery.validate.min.js"></script>
			<script src="../../js/formValid.js"></script>

			<h1>Editar Produto: {{$produto->nome}}</h1>

			@if ($errors->any())
				<ul class="alert alert-warning">
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			@endif

			{!! Form::open(['url'=>"produto/update/$produto->id", 'method'=>'put', 'id'=>'form']) !!}

				<!-- Nome Form Input -->
				<div class="form-group">
					{!! Form::label('nome', 'Nome:') !!}
					{!! Form::text('nome', $produto->nome, ['class'=>'form-control']) !!}
				</div>

				<!-- Descrição Form Input -->
				<div class="form-group">
					{!! Form::label('descricao', 'Descrição:') !!}			
					{!! Form::textarea('descricao', $produto->descricao, ['class'=>'form-control']) !!}
				</div>

				<!-- Preço Form Input -->
				<div class="form-group">
					{!! Form::label('preco', 'Preço:') !!}			
					{!! Form::number('preco', $produto->preco, ['class'=>'form-control']) !!}
				</div>				
				

				<div class="form-group">
					{!! Form::submit('Salvar Produto', ['class'=>'btn btn-primary']) !!}
				</div>

			{!! Form::close() !!}
			<p><a href="/" title="Voltar">Voltar</a></p>

		</div>

	@endsection