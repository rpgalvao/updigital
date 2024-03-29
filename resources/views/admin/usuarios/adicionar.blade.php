@extends('layouts.app')

@section('content')
	<div class="container">
		<h4 class="center">Adicionar Usuário</h4>
		<div class="row">
			<nav>
				<div class="nav-wrapper blue-grey lighten-3">
					<div class="col s12">
					<a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
					<a href="{{route('admin.usuarios')}}" class="breadcrumb">Lista de Usuários</a>
					<a class="breadcrumb">Adicionar Usuário</a>
					</div>
				</div>
			</nav>
		</div>
		<div class="row">
			<form action="{{route('admin.usuarios.salvar')}}" method="POST">
				{{ csrf_field() }}
				@include('admin.usuarios._form')
				<button class="btn blue-grey">Salvar</button>
			</form>
		</div>
	</div>

@endsection	