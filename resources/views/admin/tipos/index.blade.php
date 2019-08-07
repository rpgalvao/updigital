@extends('layouts.app')

@section('content')
	<div class="container">
		<h4 class="center">Lista de Tipos de Imóveis</h4>
		<div class="row">
			<nav>
				<div class="nav-wrapper blue-grey lighten-3">
					<div class="col s12">
					<a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
					<a class="breadcrumb">Tipos de Imóveis</a>
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
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($registros as $registro)
						<tr>
							<td>{{$registro->id}}</td>
							<td>{{$registro->titulo}}</td>
							<td>
								<a class="btn blue-grey" href="{{route('admin.tipos.editar', $registro->id)}}">Editar</a>
								<a class="btn red" href="javascript: if(confirm('Deseja deletar esse registro?')){window.location.href = '{{route('admin.tipos.deletar', $registro->id)}}'}">Apagar</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="row">
			<a href="{{route('admin.tipos.adicionar')}}" class="btn blue-grey">Adicionar</a>
		</div>
	</div>
@endsection