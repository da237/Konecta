@extends('app')

@section('content')
<a href="{{route('product.index')}}">Regresar</a>
<form action="{{route('product.update',$product->id)}}" method="post">
@method('PUT')
@csrf
<label>Nombre</label>
<input name="name" type="text" value="{{$product->name}}">
@error('name')
<p style="color: red;">{{ $message }}</p>
@enderror
<br>
<label>Referencia</label>
<input name="reference" type="text" value="{{$product->reference}}">
@error('reference')
<p style="color: red;">{{ $message }}</p>
@enderror
<br>
<label>Precio</label>
<input name="price" type="number" value="{{$product->price}}">
@error('price')
<p style="color: red;">{{ $message }}</p>
@enderror
<br>
<label>Peso</label>
<input name="weight" type="text" value="{{$product->weight}}">
@error('weight')
<p style="color: red;">{{ $message }}</p>
@enderror
<br>
<label>Cantidad</label>
<input name="stock" type="text" value="{{$product->stock}}">
@error('stock')
<p style="color: red;">{{ $message }}</p>
@enderror
<br>
<label>Fecha</label>
<input name="fecha" type="date" value="{{$product->fecha}}">
@error('fecha')
<p style="color: red;">{{ $message }}</p>
@enderror
<br>
<input type="submit" value="Actualizar">
</form>

@endsection
