<?php

namespace App\Controllers;

use App\Models\Contact;

class ContactController extends BaseController
{
    protected $contact;

    function __construct()
    {
        $this->contact = new Contact();
    }

    public function index()
    {
        $data['contacts'] = $this->contact->findAll();

        return view('contacts/index', $data);
    }

    public function create()
    {
        $this->contact->insert([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'address' => $this->request->getPost('address'),
        ]);

        return redirect('contact')->with('success', 'Data Added Successfully');
    }
}
