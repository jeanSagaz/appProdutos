@extends('index')

	@section('content')

		<div class="container">
			<h1>Visualizar Produto: {{$produto->nome}}</h1>

			@if ($errors->any())
				<ul class="alert alert-warning">
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			@endif

			{!! Form::open(['url'=>"produto/delete/$produto->id", 'method'=>'delete']) !!}

				<!-- Nome Form Input -->
				<div class="form-group">
					{!! Form::label('nome', 'Nome:') !!}
					{!! Form::text('nome', $produto->nome, ['class'=>'form-control', 'readonly' => 'true']) !!}
				</div>

				<!-- Descrição Form Input -->
				<div class="form-group">
					{!! Form::label('descricao', 'Descrição:') !!}			
					{!! Form::textarea('descricao', $produto->descricao, ['class'=>'form-control', 'readonly' => 'true']) !!}
				</div>

				<!-- Preço Form Input -->
				<div class="form-group">
					{!! Form::label('preco', 'Preço:') !!}			
					{!! Form::number('preco', $produto->preco, ['class'=>'form-control', 'readonly' => 'true']) !!}
				</div>

				<div class="form-group">
					{!! Form::submit('Apagar Produto', ['class'=>'btn btn-primary']) !!}
				</div>

			{!! Form::close() !!}
			<p><a href="/" title="Voltar">Voltar</a></p>
		</div>

	@endsection