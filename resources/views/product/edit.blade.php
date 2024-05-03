@extends('layouts.layout')

@section('conteudo')
    <h1>Edit Product</h1>
    <br>
    <form action="{{route('product.update', $product->id)}}" method="POST">
        @method('PUT')
        @include('product.partials.form', ['product' => $product])
    </form>

    @if($errors->any())
        <x-Alert>
            
        </x-Alert>
    @endif

@endsection