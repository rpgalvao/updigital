@extends('layouts.app')

@section('content')
	<div class="container">
		<h4 class="center">Editar Página</h4>
		<div class="row">
			<nav>
				<div class="nav-wrapper blue-grey lighten-3">
					<div class="col s12">
					<a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
					<a href="{{route('admin.paginas')}}" class="breadcrumb">Lista de Páginas</a>
					<a class="breadcrumb">Editar Página</a>
					</div>
				</div>
			</nav>
		</div>
		<div class="row">
			<form action="{{route('admin.paginas.atualizar', $pagina->id)}}" method="POST">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="put">
				@include('admin.paginas._form')
				<button class="btn blue-grey">Atualizar</button>
			</form>
		</div>
	</div>

@endsection