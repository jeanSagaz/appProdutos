@extends('index')

	@section('content')

		<div class="container">

			<script src="../../js/jquery-1.11.3.min.js"></script>
			<script src="../../js/jquery.validate.min.js"></script>
			<script src="../../js/formValid.js"></script>
		
			<h1>Novo Produto</h1>

			@if ($errors->any())
				<ul class="alert alert-warning">
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			@endif

			{!! Form::open(array('url'=>'produto/createPost', 'id'=> 'form')) !!}

				<!-- Nome Form Input -->
				<div class="form-group">
					{!! Form::label('nome', 'Nome:') !!}
					{!! Form::text('nome', null, ['class'=>'form-control']) !!}
				</div>

				<!-- Descrição Form Input -->
				<div class="form-group">
					{!! Form::label('descricao', 'Descrição:') !!}
					{!! Form::textarea('descricao', null, ['class'=>'form-control']) !!}
				</div>

				<!-- Preço Form Input -->
				<div class="form-group">
					{!! Form::label('preco', 'Preço:') !!}
					{!! Form::number('preco', null, ['class'=>'form-control','step'=>'any']) !!}
				</div>				

				<div class="form-group">
					{!! Form::submit('Novo Produto', ['class'=>'btn btn-primary']) !!}
				</div>

			{!! Form::close() !!}
			<p><a href="/" title="Voltar">Voltar</a></p>

		</div>
		

	@endsection