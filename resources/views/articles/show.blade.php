@extends('layout.main')



@section('header_content')
  <h1>Questo è l'articolo che hai selezionato:</h1>
@endsection

@section('main_content')
  <h2><em>{{$article->title}}</em></h2>
  <h3>Testo:</h3>
  <p>{{$article->text}}</p>  
  <h4>Autore: {{$article->author}}</h4>  
  <h4>Pubblicato il: {{$article->pubblication}}</h4>
@endsection



@section('footer_content')
  <a class="btn btn-warning" href="{{route('articles.index')}}">Torna indietro</a>
@endsection