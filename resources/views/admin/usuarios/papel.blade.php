@extends('layouts.app')

@section('content')
	<div class="container">
		<h4 class="center">Lista de Cargos para {{ $usuario->name }}</h4>
		<div class="row">
			<nav>
				<div class="nav-wrapper blue-grey lighten-3">
					<div class="col s12">
					<a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
					<a href="{{route('admin.usuarios')}}" class="breadcrumb">Lista de Usuários</a>
					<a class="breadcrumb">Lista de Cargos</a>
					</div>
				</div>
			</nav>
		</div>
		<div class="row">
			<form action="{{ route('admin.usuarios.papel.salvar', $usuario->id) }}" method="POST">
				{{ csrf_field() }}
				<div class="input-field">
					<select name="papel_id">
						@foreach($papeis as $papel)
							<option value="{{ $papel->id }}">{{ $papel->nome }}</option>
						@endforeach
					</select>
				</div>
				<button class="btn blue-grey">Adicionar</button>
			</form>
		</div>
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>Papel</th>
						<th>Descrição</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($usuario->papeis as $papel)
						<tr>
							<td>{{$papel->nome}}</td>
							<td>{{$papel->descricao}}</td>
							<td>
								<a class="btn red" href="javascript: if(confirm('Deseja deletar esse cargo?')){window.location.href = '{{route('admin.usuarios.papel.remover', [$usuario->id, $papel->id])}}'}">Remover</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection