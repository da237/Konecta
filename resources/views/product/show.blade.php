@extends('app')


@section('content')
<a href="{{route('product.index')}}"></a>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="row">Id</th>
        <td>Nombre</td>
        <td>Referencia</td>
        <td>Precio</td>
        <td>Peso</td>
        <td>Cantidad</td>
        <td>Fecha</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->reference}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->weight}}</td>
        <td>{{$product->stock}}</td>
        <td>{{$product->fecha}}</td>
      </tr>
    </tbody>
</table>

@endsection
