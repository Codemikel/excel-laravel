<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <div>
            <p>
                <a href="{{ route('products.export.collection') }}">Exportar (Collection)</a>
                <a href="{{ route('products.export.view') }}">Exportar (View)</a>
            </p>
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
            {{ $products->links() }}
        </div>
    </body>
</html>
