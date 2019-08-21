@extends('layouts.app')

@section('content')
	<div class="container">
		<h4 class="center">Editar Cargo</h4>
		<div class="row">
			<nav>
				<div class="nav-wrapper blue-grey lighten-3">
					<div class="col s12">
					<a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
					<a href="{{route('admin.papel')}}" class="breadcrumb">Lista de Cargos</a>
					<a class="breadcrumb">Editar Cargo</a>
					</div>
				</div>
			</nav>
		</div>
		<div class="row">
			<form action="{{route('admin.papel.atualizar', $registro->id)}}" method="POST">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="put">
				@include('admin.papel._form')
				<button class="btn blue-grey">Atualizar</button>
			</form>
		</div>
	</div>

@endsection	