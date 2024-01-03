@extends('layout')

@section('title')
    Dashboard
@endsection

@section('content')

    <div class="container mt-5">
        <form method="POST" action="/send-contact">

            @if ($errors->any())
                <div class="alert alert-danger">
                    Greska: {{$errors->first()}}
                </div>
            @endif

            {{ csrf_field() }}

            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="mb-3">
                <label for="subject" class="form-label">Subject:</label>
                <input type="text" class="form-control" id="subject" name="subject">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4" cols="50"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Pošalji poruku</button>
        </form>
    </div>

@endsection

