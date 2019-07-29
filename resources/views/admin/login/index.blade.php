@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Entrar</h3>
        <form action="{{ route('admin.login') }}" method="POST">
        	@include('admin.login._form')

        	{{ csrf_field() }}
        	<button class="btn blue-grey">Entrar</button>
        </form>
    </div>
@endsection