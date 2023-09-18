@extends('app')

@section('content')
<a href="{{route('product.index')}}">Regresar</a>
<form action="{{route('product.update',$product->id)}}" method="post">
@method('PUT')
@csrf
<label>Nombre</label>
<input name="name" type="text" value="{{$product->name}}">
<br>
<label>Referencia</label>
<input name="reference" type="text" value="{{$product->reference}}">
<br>
<label>Precio</label>
<input name="price" type="number" value="{{$product->price}}">
<br>
<label>Peso</label>
<input name="weight" type="text" value="{{$product->weight}}">
<br>
<label>Cantidad</label>
<input name="stock" type="text" value="{{$product->stock}}">
<br>
<label>Fecha</label>
<input name="fecha" type="date" value="{{$product->fecha}}">
<br>
<input type="submit" value="Actualizar">
</form>

@endsection
