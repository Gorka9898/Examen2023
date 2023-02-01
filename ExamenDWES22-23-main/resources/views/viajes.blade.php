@extends('layouts.app')

@section('content')

<table class="table " style="border: 1px solid black;">
<tr>
    <td><strong>Origen</strong></td>
    <td><strong>Destino</strong></td>
    <td><strong>Fecha</strong></td>
    <td><strong>Reservar</strong></td>
</tr>
@foreach($viaje as $viaje)

<tr>
    <td>{{$viaje->origen}}</td>
    <td>{{$viaje->destino}}</td>
    <td>{{$viaje->fecha}}</td>
    <td>
        <form action="{{route('reservar', [$viaje->id])}}" method="post">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-warning">Reservar</button>
        </form>
    </td>
</tr>

@endforeach
</table>

@endsection