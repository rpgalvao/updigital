@extends('layouts.app')

@section('content')
	<div class="container">
		<h4 class="center">Lista de Cargos</h4>
		<div class="row">
			<nav>
				<div class="nav-wrapper blue-grey lighten-3">
					<div class="col s12">
					<a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
					<a class="breadcrumb">Lista de Cargos</a>
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
						<th>Descrição</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($registros as $registro)
						<tr>
							<td>{{$registro->id}}</td>
							<td>{{$registro->nome}}</td>
							<td>{{$registro->descricao}}</td>
							<td>
								@if($registro->nome == 'admin')
									<a class="btn blue-grey disabled">Editar</a>
									<a class="btn red disabled">Apagar</a>
								@else
									<a class="btn blue-grey" href="{{route('admin.papel.editar', $registro->id)}}">Editar</a>
									<a class="btn red" href="javascript: if(confirm('Deseja deletar esse registro?')){window.location.href = '{{route('admin.papel.deletar', $registro->id)}}'}">Apagar</a>
								@endif
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="row">
			<a href="{{route('admin.papel.adicionar')}}" class="btn blue-grey">Adicionar</a>
		</div>
	</div>
@endsection