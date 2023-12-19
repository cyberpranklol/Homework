@extends('layout')

@section('title')
    allProducts
@endsection

@section('content')

<p>
    <table>
        <caption>Sample Table</caption>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($allProducts as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a href="/admin/delete-product/ {{$product->id}}">
                            <button>Obrisi</button>
                        </a>
                        <button>Edituj</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</p>

@endsection
