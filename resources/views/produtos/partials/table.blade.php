<table class="table table-striped table-hover">
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Preço</th>
		<th>Ações</th>
	</tr>

	@foreach($produtos as $produto)
		<tr>
			<td>{{$produto->id}}</td>
			<td>{{$produto->nome}}</td>
			<td>{{$produto->preco}}</td>			
			<td>
				<a href="produto/edit/{{$produto->id}}" class="btn btn-info" title="Editar">
					<span class="glyphicon glyphicon-pencil"></span>
				</a>&nbsp
				<a href="produto/show/{{$produto->id}}" class="btn btn-primary" title="Visualizar">
					<span class="glyphicon glyphicon-search"></span>
				</a>
				<a href="{{$produto->id}}" class="btn btn-default desc" title="Descriçao">
					<span class="glyphicon glyphicon-euro"></span>
				</a>
			</td>
		</tr>
	@endforeach

	<script type="text/javascript">
		$(document).ready(function(){

			var url = "produto/descricao";

			$('.desc').click(function(event){
				event.preventDefault();

		        var id = $(this).attr('href');

		        $.get(url + '/' + id, function (data) {
		            alert(data);
		        }) 
		    });

		});	
	</script>
	

</table>