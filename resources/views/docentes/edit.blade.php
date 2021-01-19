@extends('layouts.app')

@section('content')

<div class="container">

<a href="{{ url ('docentes') }}">Inicio</a>

<form action="{{ URL ('/docentes/'.$docente->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH')}}

    @include('docentes.form',['Modo'=>'editar'])

</form>
</div>
@endsection