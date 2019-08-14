@extends('layouts.app')

@section('content')
	<div class="container">
		<h4 class="center">Lista de Imóveis</h4>
		<div class="row">
			<nav>
				<div class="nav-wrapper blue-grey lighten-3">
					<div class="col s12">
					<a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
					<a class="breadcrumb">Imóveis</a>
					</div>
				</div>
			</nav>
		</div>
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Título</th>
						<th>Status</th>
						<th>Cidade</th>
						<th>Valor</th>
						<th>Imagem</th>
						<th>Publicado</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($registros as $registro)
						<tr>
							<td>{{$registro->id}}</td>
							<td>{{$registro->titulo}}</td>
							<td>{{$registro->status}}</td>
							<td>{{$registro->cidade->nome}}</td>
							<td>R$ {{number_format($registro->valor, 2, ",", ".")}}</td>
							<td><img src="{{asset($registro->imagem)}}" width="100" alt="Imagem do imóvel"></td>
							<td>{{$registro->publicar}}</td>
							<td>
								<a class="btn blue-grey" href="{{route('admin.galerias', $registro->id)}}">Imagens</a>
								<a class="btn blue-grey" href="{{route('admin.imoveis.editar', $registro->id)}}">Editar</a>
								<a class="btn red" href="javascript: if(confirm('Deseja deletar esse imóvel?')){window.location.href = '{{route('admin.imoveis.deletar', $registro->id)}}'}">Apagar</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="row">
			<a href="{{route('admin.imoveis.adicionar')}}" class="btn blue-grey">Adicionar</a>
		</div>
	</div>
@endsection