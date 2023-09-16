<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Services\ContactService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $service;

    public function __construct(ContactService $service)
    {
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = $this->service->getAll();
        return view('pages.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request)
    {
        $contact = $this->service->store($request->validated());
        if(!$contact){
            return redirect()->back()->with('warning', 'An error occurred while creating the new contact');
        }
        return redirect()->back()->with('success', 'Contact created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = $this->service->getById($id);
        return view('pages.contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactRequest $request, string $id)
    {
        $contact = $this->service->update($request->validated(), $id);
        if(!$contact){
            return redirect()->back()->with('warning', 'An error occurred while updating the contact');
        }
        return redirect()->back()->with('success', 'Contact updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $destroy = $this->service->destroy($request);

        if (!$destroy) {
            return redirect()->back()->withErrors("Error removing contact");
        }
        return redirect()->back()->with('success', "Contact successfully removed");
    }
}
