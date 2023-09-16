@extends('layouts.main')

@section('title', 'Add Contact')

@section('content')
<div class="card">
  <div class="card-header">
      <h3>
          Add Contact
      </h3>
  </div>
  <div class="card-body">
        <div>
            @include('layouts.build.messages')
            <form method="POST" action="{{ route('contact.store') }}">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input name="name" type="text" class="form-control" aria-describedby="nameHelp">
                  <div id="nameHelp" class="form-text">The name field must have at least 6 characters</div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input required type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                  <label class="form-label">Contact</label>
                  <input type="number" name="contact" class="form-control" required aria-describedby="contactHelp">
                  <div id="contactHelp" class="form-text">Fill in this field with exactly 9 numbers</div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>
@endsection