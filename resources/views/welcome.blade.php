@extends('layout')

@section('title')
    Home
@endsection

@section('content')

    @foreach($products as $one)
        <p>{{$one->name}}</p>
    @endforeach

    <form method="POST" action="/send-contact">

        @if ($errors->any())
            <p>Greska: {{$errors->first() }}</p>
        @endif

        {{ csrf_field() }}
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="subject">Subject:</label><br>
        <input type="text" id="subject" name="subject"><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Pošalji poruku">
    </form>

@endsection

