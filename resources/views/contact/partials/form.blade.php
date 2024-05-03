@csrf()
<div class="mb-3">
    <label for="InputName" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="InputName"
        value="{{ $contact->name ?? old('name')}}">
</div>
<div class="mb-3">
    <label for="InputEmail" class="form-label">Email address</label>
    <input type="email" class="form-control" id="InputEmail" name="email"
        value="{{$contact->email ?? old('email')}}" >
</div> 
<div class="mb-3">
    <label for="InputContact" class="form-label" >Contact</label>
    <input type="number" class="form-control" name="contact" id="InputContact"
        value="{{$contact->contact ?? old('contact')}}">
</div>
<a href="{{ route('contact.index') }}">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
</svg>
</a>
<button type="submit" class="btn btn-primary">Submit</button>