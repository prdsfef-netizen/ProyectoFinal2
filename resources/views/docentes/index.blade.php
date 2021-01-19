@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif


<a href="{{ url ('docentes/create') }}">Agregar Docente</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>RFID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Numero de Empleado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($docentes as $docente)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$docente->rfid}}</td>
                <td>{{$docente->Nombres}}</td>
                <td>{{$docente->Apellidos}}</td>
                <td>{{$docente->No_Empleado}}</td>
                <td>
                <a href="{{ url ('/docentes/'.$docente->id.'/edit')}}">
                    Editar    
                    </a> |
                    <form method="post" action="{{ url('/docentes/'.$docente->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection