@extends('app')

@section('content')
    <a href="{{ route('product.create') }}">Crear Nuevo Producto</a>
    <ul>
        <table  border="bold" class="table">
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
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->reference }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->weight }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->fecha }}</td>
                        <td><a href="{{ route('product.edit', $product->id) }}">Editar</a></td>
                        <td><form method="POST" action="{{route('product.destroy',$product->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                        </form></td>
                    </tr>
                @empty
                    <p>No data</p>
                @endforelse
            </tbody>
        </table>

    </ul>
@endsection
