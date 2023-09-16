<?php

namespace App\Repositories;

use App\Models\Contact;

class ContactRepository
{

    public function getAll() {
        return Contact::all();
    }

    public function getById($id) {
        $contact = Contact::find($id);

        if(!$contact){
            return false;
        }

        return $contact;
    }

    public function update(Contact $contact, $data) {
        $contact->update([
            'name' => $data['name'],
            'contact' => $data['contact'],
            'email' => $data['email']
        ]);

        if(!$contact){
            return false;
        }
        
        return $contact;
    }

    public function store($data) {
        $contact = Contact::create([
            'name' => $data['name'],
            'contact' => $data['contact'],
            'email' => $data['email']
        ]);

        if(!$contact){
            return false;
        }
        
        return $contact;
    }
    
    public function destroy(Contact $contact)
    {
        return $contact->delete();
    }
}