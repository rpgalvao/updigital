@extends('layouts.app')

@section('content')
	<div class="container">
		<h4 class="center">Lista de Cidades</h4>
		<div class="row">
			<nav>
				<div class="nav-wrapper blue-grey lighten-3">
					<div class="col s12">
					<a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
					<a class="breadcrumb">Cidades</a>
					</div>
				</div>
			</nav>
		</div>
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Estado</th>
						<th>Sigla do Estado</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($registros as $registro)
						<tr>
							<td>{{$registro->id}}</td>
							<td>{{$registro->nome}}</td>
							<td>{{$registro->estado}}</td>
							<td>{{$registro->sigla_estado}}</td>
							<td>
								<a class="btn blue-grey" href="{{route('admin.cidades.editar', $registro->id)}}">Editar</a>
								<a class="btn red" href="javascript: if(confirm('Deseja deletar esse registro?')){window.location.href = '{{route('admin.cidades.deletar', $registro->id)}}'}">Apagar</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="row">
			<a href="{{route('admin.cidades.adicionar')}}" class="btn blue-grey">Adicionar</a>
		</div>
	</div>
@endsection