@extends('layouts.app')

@section('content')
	<div class="container">
		<h4 class="center">Adicionar Cidade</h4>
		<div class="row">
			<nav>
				<div class="nav-wrapper blue-grey lighten-3">
					<div class="col s12">
					<a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
					<a href="{{route('admin.cidades')}}" class="breadcrumb">Lista de Cidades</a>
					<a class="breadcrumb">Adicionar Cidade</a>
					</div>
				</div>
			</nav>
		</div>
		<div class="row">
			<form action="{{route('admin.cidades.salvar')}}" method="POST">
				{{ csrf_field() }}
				@include('admin.cidades._form')
				<button class="btn blue-grey">Salvar</button>
			</form>
		</div>
	</div>

@endsection