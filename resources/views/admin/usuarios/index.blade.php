@extends('layouts.app')

@section('content')
	<div class="container">
		<h4 class="center">Lista de Usuários</h4>
		<div class="row">
			<nav>
				<div class="nav-wrapper upcolor lighten-3">
					<div class="col s12">
					<a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
					<a class="breadcrumb">Usuários</a>
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
						<th>E-mail</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($usuarios as $usuario)
						<tr>
							<td>{{$usuario->id}}</td>
							<td>{{$usuario->name}}</td>
							<td>{{$usuario->email}}</td>
							<td>
								@can('usuario_editar')
								<a class="btn upcolor" href="{{route('admin.usuarios.editar', $usuario->id)}}">Editar</a>
								<a class="btn upcolor" href="{{route('admin.usuarios.papel', $usuario->id)}}">Cargos</a>
								<a class="btn red" href="javascript: if(confirm('Deseja deletar esse usuário?')){window.location.href = '{{route('admin.usuarios.deletar', $usuario->id)}}'}">Apagar</a>
								@endcan
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="row">
			<a href="{{route('admin.usuarios.adicionar')}}" class="btn upcolor">Adicionar Usuário</a>
		</div>
	</div>
@endsection