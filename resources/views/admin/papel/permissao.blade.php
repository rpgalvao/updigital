@extends('layouts.app')

@section('content')
	<div class="container">
		<h4 class="center">Lista de Permissões para {{ $papel->nome }}</h4>
		<div class="row">
			<nav>
				<div class="nav-wrapper blue-grey lighten-3">
					<div class="col s12">
					<a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
					<a href="{{route('admin.usuarios')}}" class="breadcrumb">Lista de Usuários</a>
					<a href="{{route('admin.papel')}}" class="breadcrumb">Lista de Cargos</a>
					<a class="breadcrumb">Lista de Permissões</a>
					</div>
				</div>
			</nav>
		</div>
		<div class="row">
			<form action="{{ route('admin.papel.permissao.salvar', $papel->id) }}" method="POST">
				{{ csrf_field() }}
				<div class="input-field">
					<select name="id_permissao">
						@foreach($permissoes as $permissao)
							<option value="{{ $permissao->id }}">{{ $permissao->nome }}</option>
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
						<th>Permissão</th>
						<th>Descrição</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($papel->permissoes as $permissao)
						<tr>
							<td>{{$permissao->nome}}</td>
							<td>{{$permissao->descricao}}</td>
							<td>
								<a class="btn red" href="javascript: if(confirm('Deseja remover essa permissão?')){window.location.href = '{{route('admin.papel.permissao.remover', [$papel->id, $permissao->id])}}'}">Remover</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection