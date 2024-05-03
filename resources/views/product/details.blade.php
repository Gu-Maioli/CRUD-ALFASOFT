@extends('layouts.layout')

@section('conteudo')
<h1>Details Product</h1>
<div class="mb-3">
    <label for="InputName" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="InputName"
        value="{{$product->name}}">
</div>
<div class="mb-3">
    <label for="InputDescription" class="form-label">Description</label>
    <input type="text" name="description" class="form-control" id="InputDescription" 
        value="{{$product->description}}">
</div>
<div class="mb-3">
    <label for="InputValue" class="form-label">Value</label>
    <input type="number" name="value" class="form-control" id="InputValue"
        value="{{$product->value}}">
</div>
<div class="mb-3">
    <label for="InputUnitOfMeasure" class="form-label">Unit of Measure</label>
    <input type="text" name="unit_of_measure" class="form-control" id="InputUnitOfMeasure"
        value="{{$product->unit_of_measure}}">
</div>
<div class="mb-3">
    <a href="{{ route('product.index') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
        </svg>
    </a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="{{ route('product.edit', $product->id) }}">
        <button class="btn btn-success">
            Edit
        </button>
    </a>
    <br>
    <br>
    <form action="{{ route('product.delete', $product->id) }}" method="POST">
        @csrf()
        @method('DELETE')
        <button type="submit" class="btn btn-danger">
            Delete
        </button>
    </form>
</div>
@endsection