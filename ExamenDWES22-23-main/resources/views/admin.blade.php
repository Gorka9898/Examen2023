@extends('layouts.app')

@section('content')

<table class="table " style="border: 1px solid black;">
<tr>
    <td><strong>Nombre</strong></td>
    <td><strong>Apellido</strong></td>
</tr>
@foreach($conductor as $conductor)

<tr>
    <td>{{$conductor->nombre}}</td>
    <td>{{$conductor->apellidos}}</td>
</tr>

@endforeach
</table>

@endsection