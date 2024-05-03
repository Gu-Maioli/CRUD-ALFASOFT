@extends('layouts.layout')

@section('conteudo')
  <h1>Add contact</h1>
  <br>
  <form action="{{route('contact.create')}}" method="POST">
    @include('contact.partials.form')
  </form>

  @if ($errors->any())
    <x-Alert/>
  @endif
      
@endsection
