@extends('layout')

@section('content')
<p>
    <form action="/admin/save-product" method="{{route('snimanjeOglasa')}}>
    {{ csrf_field() }}

        <div>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            @endif
        </div>

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{old('name')}}"><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" value="{{old('description')}}"></textarea><br><br>

        <label for="amount">Amount:</label><br>
        <input type="number" id="amount" name="amount" min="1" value="{{old('amount')}}"><br><br>

        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" min="0" step="0.01" value="{{old('price')}}"><br><br>

        <label for="image">Image:</label><br>
        <input type="text" id="image" name="image" value="{{old('image')}}"><br><br>

        <input type="submit" value="Submit">
    </form>
</p>
@endsection
