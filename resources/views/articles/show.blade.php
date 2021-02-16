@extends('layout.main')



@section('header_content')
  <h1 class="text-center">Questo è l'articolo che hai selezionato:</h1>
@endsection

@section('main_content')
  <h2 class="text-center mt-4"><em>{{$article->title}}</em></h2>
  <p>{{$article->text}}</p>  
  <h4 class="text-right">Autore: {{$article->author}}</h4>  
  <h4 class="text-right">Pubblicato il: {{$article->pubblication}}</h4>
@endsection



@section('footer_content')
  <a class="btn btn-warning" href="{{route('articles.index')}}">Torna indietro</a>
@endsection