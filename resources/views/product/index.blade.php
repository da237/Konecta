@extends('layouts.app')

@section('content')
<a href="{{route('product.create')}}">Crear Nuevo Producto</a>
<ul>
    @forelse ($products as $product)

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
            <td>Editar</td>
            <td>Eliminar</td>
            {{-- <a href="{{route('product.edit',$product->id)}}" --}}
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
            <td></td>
            <td></td>
          </tr>
        </tbody>
    </table>
    @empty
    <p>No data</p>
    @endforelse
</ul>

@endsection

