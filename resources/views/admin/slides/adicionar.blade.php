@extends('layouts.app')

@section('content')
	<div class="container">
		<h4 class="center">Adicionar Slide</h4>
		<div class="row">
			<nav>
				<div class="nav-wrapper blue-grey lighten-3">
					<div class="col s12">
					<a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
					<a href="{{route('admin.slides')}}" class="breadcrumb">Lista de Slides</a>
					<a class="breadcrumb">Adicionar Slide</a>
					</div>
				</div>
			</nav>
		</div>
		<div class="row">
			<form action="{{route('admin.slides.salvar')}}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				@include('admin.slides._form')
				<button class="btn blue-grey">Salvar</button>
			</form>
		</div>
	</div>
@endsection