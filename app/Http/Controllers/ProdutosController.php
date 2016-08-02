<?php

namespace appProdutos\Http\Controllers;

use Illuminate\Http\Request;

use appProdutos\Http\Requests;

use appProdutos\Produto;
use appProdutos\Http\Requests\ProdutoRequest;

use Response;

class ProdutosController extends Controller
{
    public function index(Request $request) 
    {
    	$nome = $request->get('nome', '');
		$produtos = (!empty($nome)) ? Produto::where('nome', 'LIKE', '%'.$nome.'%')->get() : Produto::all() ;
		return view('produtos.index',['produtos'=>$produtos, 'nome'=>$nome]);
	}	

	public function show($id)
	{
		$produto = Produto::find($id);
		return view('produtos.show', compact('produto'));
	}

	public function create()
 	{
 		return view('produtos.create');
 	}

 	public function createPost(ProdutoRequest $request)
	{
		$input = $request->all();
		Produto::create($input);

		return redirect('/');
	}	

	public function edit($id)
	{
		$produto = Produto::find($id);
		return view('produtos.edit', compact('produto'));
	}

	public function update($id, ProdutoRequest $request)
	{		
		$produto = Produto::find($id);
		
		$produto->nome = $request->get('nome');
		$produto->descricao = $request->get('descricao');
		$produto->preco = $request->get('preco');
		
		$produto->update();

		return redirect('/');
	}

	public function delete($id)
	{
		$produto = Produto::find($id);
		$produto->delete();

		return redirect('/');
	}

	public function descricao($id)
	{
		$produto = Produto::find($id);
		return Response::json($produto->descricao);
	}
}
