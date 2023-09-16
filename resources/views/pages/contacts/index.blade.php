@extends('layouts.main')

@section('title', 'Contact List')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>
            Contact list
        </h3>
    </div>
    <div class="card-body">
        <div>
            @include('layouts.build.messages')
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>E-mail</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->contact }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>
                                <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></a>
                                <button data-bs-toggle="modal" data-bs-target="#modal-delete"
                                        data-route="{{ route('contact.destroy', $contact->id) }}" type="button"
                                        class="btn btn-sm btn-default" title="Delete">
                                        <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>E-mail</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection