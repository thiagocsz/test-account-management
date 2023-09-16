@extends('layouts.main')

@section('title', 'Edit Contact')

@section('content')
<div class="card">
  <div class="card-header">
      <h3>
          Edit Contact
      </h3>
  </div>
  <div class="card-body">
        <div>
            @include('layouts.build.messages')
            <form method="POST" action="{{ route('contact.update', $contact->id) }}">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input value="{{ $contact->name }}" name="name" type="text" class="form-control" aria-describedby="nameHelp">
                  <div id="nameHelp" class="form-text">The name field must have at least 6 characters</div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input value="{{ $contact->email }}" required type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                  <label class="form-label">Contact</label>
                  <input value="{{ $contact->contact }}" type="number" name="contact" class="form-control" aria-describedby="contactHelp">
                  <div id="contactHelp" class="form-text">Fill in this field with exactly 9 numbers</div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
</div>
@endsection