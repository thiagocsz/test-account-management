<?php

namespace App\Services;

use App\Repositories\ContactRepository;

class ContactService
{
    protected $repository;

    public function __construct(ContactRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll() {
        return $this->repository->getAll();
    }
    public function getById($id) {
        return $this->repository->getById($id);
    }

    public function update($data, $id) {
        $contact = $this->repository->getById($id);
        return $this->repository->update($contact, $data);
    }

    public function store(array $data) {
        return $this->repository->store($data);
    }

    public function destroy($data)
    {   
        if($data && isset($data->id)){
            $contact = $this->getById($data->id);
            return $this->repository->destroy($contact);
        }
        
        return false;
    }
}