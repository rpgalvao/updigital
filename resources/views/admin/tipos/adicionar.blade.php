@extends('layouts.app')

@section('content')
	<div class="container">
		<h4 class="center">Adicionar Tipo de Imóvel</h4>
		<div class="row">
			<nav>
				<div class="nav-wrapper blue-grey lighten-3">
					<div class="col s12">
					<a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
					<a href="{{route('admin.tipos')}}" class="breadcrumb">Lista de Tipos de Imóveis</a>
					<a class="breadcrumb">Adicionar Tipo de Imóvel</a>
					</div>
				</div>
			</nav>
		</div>
		<div class="row">
			<form action="{{route('admin.tipos.salvar')}}" method="POST">
				{{ csrf_field() }}
				@include('admin.tipos._form')
				<button class="btn blue-grey">Salvar</button>
			</form>
		</div>
	</div>

@endsection	