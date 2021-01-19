@extends('layouts.app')

@section('content')

<div class="container">

@if(count($errors)>0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li> {{ $errors}} </li>            
        @endforeach
    </ul>
</div>
@endif

cracion de usuarios
<a href="{{ url ('docentes') }}">Inicio</a>
<form action="{{ url('/docentes')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    @include('docentes.form',['Modo'=>'crear'])

</form>
</div>
@endsection