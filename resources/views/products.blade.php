@extends('layout')

@section('title')
    Products
@endsection

@section('content')

    <p>
        <form method="POST" action="/admin/add-product">

            @if($errors->any())
                <p>Error: {{$errors->first()}} </p>
           @endif

            @csrf

            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br><br>

            <label for="description">Description:</label><br>
            <textarea id="description" name="description"></textarea><br><br>

            <label for="amount">Amount:</label><br>
            <input type="number" id="amount" name="amount"><br><br>

            <label for="price">Price:</label><br>
            <input type="number" id="price" name="price"><br><br>

            <label for="image">Image:</label><br>
            <input type="text" id="image" name="image"><br><br>

            <button type="submit">Submit</button>
        </form>
    </p>

@endsection
