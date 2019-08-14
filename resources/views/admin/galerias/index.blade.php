@extends('layouts.app')

@section('content')
	<div class="container">
		<h4 class="center">Galeria de Imagens</h4>
		<div class="row">
			<nav>
				<div class="nav-wrapper blue-grey lighten-3">
					<div class="col s12">
					<a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
					<a href="{{route('admin.imoveis')}}" class="breadcrumb">Lista de Imóveis</a>
					<a class="breadcrumb">Lista de Imagens</a>
					</div>
				</div>
			</nav>
		</div>
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>Título</th>
						<th>Descrição</th>
						<th>Imagem</th>
						<th>Ordem</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($registros as $registro)
						<tr>
							<td>{{$registro->titulo}}</td>
							<td>{{$registro->descricao}}</td>
							<td><img src="{{asset($registro->imagem)}}" width="100" alt="Imagem do imóvel"></td>
							<td>{{$registro->order}}</td>
							<td>
								<a class="btn blue-grey" href="{{route('admin.galerias.editar', $registro->id)}}">Editar</a>
								<a class="btn red" href="javascript: if(confirm('Deseja deletar esse imóvel?')){window.location.href = '{{route('admin.galerias.deletar', $registro->id)}}'}">Apagar</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="row">
			<a href="{{route('admin.galerias.adicionar', $imovel->id)}}" class="btn blue-grey">Adicionar</a>
		</div>
	</div>
@endsection