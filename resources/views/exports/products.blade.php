<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Resumen</th>
        <th>Precio</th>
        <th>Existencia</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->excerpt }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->stock }}</td>
    </tr>
    @endforeach
</table>