@extends('layout')

@section('title')
    edit
@endsection

@section('content')
    <div class="container mt-5">
        <form method="POST" action="/submit-form">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input value="{{$product->name}}" type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <input value="{{$product->description}}" type="text" class="form-control" id="name" name="description" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input value="{{$product->price}}" type="number" class="form-control" id="price" name="price" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="amount" class="form-label">Amount:</label>
                <input value="{{$product->amount}}" type="number" class="form-control" id="amount" name="amount" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
