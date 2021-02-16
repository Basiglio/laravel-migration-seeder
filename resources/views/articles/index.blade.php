@extends('layout.main')




@section('header_content')
  <h1>Tutti i miei articoli</h1>
@endsection


@section('main_content')
  <table class="table">

  </table>
@endsection


@section('footer_content')
  <a class="btn btn-warning" href="{{route('home')}}">Esci dal backend</a>
@endsection

