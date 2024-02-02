<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index(Contact $contact)
    {
        $contacts = $contact->getAll();
        return view('index', compact('contacts'));
    }

    public function store()
    {
        return view('contact/index');
    }

    public function create(Request $request, Contact $contact)
    {
        $contact->addContact($request->all());
        $contacts = $contact->getAll();

        return view('index', compact('contacts'));
    }

    public function edit(string|int $id, Contact $contact)
    {
        if(!$contact = $contact->getById($id)){
            return back();
        }

        return view('contact/edit', compact(['contact']));
    }

    public function update(Request $request, string|int $id, Contact $contact)
    {
        if(!$contact = $contact->getById($id)){
            return back();
        }

        $contact->updateContact($request->all(), $id);

        return redirect()->route('index');
    }

    public function delete(string|int $id, Contact $contact)
    {
        if(!$contact = $contact->find($id)){
            return back();
        }

        $contact->delete();

        return redirect()->route('index');
    }
}
