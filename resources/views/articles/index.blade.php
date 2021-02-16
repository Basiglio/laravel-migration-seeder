@extends('layout.main')




@section('header_content')
  <h1>Tutti i miei articoli</h1>
@endsection


@section('main_content')
  <table class="table">
    <thead>
      <tr>
        <td>Titolo</td>
        <td>Sottotitolo</td>
        <td>Autore</td>
        <td>Data di Pubblicazione</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($articles as $item)
      <tr>
        <td>{{$item->title}}</td>
        <td>{{$item->subtitle}}</td>
        <td>{{$item->author}}</td>
        <td>{{$item->pubblication}}</td>
      </tr>
          
      @endforeach
    </tbody>
  </table>
@endsection


@section('footer_content')
  <a class="btn btn-warning" href="{{route('home')}}">Esci dal backend</a>
@endsection

