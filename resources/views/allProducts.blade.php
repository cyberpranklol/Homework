@extends('layout')

@section('title')
    allProducts
@endsection

@section('content')
    <div class="container mt-5">
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Amount</th>
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
                    <td>{{$product->amount}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a href="{{ route('obrisiProizvod', ['product'=>$product->id]) }}" class="btn btn-danger">Obrisi</a>
                        <a href="{{ route('product.single', ['id'=>$product->id]) }}" class="btn btn-warning">Edituj</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
