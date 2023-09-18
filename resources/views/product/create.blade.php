@extends('app')

@section('content')
<a href="{{route('product.index')}}">Regresar</a>
<form method="POST" action="{{route('product.store')}}">
    @csrf
    <label>Nombre</label>
    <input name="name" type="text">
    @error('name')
    <p style="color: red;">{{ $message }}</p>
    @enderror
    <br>
    <label>Referencia</label>
    <input name="reference" type="text">
    @error('reference')
    <p style="color: red;">{{ $message }}</p>
    @enderror
    <br>
    <label>Precio</label>
    <input name="price" type="number">
    @error('price')
    <p style="color: red;">{{ $message }}</p>
    @enderror
    <br>
    <label>Peso</label>
    <input name="weight" type="text">
    @error('weight')
    <p style="color: red;">{{ $message }}</p>
    @enderror
    <br>
    <label>Cantidad</label>
    <input name="stock" type="text">
    @error('stock')
    <p style="color: red;">{{ $message }}</p>
    @enderror
    <br>
    <label>Fecha</label>
    <input name="fecha" type="date">
    @error('fecha')
    <p style="color: red;">{{ $message }}</p>
    @enderror
    <br>
    <input type="submit" value="Crear">
</form>

@endsection
