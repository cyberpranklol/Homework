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
        @foreach($contacts as $contact)
            <tr>
                <td>{{$contact->id}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->subject}}</td>
                <td>{{$contact->message}}</td>
                <td>
                    <a href="{{route('deleteContact', ['contact'=>$contact->id])}}" href="/admin/delete-contact/ {{$contact->id}}">
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
