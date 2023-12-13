@extends('layout')

@section('title')
    Contact
@endsection

@section('content')
   <p>
       <form action="/posalji-poruku" method="post">
           <label for="email">E-mail:</label><br>
           <input type="email" id="email" name="email" required><br><br>

           <label for="subject">Subject:</label><br>
           <input type="text" id="subject" name="subject" required><br><br>

           <label for="message">Message:</label><br>
           <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

           <input type="submit" value="Posalji">
       </form>
   </p>
@endsection
