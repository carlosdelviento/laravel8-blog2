@extends('layouts.plantilla')

@section('title','Cursos')

@section('content')
	<h1>Bienvenido a la página principal de cursos</h1>
	<a href="{{route('cursos.create')}}">Crear curso</a>
	<ul>
		@foreach ($cursos as $curso)
			<li>
				<a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a>
				<br>
				{{route('cursos.show', $curso)}}
			</li>
		@endforeach
	</ul>

	{{$cursos->links()}}

@endsection