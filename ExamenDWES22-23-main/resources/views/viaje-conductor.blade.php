@extends('layouts.app')

@section('content')


<select name="viaj" id="viaj">
@foreach($viaje as $viaje)
<option value="{{$viaje->origen}}">{{$viaje->origen}}</option>


@endforeach
</select><br>

<select name="conductor" id="conductor">
@foreach($conductor as $conductor)
<option value="{{$conductor->nombre}}">{{$conductor->nombre}}</option>


@endforeach
</select><br>
<button>Enlazar</button>



@endsection