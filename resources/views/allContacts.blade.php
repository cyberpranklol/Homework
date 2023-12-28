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
                <th>Price</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->subject}}</td>
                    <td>{{$contact->message}}</td>
                    <td>
                        <a href="{{route('deleteContact', ['contact'=>$contact->id])}}" class="btn btn-danger">Obrisi</a>
                        <a class="btn btn-warning">Edituj</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
