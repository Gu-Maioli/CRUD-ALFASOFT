@extends('layouts.layout')

@section('conteudo')
    <h1>Details Contact</h1>
    <div class="mb-3">
        <label for="InputName" class="form-label">Name</label>
        <input disabled type="text" class="form-control" name="name" id="InputName" value="{{$contact->name}}">
    </div>
    <div class="mb-3">
        <label for="InputEmail" class="form-label">Email address</label>
        <input disabled type="email" class="form-control" name="email" id="InputEmail" value="{{$contact->email}}">
    </div>
    <div class="mb-3">
        <label for="InputContact" class="form-label">Contact</label>
        <input disabled type="number" class="form-control" name="contact" id="InputContact" value="{{$contact->contact}}">
    </div>
    <div class="mb-3">
        <a href="{{ route('contact.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
            </svg>
        </a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="{{ route('contact.edit', $contact->id) }}">
            <button class="btn btn-success">
                Edit
            </button>
        </a>
        <br>
        <br>
        <form action="{{ route('contact.delete', $contact->id) }}" method="POST">
            @csrf()
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                Delete
            </button>
        </form>
    </div>
@endsection