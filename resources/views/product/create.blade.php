@extends('layouts.layout')

@section('conteudo')
    <h1>Add Prodoct</h1>
    <br>    
    <form action="{{route('product.create')}}" method="POST">
        @include('product.partials.form')
    </form>

    @if($errors->any())
        <x-Alert/>
    @endif

@endsection