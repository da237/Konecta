@extends('layouts.app')

@section('content')

<form method="POST" action="{{route('product.store')}}">
    @csrf
    <label>Nombre</label>
    <input name="name" type="text">
    <br>
    <label>Referencia</label>
    <input name="reference" type="text">
    <br>
    <label>Precio</label>
    <input name="price" type="number">
    <br>
    <label>Peso</label>
    <input name="weight" type="text">
    <br>
    <label>Cantidad</label>
    <input name="stock" type="text">
    <br>
    <label>Fecha</label>
    <input name="fecha" type="date">
    <br>
    <input type="submit" value="Crear">
</form>

@endsection
