<!doctype html>
<html>
<head>
    <title>Document</title>
</head>
    <body>
    <h1>Proizvodi</h1>
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Naziv proizvoda</th>
            <th>Opis</th>
            <th>Kolicina</th>
            <th>Cena</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->amount }}</td>
                <td>{{ $product->price }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </body>
</html>
