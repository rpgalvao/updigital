@extends('layouts.app')

@section('content')
	<div class="container">
		<h4 class="center">Adicionar Imagens</h4>
		<div class="row">
			<nav>
				<div class="nav-wrapper blue-grey lighten-3">
					<div class="col s12">
					<a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
					<a href="{{route('admin.imoveis')}}" class="breadcrumb">Lista de Imóveis</a>
					<a href="{{route('admin.galerias', $imovel->id)}}" class="breadcrumb">Lista de Imagens</a>
					<a class="breadcrumb">Adicionar Imagens</a>
					</div>
				</div>
			</nav>
		</div>
		<div class="row">
			<form action="{{route('admin.galerias.salvar', $imovel->id)}}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				@include('admin.galerias._form')
				<button class="btn blue-grey">Salvar</button>
			</form>
		</div>
	</div>
@endsection