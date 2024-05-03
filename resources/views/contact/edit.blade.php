@extends('layouts.layout')

@section('conteudo')

  <h1>Edit Contact</h1>
  <br>
  <form action="{{route('contact.update', $contact->id) }}" method="POST">
      @method('PUT')
      @include('contact.partials.form', ['contact' => $contact])
  </form>

  @if ($errors->any())  
    <x-Alert>
      <!-- Pode enviar valor para o component criado (Alert) -->
    </x-Alert>
  @endif
@endsection
